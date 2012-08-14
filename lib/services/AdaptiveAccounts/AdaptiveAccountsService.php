<?php 
require_once('PPBaseService.php');
require_once('AdaptiveAccounts.php');
require_once('PPUtils.php');


/**
 * AUTO GENERATED code for AdaptiveAccounts
 */
class AdaptiveAccountsService extends PPBaseService {

	// Service Version
	private static $SERVICE_VERSION = "1.0.3";

	// Service Name
	private static $SERVICE_NAME = "AdaptiveAccounts";

	public function __construct() {
		parent::__construct('AdaptiveAccounts');
	}


	/**
	 * Service Call: CreateAccount
	 * @param CreateAccountRequest $createAccountRequest
	 * @return CreateAccountResponse
	 * @throws APIException
	 */
	public function CreateAccount($createAccountRequest, $apiUsername = null) {
		$ret = new CreateAccountResponse();
		$resp = $this->call("CreateAccount", $createAccountRequest, $apiUsername);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}
	 

	/**
	 * Service Call: GetUserAgreement
	 * @param GetUserAgreementRequest $getUserAgreementRequest
	 * @return GetUserAgreementResponse
	 * @throws APIException
	 */
	public function GetUserAgreement($getUserAgreementRequest, $apiUsername = null) {
		$ret = new GetUserAgreementResponse();
		$resp = $this->call("GetUserAgreement", $getUserAgreementRequest, $apiUsername);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}
	 

	/**
	 * Service Call: GetVerifiedStatus
	 * @param GetVerifiedStatusRequest $getVerifiedStatusRequest
	 * @return GetVerifiedStatusResponse
	 * @throws APIException
	 */
	public function GetVerifiedStatus($getVerifiedStatusRequest, $apiUsername = null) {
		$ret = new GetVerifiedStatusResponse();
		$resp = $this->call("GetVerifiedStatus", $getVerifiedStatusRequest, $apiUsername);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}
	 

	/**
	 * Service Call: AddBankAccount
	 * @param AddBankAccountRequest $addBankAccountRequest
	 * @return AddBankAccountResponse
	 * @throws APIException
	 */
	public function AddBankAccount($addBankAccountRequest, $apiUsername = null) {
		$ret = new AddBankAccountResponse();
		$resp = $this->call("AddBankAccount", $addBankAccountRequest, $apiUsername);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}
	 

	/**
	 * Service Call: AddPaymentCard
	 * @param AddPaymentCardRequest $addPaymentCardRequest
	 * @return AddPaymentCardResponse
	 * @throws APIException
	 */
	public function AddPaymentCard($addPaymentCardRequest, $apiUsername = null) {
		$ret = new AddPaymentCardResponse();
		$resp = $this->call("AddPaymentCard", $addPaymentCardRequest, $apiUsername);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}
	 

	/**
	 * Service Call: SetFundingSourceConfirmed
	 * @param SetFundingSourceConfirmedRequest $setFundingSourceConfirmedRequest
	 * @return SetFundingSourceConfirmedResponse
	 * @throws APIException
	 */
	public function SetFundingSourceConfirmed($setFundingSourceConfirmedRequest, $apiUsername = null) {
		$ret = new SetFundingSourceConfirmedResponse();
		$resp = $this->call("SetFundingSourceConfirmed", $setFundingSourceConfirmedRequest, $apiUsername);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}
	 

	/**
	 * Service Call: CheckComplianceStatus
	 * @param CheckComplianceStatusRequest $checkComplianceStatusRequest
	 * @return CheckComplianceStatusResponse
	 * @throws APIException
	 */
	public function CheckComplianceStatus($checkComplianceStatusRequest, $apiUsername = null) {
		$ret = new CheckComplianceStatusResponse();
		$resp = $this->call("CheckComplianceStatus", $checkComplianceStatusRequest, $apiUsername);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}
	 
}
?>