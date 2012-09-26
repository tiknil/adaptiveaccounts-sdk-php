<?php
$path = '../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/AdaptiveAccounts/AdaptiveAccountsService.php');
require_once('PPLoggingManager.php');
require_once('Common/Constants.php');

$logger = new PPLoggingManager('AddPaymentCard');

$nameOnCard = new NameType();
$nameOnCard->firstName  = $_REQUEST['firstName'];
$nameOnCard->lastName = $_REQUEST['lastName'];
$nameOnCard->middleName = $_REQUEST['middleName'];
$nameOnCard->salutation = $_REQUEST['saluation'];
$nameOnCard->suffix = $_REQUEST['suffix'];

$startDate = new CardDateType($_REQUEST['startMonth'], $_REQUEST['startYear']);
$expDate = new CardDateType($_REQUEST['expirationMonth'], $_REQUEST['expirationYear']);

$billingAddress = new AddressType();
$billingAddress->line1 = $_REQUEST['billingStreet'];
$billingAddress->line2 = $_REQUEST['billingLine2'];
$billingAddress->city = $_REQUEST['billingCity'];
$billingAddress->state = $_REQUEST['billingState'];
$billingAddress->postalCode = $_REQUEST['billingPostalCode'];
$billingAddress->countryCode = $_REQUEST['billingCountryCode'];

$addPaymentCard = new AddPaymentCardRequest();
$addPaymentCard->accountId = $_REQUEST['accountID'];
$addPaymentCard->emailAddress = $_REQUEST['emailAddress'];
$addPaymentCard->createAccountKey  = $_REQUEST['createAccountKey'];
$addPaymentCard->nameOnCard = $nameOnCard;

$addPaymentCard->cardNumber  = $_REQUEST['cardNumber'];
$addPaymentCard->cardType  = $_REQUEST['cardType'];
$addPaymentCard->cardOwnerDateOfBirth  = $_REQUEST['cardOwnerDateOfBirth'];
$addPaymentCard->cardVerificationNumber = $_REQUEST['cardVerificationNumber'];
$addPaymentCard->issueNumber = $_REQUEST['issueNumber'];
$addPaymentCard->startDate  = $startDate;
$addPaymentCard->expirationDate  = $expDate;
$addPaymentCard->billingAddress = $billingAddress;
$addPaymentCard->confirmationType = $_REQUEST['confirmationType'];

if($addPaymentCard->confirmationType == 'WEB') {
	$serverName = $_SERVER['SERVER_NAME'];
	$serverPort = $_SERVER['SERVER_PORT'];
	$url=dirname('http://'.$serverName.':'.$serverPort.$_SERVER['REQUEST_URI']);
	if(isset($_REQUEST['returnURL'])) {
		$returnURL = $_REQUEST['returnURL'];
	} else {
		$returnURL = $url."/Common/WebflowReturnPage.php";
	}
	if(isset($_REQUEST['cancelURL'])) {
		$cancelURL = $_REQUEST['cancelURL'];
	} else {
		$cancelURL = $url. "/CreateAccount.html.php" ;
	}
	$webOption = new WebOptionsType();
	$webOption->cancelUrl = $cancelURL;
	$webOption->cancelUrlDescription = $_REQUEST['cancelURLDescription'];
	$webOption->returnUrl = $returnURL;
	$webOption->returnUrlDescription = $_REQUEST['returnURLDescription'];
	$addPaymentCard->webOptions = $webOption;
}


$service  = new AdaptiveAccountsService();
try {
	$response = $service->AddPaymentCard($addPaymentCard);
} catch(Exception $ex) {
	require_once 'Common/Error.php';
	exit;
}

$ack = strtoupper($response->responseEnvelope->ack);
if($ack != "SUCCESS"){
	Echo "<b>Error </b>";
	echo "<pre>";
	print_r($response);
	echo "</pre>";	
} else {
	echo "<pre>";
	print_r($response);
	echo "</pre>";
	$fundingSrcKey = $response->fundingSourceKey;
	$payPalURL = $response->redirectURL;

	echo "<table>";
	echo "<tr><td>Ack :</td><td><div id='Ack'>$ack</div> </td></tr>";
	echo "<tr><td>FundingSrcKey :</td><td><div id='FundingSrcKey'>$fundingSrcKey</div> </td></tr>";
	echo "<tr><td>Redirect URL :</td><td> <div id='Redirect URL'><a href=$payPalURL><b>Redirect To PayPal</b></a><br></div></td></tr>";
	echo "</table>";
}
require_once 'Common/Response.php';
