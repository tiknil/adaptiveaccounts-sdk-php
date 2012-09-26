<?php
$path = '../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/AdaptiveAccounts/AdaptiveAccountsService.php');
require_once('PPLoggingManager.php');
require_once('Common/Constants.php');

$logger = new PPLoggingManager('GetUserAgreement');

$getUserAgreement = new GetUserAgreementRequest();
$getUserAgreement->countryCode  = $_REQUEST['countryCode'];
$getUserAgreement->createAccountKey = $_REQUEST['createAccountKey'];
$getUserAgreement->languageCode = $_REQUEST['languageCode'];

$service  = new AdaptiveAccountsService();
try {
	$response = $service->GetUserAgreement($getUserAgreement);
} catch(Exception $ex) {
	require_once 'Common/Error.php';
	exit;
}
$ack = strtoupper($response->responseEnvelope->ack);
if($ack != "SUCCESS"){
	echo "<b>Error </b>";
	echo "<pre>";
	print_r($response);
	echo "</pre>";
} else {
	echo "<pre>";
	print_r($response);
	echo "</pre>";
	echo "<table>";
	echo "<tr><td>Ack :</td><td><div id='Ack'>$ack</div> </td></tr>";
	echo "</table>";
}
require_once 'Common/Response.php';