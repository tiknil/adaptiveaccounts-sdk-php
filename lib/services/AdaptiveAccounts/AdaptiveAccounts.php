<?php
 /**
  * Stub objects for AdaptiveAccounts 
  * Auto generated code 
  * 
  */
require_once('PPUtils.php');
/**
 * This type contains the detailed error information resulting
 * from the service operation. 
 */
class ErrorData  {

	/**
	 * 
	 * @access public
	 * @var integer
	 */ 
	public $errorId;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $domain;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $subdomain;

	/**
	 * 
	 * @access public
	 * @var ErrorSeverity
	 */ 
	public $severity;

	/**
	 * 
	 * @access public
	 * @var ErrorCategory
	 */ 
	public $category;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $message;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $exceptionId;

	/**
	 * 
     * @array
	 * @access public
	 * @var ErrorParameter
	 */ 
	public $parameter;



	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			$mapKeyName =  $prefix . 'errorId';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->errorId = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'domain';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->domain = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'subdomain';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->subdomain = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'severity';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->severity = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'category';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->category = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'message';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->message = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'exceptionId';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->exceptionId = $map[$mapKeyName];
			}
			$i = 0;
			while(TRUE) {
				if (PPUtils::array_match_key($map, $prefix . "parameter($i)")) {
					$newPrefix = $prefix . "parameter($i).";
					$this->parameter[$i] = new ErrorParameter();
					$this->parameter[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * 
 */
class ErrorParameter  {

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $name;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $value;



	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			$mapKeyName =  $prefix . 'name';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->name = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'value';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->value = $map[$mapKeyName];
			}
			
		}
	}
} 



/**
 * This specifies the list of parameters with every request to
 * the service. 
 */
class RequestEnvelope  {

	/**
	 * This specifies the required detail level that is needed by a
	 * client application pertaining to a particular data component
	 * (e.g., Item, Transaction, etc.). The detail level is
	 * specified in the DetailLevelCodeType which has all the
	 * enumerated values of the detail level for each component. 
	 * @access public
	 * @var DetailLevelCode
	 */ 
	public $detailLevel;

	/**
	 * This should be the standard RFC 3066 language identification
	 * tag, e.g., en_US. 
	 * @access public
	 * @var string
	 */ 
	public $errorLanguage;


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->detailLevel != NULL) {
			$str .= $delim .  $prefix . 'detailLevel=' . urlencode($this->detailLevel);
			$delim = '&';
		}
		if($this->errorLanguage != NULL) {
			$str .= $delim .  $prefix . 'errorLanguage=' . urlencode($this->errorLanguage);
			$delim = '&';
		}
		return $str;
	}

} 



/**
 * This specifies a list of parameters with every response from
 * a service. 
 */
class ResponseEnvelope  {

	/**
	 * 
	 * @access public
	 * @var dateTime
	 */ 
	public $timestamp;

	/**
	 * Application level acknowledgement code. 
	 * @access public
	 * @var AckCode
	 */ 
	public $ack;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $correlationId;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $build;



	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			$mapKeyName =  $prefix . 'timestamp';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->timestamp = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'ack';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->ack = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'correlationId';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->correlationId = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'build';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->build = $map[$mapKeyName];
			}
			
		}
	}
} 



/**
 * This elements in this type refers to the end user of the
 * application invoking this service. 
 */
class ClientDetailsType  {

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $ipAddress;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $deviceId;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $applicationId;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $model;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $geoLocation;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $customerType;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $partnerName;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $customerId;


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->ipAddress != NULL) {
			$str .= $delim .  $prefix . 'ipAddress=' . urlencode($this->ipAddress);
			$delim = '&';
		}
		if($this->deviceId != NULL) {
			$str .= $delim .  $prefix . 'deviceId=' . urlencode($this->deviceId);
			$delim = '&';
		}
		if($this->applicationId != NULL) {
			$str .= $delim .  $prefix . 'applicationId=' . urlencode($this->applicationId);
			$delim = '&';
		}
		if($this->model != NULL) {
			$str .= $delim .  $prefix . 'model=' . urlencode($this->model);
			$delim = '&';
		}
		if($this->geoLocation != NULL) {
			$str .= $delim .  $prefix . 'geoLocation=' . urlencode($this->geoLocation);
			$delim = '&';
		}
		if($this->customerType != NULL) {
			$str .= $delim .  $prefix . 'customerType=' . urlencode($this->customerType);
			$delim = '&';
		}
		if($this->partnerName != NULL) {
			$str .= $delim .  $prefix . 'partnerName=' . urlencode($this->partnerName);
			$delim = '&';
		}
		if($this->customerId != NULL) {
			$str .= $delim .  $prefix . 'customerId=' . urlencode($this->customerId);
			$delim = '&';
		}
		return $str;
	}

} 



/**
 * This specifies a fault, encapsulating error data, with
 * specific error codes. 
 */
class FaultMessage  {

	/**
	 * 
	 * @access public
	 * @var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * 
     * @array
	 * @access public
	 * @var ErrorData
	 */ 
	public $error;



	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$i = 0;
			while(TRUE) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * Identifies a PayPal account to which this request is
 * targeted. Caller of this API has to provide ONLY one of
 * these inputs: emailAddress, accountId or phoneNumber. 
 */
class AccountIdentifierType  {

	/**
	 * Identifies the PayPal account based on the emailAddress. 
	 * @access public
	 * @var string
	 */ 
	public $emailAddress;

	/**
	 * Identifies the PayPal account based on the phoneNumber. 
	 * @access public
	 * @var string
	 */ 
	public $phoneNumber;

	/**
	 * Identifies the PayPal account based on the accountId. 
	 * @access public
	 * @var string
	 */ 
	public $accountId;

	/**
	 * Constructor with arguments
	 */
	public function __construct($emailAddress = NULL, $phoneNumber = NULL, $accountId = NULL) {
		$this->emailAddress = $emailAddress;
		$this->phoneNumber = $phoneNumber;
		$this->accountId = $accountId;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->emailAddress != NULL) {
			$str .= $delim .  $prefix . 'emailAddress=' . urlencode($this->emailAddress);
			$delim = '&';
		}
		if($this->phoneNumber != NULL) {
			$str .= $delim .  $prefix . 'phoneNumber=' . urlencode($this->phoneNumber);
			$delim = '&';
		}
		if($this->accountId != NULL) {
			$str .= $delim .  $prefix . 'accountId=' . urlencode($this->accountId);
			$delim = '&';
		}
		return $str;
	}

} 



/**
 * Valid values are: Personal, Premier, and Business. Flag="2"
 * corresponds to java.util.regex.Pattern.CASE_INSENSITIVE,
 * meaning the strings are not case-sensitive 
 */
class CreateAccountRequest  {

	/**
	 * 
	 * @access public
	 * @var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * 
	 * @access public
	 * @var ClientDetailsType
	 */ 
	public $clientDetails;

	/**
	 * Valid values are: Personal, Premier, and Business. Flag="2"
	 * corresponds to java.util.regex.Pattern.CASE_INSENSITIVE,
	 * meaning the strings are not case-sensitive 
	 * @access public
	 * @var string
	 */ 
	public $accountType;

	/**
	 * 
	 * @access public
	 * @var NameType
	 */ 
	public $name;

	/**
	 * 
	 * @access public
	 * @var date
	 */ 
	public $dateOfBirth;

	/**
	 * 
	 * @access public
	 * @var AddressType
	 */ 
	public $address;

	/**
	 * Must provide at least one of contactPhoneNumber,
	 * homePhoneNumber, or mobilePhoneNumber 
	 * @access public
	 * @var string
	 */ 
	public $contactPhoneNumber;

	/**
	 * Must provide at least one of contactPhoneNumber,
	 * homePhoneNumber, or mobilePhoneNumber 
	 * @access public
	 * @var string
	 */ 
	public $homePhoneNumber;

	/**
	 * Must provide at least one of contactPhoneNumber,
	 * homePhoneNumber, or mobilePhoneNumber 
	 * @access public
	 * @var string
	 */ 
	public $mobilePhoneNumber;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $currencyCode;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $citizenshipCountryCode;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $preferredLanguageCode;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $notificationURL;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $emailAddress;

	/**
	 * Valid values are: Mobile and Web. Mobile: Returns a key to
	 * complete the registration. Web: Returns a URL to complete
	 * the registration. 
	 * @access public
	 * @var string
	 */ 
	public $registrationType;

	/**
	 * 
	 * @access public
	 * @var CreateAccountWebOptionsType
	 */ 
	public $createAccountWebOptions;

	/**
	 * 
	 * @access public
	 * @var boolean
	 */ 
	public $suppressWelcomeEmail;

	/**
	 * Set to true if you want this account to undergo extra
	 * vetting by PayPal before becoming usable. 
	 * @access public
	 * @var boolean
	 */ 
	public $performExtraVettingOnThisAccount;

	/**
	 * tax id, ssn, itin, pan, cpf, acn, abn, etc. 
	 * @access public
	 * @var string
	 */ 
	public $taxId;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $partnerField1;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $partnerField2;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $partnerField3;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $partnerField4;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $partnerField5;

	/**
	 * Required for business account creation 
	 * @access public
	 * @var BusinessInfoType
	 */ 
	public $businessInfo;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $name = NULL, $address = NULL, $preferredLanguageCode = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->name = $name;
		$this->address = $address;
		$this->preferredLanguageCode = $preferredLanguageCode;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != NULL) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->clientDetails != NULL) {
			$newPrefix = $prefix . 'clientDetails.';
			$str .= $delim . call_user_func(array($this->clientDetails, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->accountType != NULL) {
			$str .= $delim .  $prefix . 'accountType=' . urlencode($this->accountType);
			$delim = '&';
		}
		if($this->name != NULL) {
			$newPrefix = $prefix . 'name.';
			$str .= $delim . call_user_func(array($this->name, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->dateOfBirth != NULL) {
			$str .= $delim .  $prefix . 'dateOfBirth=' . urlencode($this->dateOfBirth);
			$delim = '&';
		}
		if($this->address != NULL) {
			$newPrefix = $prefix . 'address.';
			$str .= $delim . call_user_func(array($this->address, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->contactPhoneNumber != NULL) {
			$str .= $delim .  $prefix . 'contactPhoneNumber=' . urlencode($this->contactPhoneNumber);
			$delim = '&';
		}
		if($this->homePhoneNumber != NULL) {
			$str .= $delim .  $prefix . 'homePhoneNumber=' . urlencode($this->homePhoneNumber);
			$delim = '&';
		}
		if($this->mobilePhoneNumber != NULL) {
			$str .= $delim .  $prefix . 'mobilePhoneNumber=' . urlencode($this->mobilePhoneNumber);
			$delim = '&';
		}
		if($this->currencyCode != NULL) {
			$str .= $delim .  $prefix . 'currencyCode=' . urlencode($this->currencyCode);
			$delim = '&';
		}
		if($this->citizenshipCountryCode != NULL) {
			$str .= $delim .  $prefix . 'citizenshipCountryCode=' . urlencode($this->citizenshipCountryCode);
			$delim = '&';
		}
		if($this->preferredLanguageCode != NULL) {
			$str .= $delim .  $prefix . 'preferredLanguageCode=' . urlencode($this->preferredLanguageCode);
			$delim = '&';
		}
		if($this->notificationURL != NULL) {
			$str .= $delim .  $prefix . 'notificationURL=' . urlencode($this->notificationURL);
			$delim = '&';
		}
		if($this->emailAddress != NULL) {
			$str .= $delim .  $prefix . 'emailAddress=' . urlencode($this->emailAddress);
			$delim = '&';
		}
		if($this->registrationType != NULL) {
			$str .= $delim .  $prefix . 'registrationType=' . urlencode($this->registrationType);
			$delim = '&';
		}
		if($this->createAccountWebOptions != NULL) {
			$newPrefix = $prefix . 'createAccountWebOptions.';
			$str .= $delim . call_user_func(array($this->createAccountWebOptions, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->suppressWelcomeEmail != NULL) {
			$str .= $delim .  $prefix . 'suppressWelcomeEmail=' . urlencode($this->suppressWelcomeEmail);
			$delim = '&';
		}
		if($this->performExtraVettingOnThisAccount != NULL) {
			$str .= $delim .  $prefix . 'performExtraVettingOnThisAccount=' . urlencode($this->performExtraVettingOnThisAccount);
			$delim = '&';
		}
		if($this->taxId != NULL) {
			$str .= $delim .  $prefix . 'taxId=' . urlencode($this->taxId);
			$delim = '&';
		}
		if($this->partnerField1 != NULL) {
			$str .= $delim .  $prefix . 'partnerField1=' . urlencode($this->partnerField1);
			$delim = '&';
		}
		if($this->partnerField2 != NULL) {
			$str .= $delim .  $prefix . 'partnerField2=' . urlencode($this->partnerField2);
			$delim = '&';
		}
		if($this->partnerField3 != NULL) {
			$str .= $delim .  $prefix . 'partnerField3=' . urlencode($this->partnerField3);
			$delim = '&';
		}
		if($this->partnerField4 != NULL) {
			$str .= $delim .  $prefix . 'partnerField4=' . urlencode($this->partnerField4);
			$delim = '&';
		}
		if($this->partnerField5 != NULL) {
			$str .= $delim .  $prefix . 'partnerField5=' . urlencode($this->partnerField5);
			$delim = '&';
		}
		if($this->businessInfo != NULL) {
			$newPrefix = $prefix . 'businessInfo.';
			$str .= $delim . call_user_func(array($this->businessInfo, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		return $str;
	}

} 



/**
 * Valid values are: COMPLETED 
 */
class CreateAccountResponse  {

	/**
	 * 
	 * @access public
	 * @var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $createAccountKey;

	/**
	 * Valid values are: COMPLETED 
	 * @access public
	 * @var string
	 */ 
	public $execStatus;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $redirectURL;

	/**
	 * Identifies a PayPal account. Only premier and business
	 * accounts have an accountId 
	 * @access public
	 * @var string
	 */ 
	public $accountId;

	/**
	 * 
     * @array
	 * @access public
	 * @var ErrorData
	 */ 
	public $error;



	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$mapKeyName =  $prefix . 'createAccountKey';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->createAccountKey = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'execStatus';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->execStatus = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'redirectURL';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->redirectURL = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'accountId';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->accountId = $map[$mapKeyName];
			}
			$i = 0;
			while(TRUE) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * 
 */
class GetUserAgreementRequest  {

	/**
	 * 
	 * @access public
	 * @var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $createAccountKey;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $countryCode;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $languageCode;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL) {
		$this->requestEnvelope = $requestEnvelope;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != NULL) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->createAccountKey != NULL) {
			$str .= $delim .  $prefix . 'createAccountKey=' . urlencode($this->createAccountKey);
			$delim = '&';
		}
		if($this->countryCode != NULL) {
			$str .= $delim .  $prefix . 'countryCode=' . urlencode($this->countryCode);
			$delim = '&';
		}
		if($this->languageCode != NULL) {
			$str .= $delim .  $prefix . 'languageCode=' . urlencode($this->languageCode);
			$delim = '&';
		}
		return $str;
	}

} 



/**
 * 
 */
class GetUserAgreementResponse  {

	/**
	 * 
	 * @access public
	 * @var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $agreement;

	/**
	 * 
     * @array
	 * @access public
	 * @var ErrorData
	 */ 
	public $error;



	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$mapKeyName =  $prefix . 'agreement';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->agreement = $map[$mapKeyName];
			}
			$i = 0;
			while(TRUE) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * matchCriteria determines which field(s) in addition to
 * emailAddress is used to locate the account. Currently, we
 * support matchCriteria of 'NAME' and 'NONE'. 
 */
class GetVerifiedStatusRequest  {

	/**
	 * 
	 * @access public
	 * @var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $emailAddress;

	/**
	 * matchCriteria determines which field(s) in addition to
	 * emailAddress is used to locate the account. Currently, we
	 * support matchCriteria of 'NAME' and 'NONE'. 
	 * @access public
	 * @var string
	 */ 
	public $matchCriteria;

	/**
	 * Required if matchCriteria is NAME Optional if matchCriteria
	 * is NONE 
	 * @access public
	 * @var string
	 */ 
	public $firstName;

	/**
	 * Required if matchCriteria is NAME Optional if matchCriteria
	 * is NONE 
	 * @access public
	 * @var string
	 */ 
	public $lastName;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $emailAddress = NULL, $matchCriteria = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->emailAddress = $emailAddress;
		$this->matchCriteria = $matchCriteria;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != NULL) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->emailAddress != NULL) {
			$str .= $delim .  $prefix . 'emailAddress=' . urlencode($this->emailAddress);
			$delim = '&';
		}
		if($this->matchCriteria != NULL) {
			$str .= $delim .  $prefix . 'matchCriteria=' . urlencode($this->matchCriteria);
			$delim = '&';
		}
		if($this->firstName != NULL) {
			$str .= $delim .  $prefix . 'firstName=' . urlencode($this->firstName);
			$delim = '&';
		}
		if($this->lastName != NULL) {
			$str .= $delim .  $prefix . 'lastName=' . urlencode($this->lastName);
			$delim = '&';
		}
		return $str;
	}

} 



/**
 * Returned values are: VERIFIED|UNVERIFIED. 
 */
class GetVerifiedStatusResponse  {

	/**
	 * 
	 * @access public
	 * @var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * Returned values are: VERIFIED|UNVERIFIED. 
	 * @access public
	 * @var string
	 */ 
	public $accountStatus;

	/**
	 * Returns countryCode belonging to PayPal account. 
	 * @access public
	 * @var string
	 */ 
	public $countryCode;

	/**
	 * Info about PayPal user such as emailAddress, accountId,
	 * firstName, lastName etc. 
	 * @access public
	 * @var UserInfoType
	 */ 
	public $userInfo;

	/**
	 * 
     * @array
	 * @access public
	 * @var ErrorData
	 */ 
	public $error;



	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$mapKeyName =  $prefix . 'accountStatus';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->accountStatus = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'countryCode';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->countryCode = $map[$mapKeyName];
			}
			if (PPUtils::array_match_key($map, $prefix . "userInfo.")) {
				$newPrefix = $prefix . "userInfo.";
				$this->userInfo = new UserInfoType();
				$this->userInfo->init($map, $newPrefix);
			}
			$i = 0;
			while(TRUE) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * Identifying the PayPal account to which this request is
 * targetted to. Caller of this API has to either provided an
 * emailAddress or an accountId. 
 */
class AddBankAccountRequest  {

	/**
	 * 
	 * @access public
	 * @var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * Identifying the PayPal account to which this request is
	 * targetted to. Caller of this API has to either provided an
	 * emailAddress or an accountId. 
	 * @access public
	 * @var string
	 */ 
	public $emailAddress;

	/**
	 * Identifying the PayPal account to which this request is
	 * targetted to. Caller of this API has to either provided an
	 * emailAddress or an accountId. 
	 * @access public
	 * @var string
	 */ 
	public $accountId;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $createAccountKey;

	/**
	 * Country code for the bank 
	 * @access public
	 * @var string
	 */ 
	public $bankCountryCode;

	/**
	 * The defualt value is UNKNOWN. 
	 * @access public
	 * @var string
	 */ 
	public $bankName;

	/**
	 * Bank routing or transit number 
	 * @access public
	 * @var string
	 */ 
	public $routingNumber;

	/**
	 * 
	 * @access public
	 * @var BankAccountType
	 */ 
	public $bankAccountType;

	/**
	 * Basic Bank Account Number (BBAN) 
	 * @access public
	 * @var string
	 */ 
	public $bankAccountNumber;

	/**
	 * International Bank Account Number (IBAN) 
	 * @access public
	 * @var string
	 */ 
	public $iban;

	/**
	 * CLABE represents the bank information for countries like
	 * Mexico 
	 * @access public
	 * @var string
	 */ 
	public $clabe;

	/**
	 * Bank/State/Branch number 
	 * @access public
	 * @var string
	 */ 
	public $bsbNumber;

	/**
	 * Branch location 
	 * @access public
	 * @var string
	 */ 
	public $branchLocation;

	/**
	 * Branch sort code. 
	 * @access public
	 * @var string
	 */ 
	public $sortCode;

	/**
	 * Bank transit number 
	 * @access public
	 * @var string
	 */ 
	public $bankTransitNumber;

	/**
	 * Institution number 
	 * @access public
	 * @var string
	 */ 
	public $institutionNumber;

	/**
	 * Branch code 
	 * @access public
	 * @var string
	 */ 
	public $branchCode;

	/**
	 * For Brazil Agency Number 
	 * @access public
	 * @var string
	 */ 
	public $agencyNumber;

	/**
	 * Bank code 
	 * @access public
	 * @var string
	 */ 
	public $bankCode;

	/**
	 * RIB key 
	 * @access public
	 * @var string
	 */ 
	public $ribKey;

	/**
	 * control digits 
	 * @access public
	 * @var string
	 */ 
	public $controlDigit;

	/**
	 * Tax id type of CNPJ or CPF, only supported for Brazil. 
	 * @access public
	 * @var string
	 */ 
	public $taxIdType;

	/**
	 * Tax id number for Brazil. 
	 * @access public
	 * @var string
	 */ 
	public $taxIdNumber;

	/**
	 * Date of birth of the account holder 
	 * @access public
	 * @var date
	 */ 
	public $accountHolderDateOfBirth;

	/**
	 * 
	 * @access public
	 * @var ConfirmationType
	 */ 
	public $confirmationType;

	/**
	 * 
	 * @access public
	 * @var WebOptionsType
	 */ 
	public $webOptions;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $bankCountryCode = NULL, $confirmationType = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->bankCountryCode = $bankCountryCode;
		$this->confirmationType = $confirmationType;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != NULL) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->emailAddress != NULL) {
			$str .= $delim .  $prefix . 'emailAddress=' . urlencode($this->emailAddress);
			$delim = '&';
		}
		if($this->accountId != NULL) {
			$str .= $delim .  $prefix . 'accountId=' . urlencode($this->accountId);
			$delim = '&';
		}
		if($this->createAccountKey != NULL) {
			$str .= $delim .  $prefix . 'createAccountKey=' . urlencode($this->createAccountKey);
			$delim = '&';
		}
		if($this->bankCountryCode != NULL) {
			$str .= $delim .  $prefix . 'bankCountryCode=' . urlencode($this->bankCountryCode);
			$delim = '&';
		}
		if($this->bankName != NULL) {
			$str .= $delim .  $prefix . 'bankName=' . urlencode($this->bankName);
			$delim = '&';
		}
		if($this->routingNumber != NULL) {
			$str .= $delim .  $prefix . 'routingNumber=' . urlencode($this->routingNumber);
			$delim = '&';
		}
		if($this->bankAccountType != NULL) {
			$str .= $delim .  $prefix . 'bankAccountType=' . urlencode($this->bankAccountType);
			$delim = '&';
		}
		if($this->bankAccountNumber != NULL) {
			$str .= $delim .  $prefix . 'bankAccountNumber=' . urlencode($this->bankAccountNumber);
			$delim = '&';
		}
		if($this->iban != NULL) {
			$str .= $delim .  $prefix . 'iban=' . urlencode($this->iban);
			$delim = '&';
		}
		if($this->clabe != NULL) {
			$str .= $delim .  $prefix . 'clabe=' . urlencode($this->clabe);
			$delim = '&';
		}
		if($this->bsbNumber != NULL) {
			$str .= $delim .  $prefix . 'bsbNumber=' . urlencode($this->bsbNumber);
			$delim = '&';
		}
		if($this->branchLocation != NULL) {
			$str .= $delim .  $prefix . 'branchLocation=' . urlencode($this->branchLocation);
			$delim = '&';
		}
		if($this->sortCode != NULL) {
			$str .= $delim .  $prefix . 'sortCode=' . urlencode($this->sortCode);
			$delim = '&';
		}
		if($this->bankTransitNumber != NULL) {
			$str .= $delim .  $prefix . 'bankTransitNumber=' . urlencode($this->bankTransitNumber);
			$delim = '&';
		}
		if($this->institutionNumber != NULL) {
			$str .= $delim .  $prefix . 'institutionNumber=' . urlencode($this->institutionNumber);
			$delim = '&';
		}
		if($this->branchCode != NULL) {
			$str .= $delim .  $prefix . 'branchCode=' . urlencode($this->branchCode);
			$delim = '&';
		}
		if($this->agencyNumber != NULL) {
			$str .= $delim .  $prefix . 'agencyNumber=' . urlencode($this->agencyNumber);
			$delim = '&';
		}
		if($this->bankCode != NULL) {
			$str .= $delim .  $prefix . 'bankCode=' . urlencode($this->bankCode);
			$delim = '&';
		}
		if($this->ribKey != NULL) {
			$str .= $delim .  $prefix . 'ribKey=' . urlencode($this->ribKey);
			$delim = '&';
		}
		if($this->controlDigit != NULL) {
			$str .= $delim .  $prefix . 'controlDigit=' . urlencode($this->controlDigit);
			$delim = '&';
		}
		if($this->taxIdType != NULL) {
			$str .= $delim .  $prefix . 'taxIdType=' . urlencode($this->taxIdType);
			$delim = '&';
		}
		if($this->taxIdNumber != NULL) {
			$str .= $delim .  $prefix . 'taxIdNumber=' . urlencode($this->taxIdNumber);
			$delim = '&';
		}
		if($this->accountHolderDateOfBirth != NULL) {
			$str .= $delim .  $prefix . 'accountHolderDateOfBirth=' . urlencode($this->accountHolderDateOfBirth);
			$delim = '&';
		}
		if($this->confirmationType != NULL) {
			$str .= $delim .  $prefix . 'confirmationType=' . urlencode($this->confirmationType);
			$delim = '&';
		}
		if($this->webOptions != NULL) {
			$newPrefix = $prefix . 'webOptions.';
			$str .= $delim . call_user_func(array($this->webOptions, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		return $str;
	}

} 



/**
 * Valid values are: FUNDING_SOURCE_ADDED,
 * WEB_URL_VERIFICATION_NEEDED 
 */
class AddBankAccountResponse  {

	/**
	 * 
	 * @access public
	 * @var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * Valid values are: FUNDING_SOURCE_ADDED,
	 * WEB_URL_VERIFICATION_NEEDED 
	 * @access public
	 * @var string
	 */ 
	public $execStatus;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $redirectURL;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $fundingSourceKey;

	/**
	 * 
     * @array
	 * @access public
	 * @var ErrorData
	 */ 
	public $error;



	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$mapKeyName =  $prefix . 'execStatus';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->execStatus = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'redirectURL';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->redirectURL = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'fundingSourceKey';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->fundingSourceKey = $map[$mapKeyName];
			}
			$i = 0;
			while(TRUE) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * Identifying the PayPal account to which this request is
 * targetted to. Caller of this API has to either provided an
 * emailAddress or an accountId. 
 */
class AddPaymentCardRequest  {

	/**
	 * 
	 * @access public
	 * @var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * Identifying the PayPal account to which this request is
	 * targetted to. Caller of this API has to either provided an
	 * emailAddress or an accountId. 
	 * @access public
	 * @var string
	 */ 
	public $emailAddress;

	/**
	 * Identifying the PayPal account to which this request is
	 * targetted to. Caller of this API has to either provided an
	 * emailAddress or an accountId. 
	 * @access public
	 * @var string
	 */ 
	public $accountId;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $createAccountKey;

	/**
	 * 
	 * @access public
	 * @var NameType
	 */ 
	public $nameOnCard;

	/**
	 * 
	 * @access public
	 * @var AddressType
	 */ 
	public $billingAddress;

	/**
	 * 
	 * @access public
	 * @var date
	 */ 
	public $cardOwnerDateOfBirth;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $cardNumber;

	/**
	 * 
	 * @access public
	 * @var CardTypeType
	 */ 
	public $cardType;

	/**
	 * 
	 * @access public
	 * @var CardDateType
	 */ 
	public $expirationDate;

	/**
	 * CVV2: Proivde only for requests where confirmationType is
	 * None (Direct request) 
	 * @access public
	 * @var string
	 */ 
	public $cardVerificationNumber;

	/**
	 * 
	 * @access public
	 * @var CardDateType
	 */ 
	public $startDate;

	/**
	 * Up to 2 digit for Switch/Maestro/Solo cards. 
	 * @access public
	 * @var string
	 */ 
	public $issueNumber;

	/**
	 * 
	 * @access public
	 * @var ConfirmationType
	 */ 
	public $confirmationType;

	/**
	 * 
	 * @access public
	 * @var WebOptionsType
	 */ 
	public $webOptions;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $nameOnCard = NULL, $billingAddress = NULL, $cardNumber = NULL, $cardType = NULL, $confirmationType = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->nameOnCard = $nameOnCard;
		$this->billingAddress = $billingAddress;
		$this->cardNumber = $cardNumber;
		$this->cardType = $cardType;
		$this->confirmationType = $confirmationType;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != NULL) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->emailAddress != NULL) {
			$str .= $delim .  $prefix . 'emailAddress=' . urlencode($this->emailAddress);
			$delim = '&';
		}
		if($this->accountId != NULL) {
			$str .= $delim .  $prefix . 'accountId=' . urlencode($this->accountId);
			$delim = '&';
		}
		if($this->createAccountKey != NULL) {
			$str .= $delim .  $prefix . 'createAccountKey=' . urlencode($this->createAccountKey);
			$delim = '&';
		}
		if($this->nameOnCard != NULL) {
			$newPrefix = $prefix . 'nameOnCard.';
			$str .= $delim . call_user_func(array($this->nameOnCard, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->billingAddress != NULL) {
			$newPrefix = $prefix . 'billingAddress.';
			$str .= $delim . call_user_func(array($this->billingAddress, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->cardOwnerDateOfBirth != NULL) {
			$str .= $delim .  $prefix . 'cardOwnerDateOfBirth=' . urlencode($this->cardOwnerDateOfBirth);
			$delim = '&';
		}
		if($this->cardNumber != NULL) {
			$str .= $delim .  $prefix . 'cardNumber=' . urlencode($this->cardNumber);
			$delim = '&';
		}
		if($this->cardType != NULL) {
			$str .= $delim .  $prefix . 'cardType=' . urlencode($this->cardType);
			$delim = '&';
		}
		if($this->expirationDate != NULL) {
			$newPrefix = $prefix . 'expirationDate.';
			$str .= $delim . call_user_func(array($this->expirationDate, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->cardVerificationNumber != NULL) {
			$str .= $delim .  $prefix . 'cardVerificationNumber=' . urlencode($this->cardVerificationNumber);
			$delim = '&';
		}
		if($this->startDate != NULL) {
			$newPrefix = $prefix . 'startDate.';
			$str .= $delim . call_user_func(array($this->startDate, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->issueNumber != NULL) {
			$str .= $delim .  $prefix . 'issueNumber=' . urlencode($this->issueNumber);
			$delim = '&';
		}
		if($this->confirmationType != NULL) {
			$str .= $delim .  $prefix . 'confirmationType=' . urlencode($this->confirmationType);
			$delim = '&';
		}
		if($this->webOptions != NULL) {
			$newPrefix = $prefix . 'webOptions.';
			$str .= $delim . call_user_func(array($this->webOptions, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		return $str;
	}

} 



/**
 * Valid values are: FUNDING_SOURCE_ADDED,
 * WEB_URL_VERIFICATION_NEEDED 
 */
class AddPaymentCardResponse  {

	/**
	 * 
	 * @access public
	 * @var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * Valid values are: FUNDING_SOURCE_ADDED,
	 * WEB_URL_VERIFICATION_NEEDED 
	 * @access public
	 * @var string
	 */ 
	public $execStatus;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $redirectURL;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $fundingSourceKey;

	/**
	 * 
     * @array
	 * @access public
	 * @var ErrorData
	 */ 
	public $error;



	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$mapKeyName =  $prefix . 'execStatus';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->execStatus = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'redirectURL';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->redirectURL = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'fundingSourceKey';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->fundingSourceKey = $map[$mapKeyName];
			}
			$i = 0;
			while(TRUE) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * This not considered when
 * financialProductCategory=PRE_PAID_CARD 
 */
class AddPartnerFinancialProductRequest  {

	/**
	 * 
	 * @access public
	 * @var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * 
	 * @access public
	 * @var AccountIdentifierType
	 */ 
	public $accountIdentifier;

	/**
	 * This not considered when
	 * financialProductCategory=PRE_PAID_CARD 
	 * @access public
	 * @var NameType
	 */ 
	public $nameOnCard;

	/**
	 * This not considered when
	 * financialProductCategory=PRE_PAID_CARD 
	 * @access public
	 * @var AddressType
	 */ 
	public $billingAddress;

	/**
	 * This not considered when
	 * financialProductCategory=PRE_PAID_CARD 
	 * @access public
	 * @var date
	 */ 
	public $cardOwnerDateOfBirth;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $cardNumber;

	/**
	 * Identify the kind of PayPal financial product. Possible
	 * value is : PRE_PAID_CARD 
	 * @access public
	 * @var string
	 */ 
	public $financialProductCategory;

	/**
	 * expirationDate is mandatory when financialProductCategoy =
	 * PRE_PAID_CARD 
	 * @access public
	 * @var CardDateType
	 */ 
	public $expirationDate;

	/**
	 * This not considered when
	 * financialProductCategory=PRE_PAID_CARD 
	 * @access public
	 * @var string
	 */ 
	public $cardVerificationNumber;

	/**
	 * This not considered when
	 * financialProductCategory=PRE_PAID_CARD 
	 * @access public
	 * @var CardDateType
	 */ 
	public $startDate;

	/**
	 * Up to 2 digit for Switch/Maestro/Solo cards. 
	 * @access public
	 * @var string
	 */ 
	public $issueNumber;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $accountIdentifier = NULL, $cardNumber = NULL, $financialProductCategory = NULL, $expirationDate = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->accountIdentifier = $accountIdentifier;
		$this->cardNumber = $cardNumber;
		$this->financialProductCategory = $financialProductCategory;
		$this->expirationDate = $expirationDate;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != NULL) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->accountIdentifier != NULL) {
			$newPrefix = $prefix . 'accountIdentifier.';
			$str .= $delim . call_user_func(array($this->accountIdentifier, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->nameOnCard != NULL) {
			$newPrefix = $prefix . 'nameOnCard.';
			$str .= $delim . call_user_func(array($this->nameOnCard, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->billingAddress != NULL) {
			$newPrefix = $prefix . 'billingAddress.';
			$str .= $delim . call_user_func(array($this->billingAddress, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->cardOwnerDateOfBirth != NULL) {
			$str .= $delim .  $prefix . 'cardOwnerDateOfBirth=' . urlencode($this->cardOwnerDateOfBirth);
			$delim = '&';
		}
		if($this->cardNumber != NULL) {
			$str .= $delim .  $prefix . 'cardNumber=' . urlencode($this->cardNumber);
			$delim = '&';
		}
		if($this->financialProductCategory != NULL) {
			$str .= $delim .  $prefix . 'financialProductCategory=' . urlencode($this->financialProductCategory);
			$delim = '&';
		}
		if($this->expirationDate != NULL) {
			$newPrefix = $prefix . 'expirationDate.';
			$str .= $delim . call_user_func(array($this->expirationDate, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->cardVerificationNumber != NULL) {
			$str .= $delim .  $prefix . 'cardVerificationNumber=' . urlencode($this->cardVerificationNumber);
			$delim = '&';
		}
		if($this->startDate != NULL) {
			$newPrefix = $prefix . 'startDate.';
			$str .= $delim . call_user_func(array($this->startDate, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->issueNumber != NULL) {
			$str .= $delim .  $prefix . 'issueNumber=' . urlencode($this->issueNumber);
			$delim = '&';
		}
		return $str;
	}

} 



/**
 * Valid values are: CARD_ADDED 
 */
class AddPartnerFinancialProductResponse  {

	/**
	 * 
	 * @access public
	 * @var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * Valid values are: CARD_ADDED 
	 * @access public
	 * @var string
	 */ 
	public $execStatus;

	/**
	 * 
     * @array
	 * @access public
	 * @var ErrorData
	 */ 
	public $error;



	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$mapKeyName =  $prefix . 'execStatus';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->execStatus = $map[$mapKeyName];
			}
			$i = 0;
			while(TRUE) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * Identifying the PayPal account to which this request is
 * targetted to. Caller of this API has to either provided an
 * emailAddress or an accountId. 
 */
class SetFundingSourceConfirmedRequest  {

	/**
	 * 
	 * @access public
	 * @var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * Identifying the PayPal account to which this request is
	 * targetted to. Caller of this API has to either provided an
	 * emailAddress or an accountId. 
	 * @access public
	 * @var string
	 */ 
	public $emailAddress;

	/**
	 * Identifying the PayPal account to which this request is
	 * targetted to. Caller of this API has to either provided an
	 * emailAddress or an accountId. 
	 * @access public
	 * @var string
	 */ 
	public $accountId;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $fundingSourceKey;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $fundingSourceKey = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->fundingSourceKey = $fundingSourceKey;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != NULL) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->emailAddress != NULL) {
			$str .= $delim .  $prefix . 'emailAddress=' . urlencode($this->emailAddress);
			$delim = '&';
		}
		if($this->accountId != NULL) {
			$str .= $delim .  $prefix . 'accountId=' . urlencode($this->accountId);
			$delim = '&';
		}
		if($this->fundingSourceKey != NULL) {
			$str .= $delim .  $prefix . 'fundingSourceKey=' . urlencode($this->fundingSourceKey);
			$delim = '&';
		}
		return $str;
	}

} 



/**
 * 
 */
class SetFundingSourceConfirmedResponse  {

	/**
	 * 
	 * @access public
	 * @var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * 
     * @array
	 * @access public
	 * @var ErrorData
	 */ 
	public $error;



	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$i = 0;
			while(TRUE) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * Identifies a PayPal account to which this request is
 * targeted. Caller of this API has to provide ONLY one of
 * these inputs: emailAddress, accountId or phoneNumber. 
 */
class CheckComplianceStatusRequest  {

	/**
	 * 
	 * @access public
	 * @var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * Identifies a PayPal account to which this request is
	 * targeted. Caller of this API has to provide ONLY one of
	 * these inputs: emailAddress, accountId or phoneNumber. 
	 * @access public
	 * @var AccountIdentifierType
	 */ 
	public $accountIdentifier;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $accountIdentifier = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->accountIdentifier = $accountIdentifier;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != NULL) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->accountIdentifier != NULL) {
			$newPrefix = $prefix . 'accountIdentifier.';
			$str .= $delim . call_user_func(array($this->accountIdentifier, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		return $str;
	}

} 



/**
 * Returned values are: ALLOW|DENY 
 */
class CheckComplianceStatusResponse  {

	/**
	 * 
	 * @access public
	 * @var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * Returned values are: ALLOW|DENY 
	 * @access public
	 * @var string
	 */ 
	public $execStatus;

	/**
	 * Returned values are: CLIENT_NOT_SUPPORTED,
	 * COUNTRY_NOT_SUPPORTED, VERIFICATION_NOT_COMPLETED,
	 * DOCUMENTS_UNDER_REVIEW, DENIED 
	 * @access public
	 * @var string
	 */ 
	public $denialReason;

	/**
	 * 
     * @array
	 * @access public
	 * @var ErrorData
	 */ 
	public $error;



	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$mapKeyName =  $prefix . 'execStatus';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->execStatus = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'denialReason';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->denialReason = $map[$mapKeyName];
			}
			$i = 0;
			while(TRUE) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * This operation is for internal purposes developed for a POC.
 * 
 */
class ActivateProductRequest  {

	/**
	 * 
	 * @access public
	 * @var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * Identifies a PayPal account to which this request is
	 * targeted. Caller of this API has to provide ONLY one of
	 * these inputs: emailAddress or accountId. 
	 * @access public
	 * @var AccountIdentifierType
	 */ 
	public $accountIdentifier;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $accountIdentifier = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->accountIdentifier = $accountIdentifier;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != NULL) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->accountIdentifier != NULL) {
			$newPrefix = $prefix . 'accountIdentifier.';
			$str .= $delim . call_user_func(array($this->accountIdentifier, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		return $str;
	}

} 



/**
 * Valid values are: SUCCESS, FAILED 
 */
class ActivateProductResponse  {

	/**
	 * 
	 * @access public
	 * @var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * Valid values are: SUCCESS, FAILED 
	 * @access public
	 * @var string
	 */ 
	public $execStatus;

	/**
	 * 
     * @array
	 * @access public
	 * @var ProductActivationErrors
	 */ 
	public $productActivationErrors;

	/**
	 * 
     * @array
	 * @access public
	 * @var ErrorData
	 */ 
	public $error;



	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$mapKeyName =  $prefix . 'execStatus';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->execStatus = $map[$mapKeyName];
			}
			$i = 0;
			while(TRUE) {
				$mapKeyName = $prefix . "productActivationErrors($i)";
				if (PPUtils::array_match_key($map, $mapKeyName)) {
					$this->productActivationErrors[$i] = $map[$mapKeyName];
				} else {
					break;
				}
				$i++;
			}
			$i = 0;
			while(TRUE) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * 
 */
class NameType  {

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $salutation;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $firstName;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $middleName;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $lastName;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $suffix;

	/**
	 * Constructor with arguments
	 */
	public function __construct($firstName = NULL, $lastName = NULL) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->salutation != NULL) {
			$str .= $delim .  $prefix . 'salutation=' . urlencode($this->salutation);
			$delim = '&';
		}
		if($this->firstName != NULL) {
			$str .= $delim .  $prefix . 'firstName=' . urlencode($this->firstName);
			$delim = '&';
		}
		if($this->middleName != NULL) {
			$str .= $delim .  $prefix . 'middleName=' . urlencode($this->middleName);
			$delim = '&';
		}
		if($this->lastName != NULL) {
			$str .= $delim .  $prefix . 'lastName=' . urlencode($this->lastName);
			$delim = '&';
		}
		if($this->suffix != NULL) {
			$str .= $delim .  $prefix . 'suffix=' . urlencode($this->suffix);
			$delim = '&';
		}
		return $str;
	}

	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			$mapKeyName =  $prefix . 'salutation';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->salutation = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'firstName';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->firstName = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'middleName';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->middleName = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'lastName';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->lastName = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'suffix';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->suffix = $map[$mapKeyName];
			}
			
		}
	}
} 



/**
 * 
 */
class AddressType  {

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $line1;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $line2;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $city;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $state;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $postalCode;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $countryCode;

	/**
	 * Constructor with arguments
	 */
	public function __construct($line1 = NULL, $countryCode = NULL) {
		$this->line1 = $line1;
		$this->countryCode = $countryCode;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->line1 != NULL) {
			$str .= $delim .  $prefix . 'line1=' . urlencode($this->line1);
			$delim = '&';
		}
		if($this->line2 != NULL) {
			$str .= $delim .  $prefix . 'line2=' . urlencode($this->line2);
			$delim = '&';
		}
		if($this->city != NULL) {
			$str .= $delim .  $prefix . 'city=' . urlencode($this->city);
			$delim = '&';
		}
		if($this->state != NULL) {
			$str .= $delim .  $prefix . 'state=' . urlencode($this->state);
			$delim = '&';
		}
		if($this->postalCode != NULL) {
			$str .= $delim .  $prefix . 'postalCode=' . urlencode($this->postalCode);
			$delim = '&';
		}
		if($this->countryCode != NULL) {
			$str .= $delim .  $prefix . 'countryCode=' . urlencode($this->countryCode);
			$delim = '&';
		}
		return $str;
	}

} 



/**
 * Ask end-user to also initiate confirmation of their mobile
 * phone. This number must be supplied by the API caller (using
 * mobilePhoneNumber) Default=false. 
 */
class CreateAccountWebOptionsType  {

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $returnUrl;

	/**
	 * 
	 * @access public
	 * @var boolean
	 */ 
	public $showAddCreditCard;

	/**
	 * Ask end-user to also initiate confirmation of their mobile
	 * phone. This number must be supplied by the API caller (using
	 * mobilePhoneNumber) Default=false. 
	 * @access public
	 * @var boolean
	 */ 
	public $showMobileConfirm;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $returnUrlDescription;

	/**
	 * If provided, end user will go through a single page sign-up
	 * flow on a Mini Browser. If not provided, flow defaults to
	 * the Multi-page flow that is full size. 
	 * @access public
	 * @var boolean
	 */ 
	public $useMiniBrowser;

	/**
	 * Indicates the frequency of the reminder emails sent to the
	 * PayPal user after CreateAccount. Used only when
	 * registrationType is Web. Valid values: DEFAULT: All reminder
	 * emails will be sent (same behaviour as when this paramter is
	 * not present) NONE: No reminder emails will be sent (More
	 * values to be added in future) 
	 * @access public
	 * @var string
	 */ 
	public $reminderEmailFrequency;


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->returnUrl != NULL) {
			$str .= $delim .  $prefix . 'returnUrl=' . urlencode($this->returnUrl);
			$delim = '&';
		}
		if($this->showAddCreditCard != NULL) {
			$str .= $delim .  $prefix . 'showAddCreditCard=' . urlencode($this->showAddCreditCard);
			$delim = '&';
		}
		if($this->showMobileConfirm != NULL) {
			$str .= $delim .  $prefix . 'showMobileConfirm=' . urlencode($this->showMobileConfirm);
			$delim = '&';
		}
		if($this->returnUrlDescription != NULL) {
			$str .= $delim .  $prefix . 'returnUrlDescription=' . urlencode($this->returnUrlDescription);
			$delim = '&';
		}
		if($this->useMiniBrowser != NULL) {
			$str .= $delim .  $prefix . 'useMiniBrowser=' . urlencode($this->useMiniBrowser);
			$delim = '&';
		}
		if($this->reminderEmailFrequency != NULL) {
			$str .= $delim .  $prefix . 'reminderEmailFrequency=' . urlencode($this->reminderEmailFrequency);
			$delim = '&';
		}
		return $str;
	}

} 



/**
 * PayPal Business Category. i.e., baby - 1004 
 */
class BusinessInfoType  {

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $businessName;

	/**
	 * 
	 * @access public
	 * @var AddressType
	 */ 
	public $businessAddress;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $workPhone;

	/**
	 * PayPal Business Category. i.e., baby - 1004 
	 * @access public
	 * @var integer
	 */ 
	public $category;

	/**
	 * Paypal Business subcategory. i.e., baby-clothing - 2027 
	 * @access public
	 * @var integer
	 */ 
	public $subCategory;

	/**
	 * If Category and Subcategory is specified, then this is
	 * optional. PayPal uses the industry standard Merchant
	 * Category Codes. Please refer to your Association Merchant
	 * Category Code documentation for a list of codes 
	 * @access public
	 * @var integer
	 */ 
	public $merchantCategoryCode;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $doingBusinessAs;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $customerServicePhone;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $customerServiceEmail;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $disputeEmail;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $webSite;

	/**
	 * Company Id: tax id, acn, abn, etc. 
	 * @access public
	 * @var string
	 */ 
	public $companyId;

	/**
	 * 
	 * @access public
	 * @var date
	 */ 
	public $dateOfEstablishment;

	/**
	 * 
	 * @access public
	 * @var BusinessType
	 */ 
	public $businessType;

	/**
	 * 
	 * @access public
	 * @var BusinessSubtypeType
	 */ 
	public $businessSubtype;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $incorporationId;

	/**
	 * Average transaction value. 
	 * @access public
	 * @var double
	 */ 
	public $averagePrice;

	/**
	 * Average monthly transaction value. 
	 * @access public
	 * @var double
	 */ 
	public $averageMonthlyVolume;

	/**
	 * Percentage of the revenue that is from online sales
	 * (0%-100%). 
	 * @access public
	 * @var integer
	 */ 
	public $percentageRevenueFromOnline;

	/**
	 * 
     * @array
	 * @access public
	 * @var SalesVenueType
	 */ 
	public $salesVenue;

	/**
	 * Description of store front or place for sales. Only required
	 * when "OTHER" is specified for salesVenue. 
	 * @access public
	 * @var string
	 */ 
	public $salesVenueDesc;

	/**
	 * Value Added Tax (VAT) ID number 
	 * @access public
	 * @var string
	 */ 
	public $vatId;

	/**
	 * Country code for country on the vat id. 
	 * @access public
	 * @var string
	 */ 
	public $vatCountryCode;

	/**
	 * Official commercial registration location. 
	 * @access public
	 * @var string
	 */ 
	public $commercialRegistrationLocation;

	/**
	 * 
	 * @access public
	 * @var AddressType
	 */ 
	public $principalPlaceOfBusinessAddress;

	/**
	 * 
	 * @access public
	 * @var AddressType
	 */ 
	public $registeredOfficeAddress;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $establishmentCountryCode;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $establishmentState;

	/**
	 * All the stakeholders of the company. 
     * @array
	 * @access public
	 * @var BusinessStakeholderType
	 */ 
	public $businessStakeholder;

	/**
	 * Constructor with arguments
	 */
	public function __construct($businessName = NULL, $businessAddress = NULL, $workPhone = NULL) {
		$this->businessName = $businessName;
		$this->businessAddress = $businessAddress;
		$this->workPhone = $workPhone;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->businessName != NULL) {
			$str .= $delim .  $prefix . 'businessName=' . urlencode($this->businessName);
			$delim = '&';
		}
		if($this->businessAddress != NULL) {
			$newPrefix = $prefix . 'businessAddress.';
			$str .= $delim . call_user_func(array($this->businessAddress, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->workPhone != NULL) {
			$str .= $delim .  $prefix . 'workPhone=' . urlencode($this->workPhone);
			$delim = '&';
		}
		if($this->category != NULL) {
			$str .= $delim .  $prefix . 'category=' . urlencode($this->category);
			$delim = '&';
		}
		if($this->subCategory != NULL) {
			$str .= $delim .  $prefix . 'subCategory=' . urlencode($this->subCategory);
			$delim = '&';
		}
		if($this->merchantCategoryCode != NULL) {
			$str .= $delim .  $prefix . 'merchantCategoryCode=' . urlencode($this->merchantCategoryCode);
			$delim = '&';
		}
		if($this->doingBusinessAs != NULL) {
			$str .= $delim .  $prefix . 'doingBusinessAs=' . urlencode($this->doingBusinessAs);
			$delim = '&';
		}
		if($this->customerServicePhone != NULL) {
			$str .= $delim .  $prefix . 'customerServicePhone=' . urlencode($this->customerServicePhone);
			$delim = '&';
		}
		if($this->customerServiceEmail != NULL) {
			$str .= $delim .  $prefix . 'customerServiceEmail=' . urlencode($this->customerServiceEmail);
			$delim = '&';
		}
		if($this->disputeEmail != NULL) {
			$str .= $delim .  $prefix . 'disputeEmail=' . urlencode($this->disputeEmail);
			$delim = '&';
		}
		if($this->webSite != NULL) {
			$str .= $delim .  $prefix . 'webSite=' . urlencode($this->webSite);
			$delim = '&';
		}
		if($this->companyId != NULL) {
			$str .= $delim .  $prefix . 'companyId=' . urlencode($this->companyId);
			$delim = '&';
		}
		if($this->dateOfEstablishment != NULL) {
			$str .= $delim .  $prefix . 'dateOfEstablishment=' . urlencode($this->dateOfEstablishment);
			$delim = '&';
		}
		if($this->businessType != NULL) {
			$str .= $delim .  $prefix . 'businessType=' . urlencode($this->businessType);
			$delim = '&';
		}
		if($this->businessSubtype != NULL) {
			$str .= $delim .  $prefix . 'businessSubtype=' . urlencode($this->businessSubtype);
			$delim = '&';
		}
		if($this->incorporationId != NULL) {
			$str .= $delim .  $prefix . 'incorporationId=' . urlencode($this->incorporationId);
			$delim = '&';
		}
		if($this->averagePrice != NULL) {
			$str .= $delim .  $prefix . 'averagePrice=' . urlencode($this->averagePrice);
			$delim = '&';
		}
		if($this->averageMonthlyVolume != NULL) {
			$str .= $delim .  $prefix . 'averageMonthlyVolume=' . urlencode($this->averageMonthlyVolume);
			$delim = '&';
		}
		if($this->percentageRevenueFromOnline != NULL) {
			$str .= $delim .  $prefix . 'percentageRevenueFromOnline=' . urlencode($this->percentageRevenueFromOnline);
			$delim = '&';
		}
		for($i = 0; $i < count($this->salesVenue); $i++) {
			$str .= $delim .  $prefix . "salesVenue($i)=" .  urlencode($this->salesVenue[$i]);
			$delim = '&';
		}
		if($this->salesVenueDesc != NULL) {
			$str .= $delim .  $prefix . 'salesVenueDesc=' . urlencode($this->salesVenueDesc);
			$delim = '&';
		}
		if($this->vatId != NULL) {
			$str .= $delim .  $prefix . 'vatId=' . urlencode($this->vatId);
			$delim = '&';
		}
		if($this->vatCountryCode != NULL) {
			$str .= $delim .  $prefix . 'vatCountryCode=' . urlencode($this->vatCountryCode);
			$delim = '&';
		}
		if($this->commercialRegistrationLocation != NULL) {
			$str .= $delim .  $prefix . 'commercialRegistrationLocation=' . urlencode($this->commercialRegistrationLocation);
			$delim = '&';
		}
		if($this->principalPlaceOfBusinessAddress != NULL) {
			$newPrefix = $prefix . 'principalPlaceOfBusinessAddress.';
			$str .= $delim . call_user_func(array($this->principalPlaceOfBusinessAddress, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->registeredOfficeAddress != NULL) {
			$newPrefix = $prefix . 'registeredOfficeAddress.';
			$str .= $delim . call_user_func(array($this->registeredOfficeAddress, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->establishmentCountryCode != NULL) {
			$str .= $delim .  $prefix . 'establishmentCountryCode=' . urlencode($this->establishmentCountryCode);
			$delim = '&';
		}
		if($this->establishmentState != NULL) {
			$str .= $delim .  $prefix . 'establishmentState=' . urlencode($this->establishmentState);
			$delim = '&';
		}
		for($i = 0; $i < count($this->businessStakeholder); $i++) {
			$newPrefix = $prefix . "businessStakeholder($i).";
			$str .= $delim . call_user_func(array($this->businessStakeholder[$i], 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		return $str;
	}

} 



/**
 * Info about Stakeholders such as partner, beneficial, owner,
 * director etc. 
 */
class BusinessStakeholderType  {

	/**
	 * 
	 * @access public
	 * @var StakeholderRoleType
	 */ 
	public $role;

	/**
	 * 
	 * @access public
	 * @var NameType
	 */ 
	public $name;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $fullLegalName;

	/**
	 * 
	 * @access public
	 * @var AddressType
	 */ 
	public $address;

	/**
	 * 
	 * @access public
	 * @var date
	 */ 
	public $dateOfBirth;

	/**
	 * Constructor with arguments
	 */
	public function __construct($role = NULL) {
		$this->role = $role;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->role != NULL) {
			$str .= $delim .  $prefix . 'role=' . urlencode($this->role);
			$delim = '&';
		}
		if($this->name != NULL) {
			$newPrefix = $prefix . 'name.';
			$str .= $delim . call_user_func(array($this->name, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->fullLegalName != NULL) {
			$str .= $delim .  $prefix . 'fullLegalName=' . urlencode($this->fullLegalName);
			$delim = '&';
		}
		if($this->address != NULL) {
			$newPrefix = $prefix . 'address.';
			$str .= $delim . call_user_func(array($this->address, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->dateOfBirth != NULL) {
			$str .= $delim .  $prefix . 'dateOfBirth=' . urlencode($this->dateOfBirth);
			$delim = '&';
		}
		return $str;
	}

} 



/**
 * Info about PayPal user such as emailAddress, accountId,
 * firstName, lastName etc. 
 */
class UserInfoType  {

	/**
	 * Returns emailAddress belonging to PayPal account. 
	 * @access public
	 * @var string
	 */ 
	public $emailAddress;

	/**
	 * Valid values are: Personal, Premier, and Business (not
	 * case-sensitive). 
	 * @access public
	 * @var string
	 */ 
	public $accountType;

	/**
	 * Identifies a PayPal account. Only premier and business
	 * accounts have an accountId 
	 * @access public
	 * @var string
	 */ 
	public $accountId;

	/**
	 * Identifies a PayPal user, like firstName, lastName. 
	 * @access public
	 * @var NameType
	 */ 
	public $name;

	/**
	 * Business Name of the PayPal account holder. 
	 * @access public
	 * @var string
	 */ 
	public $businessName;



	public function init($map = NULL, $prefix = '') {
		if($map != NULL) {
			$mapKeyName =  $prefix . 'emailAddress';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->emailAddress = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'accountType';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->accountType = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'accountId';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->accountId = $map[$mapKeyName];
			}
			if (PPUtils::array_match_key($map, $prefix . "name.")) {
				$newPrefix = $prefix . "name.";
				$this->name = new NameType();
				$this->name->init($map, $newPrefix);
			}
			$mapKeyName =  $prefix . 'businessName';
			if($map != NULL && array_key_exists($mapKeyName, $map)) {
				$this->businessName = $map[$mapKeyName];
			}
			
		}
	}
} 



/**
 * 
 */
class WebOptionsType  {

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $returnUrl;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $cancelUrl;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $returnUrlDescription;

	/**
	 * 
	 * @access public
	 * @var string
	 */ 
	public $cancelUrlDescription;


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->returnUrl != NULL) {
			$str .= $delim .  $prefix . 'returnUrl=' . urlencode($this->returnUrl);
			$delim = '&';
		}
		if($this->cancelUrl != NULL) {
			$str .= $delim .  $prefix . 'cancelUrl=' . urlencode($this->cancelUrl);
			$delim = '&';
		}
		if($this->returnUrlDescription != NULL) {
			$str .= $delim .  $prefix . 'returnUrlDescription=' . urlencode($this->returnUrlDescription);
			$delim = '&';
		}
		if($this->cancelUrlDescription != NULL) {
			$str .= $delim .  $prefix . 'cancelUrlDescription=' . urlencode($this->cancelUrlDescription);
			$delim = '&';
		}
		return $str;
	}

} 



/**
 * Month in integer format, between 1 and 12 
 */
class CardDateType  {

	/**
	 * Month in integer format, between 1 and 12 
	 * @access public
	 * @var integer
	 */ 
	public $month;

	/**
	 * Year in four digit format- YYYY 
	 * @access public
	 * @var integer
	 */ 
	public $year;

	/**
	 * Constructor with arguments
	 */
	public function __construct($month = NULL, $year = NULL) {
		$this->month = $month;
		$this->year = $year;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->month != NULL) {
			$str .= $delim .  $prefix . 'month=' . urlencode($this->month);
			$delim = '&';
		}
		if($this->year != NULL) {
			$str .= $delim .  $prefix . 'year=' . urlencode($this->year);
			$delim = '&';
		}
		return $str;
	}

} 




?>