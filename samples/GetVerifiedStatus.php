<?php
$path = '../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/AdaptiveAccounts/AdaptiveAccountsService.php');
require_once('PPLoggingManager.php');
require_once('Common/Constants.php');

$logger = new PPLoggingManager('GetVerifiedStatus');
$getVerifiedStatus = new GetVerifiedStatusRequest();
$getVerifiedStatus->emailAddress = $_REQUEST['emailAddress'];
$getVerifiedStatus->firstName = $_REQUEST['firstName'];
$getVerifiedStatus->lastName = $_REQUEST['lastName'];
$getVerifiedStatus->matchCriteria = $_REQUEST['matchCriteria'];

$service  = new AdaptiveAccountsService();
try {
	$response = $service->GetVerifiedStatus($getVerifiedStatus);
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