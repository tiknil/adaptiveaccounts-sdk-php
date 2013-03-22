<?php
require_once('PPBootStrap.php');

$setFundingSourceConfirmed = new SetFundingSourceConfirmedRequest();
$setFundingSourceConfirmed->accountId = $_REQUEST['accountId'];
$setFundingSourceConfirmed->emailAddress = $_REQUEST['emailAddress'];
$setFundingSourceConfirmed->fundingSourceKey = $_REQUEST['fundingSourceKey'];

$service  = new AdaptiveAccountsService();
try {
	$response = $service->SetFundingSourceConfirmed($setFundingSourceConfirmed);
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
	echo "<table>";
	echo "<tr><td>Ack :</td><td><div id='Ack'>$ack</div> </td></tr>";
	echo "</table>";
	echo "<pre>";
	print_r($response);
	echo "</pre>";	
}
require_once 'Common/Response.php';
