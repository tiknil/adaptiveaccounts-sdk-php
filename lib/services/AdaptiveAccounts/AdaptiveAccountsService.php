<?php 
require_once 'PPBaseService.php';
require_once 'AdaptiveAccounts.php';

/**
 * AUTO GENERATED code for AdaptiveAccounts
 */
class AdaptiveAccountsService extends PPBaseService {

	// Service Version
	private static $SERVICE_VERSION = "1.0.3";

	// Service Name
	private static $SERVICE_NAME = "AdaptiveAccounts";

    // SDK Name
	private static $SDK_NAME = "adaptiveaccounts-php-sdk";
	
	// SDK Version
	private static $SDK_VERSION = "2.0.96";

	public function __construct() {
		parent::__construct(self::$SERVICE_NAME, 'NV', array('PPPlatformServiceHandler'));
	}


	/**
	 * Service Call: CreateAccount
	 * @param CreateAccountRequest $createAccountRequest
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically 		
	 * @return CreateAccountResponse
	 * @throws APIException
	 */
	public function CreateAccount($createAccountRequest, $apiCredential = NULL) {
		$ret = new CreateAccountResponse();
		$resp = $this->call("CreateAccount", $createAccountRequest, $apiCredential);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}
	 

	/**
	 * Service Call: GetUserAgreement
	 * @param GetUserAgreementRequest $getUserAgreementRequest
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically 		
	 * @return GetUserAgreementResponse
	 * @throws APIException
	 */
	public function GetUserAgreement($getUserAgreementRequest, $apiCredential = NULL) {
		$ret = new GetUserAgreementResponse();
		$resp = $this->call("GetUserAgreement", $getUserAgreementRequest, $apiCredential);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}
	 

	/**
	 * Service Call: GetVerifiedStatus
	 * @param GetVerifiedStatusRequest $getVerifiedStatusRequest
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically 		
	 * @return GetVerifiedStatusResponse
	 * @throws APIException
	 */
	public function GetVerifiedStatus($getVerifiedStatusRequest, $apiCredential = NULL) {
		$ret = new GetVerifiedStatusResponse();
		$resp = $this->call("GetVerifiedStatus", $getVerifiedStatusRequest, $apiCredential);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}
	 

	/**
	 * Service Call: AddBankAccount
	 * @param AddBankAccountRequest $addBankAccountRequest
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically 		
	 * @return AddBankAccountResponse
	 * @throws APIException
	 */
	public function AddBankAccount($addBankAccountRequest, $apiCredential = NULL) {
		$ret = new AddBankAccountResponse();
		$resp = $this->call("AddBankAccount", $addBankAccountRequest, $apiCredential);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}
	 

	/**
	 * Service Call: AddPaymentCard
	 * @param AddPaymentCardRequest $addPaymentCardRequest
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically 		
	 * @return AddPaymentCardResponse
	 * @throws APIException
	 */
	public function AddPaymentCard($addPaymentCardRequest, $apiCredential = NULL) {
		$ret = new AddPaymentCardResponse();
		$resp = $this->call("AddPaymentCard", $addPaymentCardRequest, $apiCredential);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}
	 

	/**
	 * Service Call: SetFundingSourceConfirmed
	 * @param SetFundingSourceConfirmedRequest $setFundingSourceConfirmedRequest
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically 		
	 * @return SetFundingSourceConfirmedResponse
	 * @throws APIException
	 */
	public function SetFundingSourceConfirmed($setFundingSourceConfirmedRequest, $apiCredential = NULL) {
		$ret = new SetFundingSourceConfirmedResponse();
		$resp = $this->call("SetFundingSourceConfirmed", $setFundingSourceConfirmedRequest, $apiCredential);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}
	 

	/**
	 * Service Call: CheckComplianceStatus
	 * @param CheckComplianceStatusRequest $checkComplianceStatusRequest
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically 		
	 * @return CheckComplianceStatusResponse
	 * @throws APIException
	 */
	public function CheckComplianceStatus($checkComplianceStatusRequest, $apiCredential = NULL) {
		$ret = new CheckComplianceStatusResponse();
		$resp = $this->call("CheckComplianceStatus", $checkComplianceStatusRequest, $apiCredential);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}
	 

	/**
	 * Service Call: AddPartnerFinancialProduct
	 * @param AddPartnerFinancialProductRequest $addPartnerFinancialProductRequest
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically 		
	 * @return AddPartnerFinancialProductResponse
	 * @throws APIException
	 */
	public function AddPartnerFinancialProduct($addPartnerFinancialProductRequest, $apiCredential = NULL) {
		$ret = new AddPartnerFinancialProductResponse();
		$resp = $this->call("AddPartnerFinancialProduct", $addPartnerFinancialProductRequest, $apiCredential);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}
	 

	/**
	 * Service Call: ActivateProduct
	 * @param ActivateProductRequest $activateProductRequest
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically 		
	 * @return ActivateProductResponse
	 * @throws APIException
	 */
	public function ActivateProduct($activateProductRequest, $apiCredential = NULL) {
		$ret = new ActivateProductResponse();
		$resp = $this->call("ActivateProduct", $activateProductRequest, $apiCredential);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}
	 
}