<?php
 /**
  * Stub objects for AdaptiveAccounts 
  * Auto generated code 
  * 
  */
/**
 * This type contains the detailed error information resulting
 * from the service operation. 
 */
class ErrorData  {

	/**
	 * No Document Comments
	 *@access public
	 *@var integer
	 */ 
	public $errorId;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $domain;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $subdomain;

	/**
	 * No Document Comments
	 *@access public
	 *@var ErrorSeverity
	 */ 
	public $severity;

	/**
	 * No Document Comments
	 *@access public
	 *@var ErrorCategory
	 */ 
	public $category;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $message;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $exceptionId;

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var ErrorParameter
	 */ 
	public $parameter;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			$mapKeyName =  $prefix . 'errorId';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->errorId = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'domain';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->domain = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'subdomain';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->subdomain = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'severity';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->severity = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'category';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->category = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'message';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->message = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'exceptionId';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->exceptionId = $map[$mapKeyName];
			}
			$i = 0;
			while(true) {
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
 * No Document Comments
 */
class ErrorParameter  {

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $name;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $value;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			$mapKeyName =  $prefix . 'name';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->name = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'value';
			if($map != null && array_key_exists($mapKeyName, $map)) {
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
	 *@access public
	 *@var DetailLevelCode
	 */ 
	public $detailLevel;

	/**
	 * This should be the standard RFC 3066 language identification
	 * tag, e.g., en_US. 
	 *@access public
	 *@var string
	 */ 
	public $errorLanguage;


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->detailLevel != null) {
			$str .= $delim .  $prefix . 'detailLevel=' . urlencode($this->detailLevel);
			$delim = '&';
		}
		if($this->errorLanguage != null) {
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
	 * No Document Comments
	 *@access public
	 *@var dateTime
	 */ 
	public $timestamp;

	/**
	 * Application level acknowledgement code. 
	 *@access public
	 *@var AckCode
	 */ 
	public $ack;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $correlationId;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $build;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			$mapKeyName =  $prefix . 'timestamp';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->timestamp = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'ack';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->ack = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'correlationId';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->correlationId = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'build';
			if($map != null && array_key_exists($mapKeyName, $map)) {
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
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $ipAddress;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $deviceId;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $applicationId;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $model;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $geoLocation;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $customerType;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $partnerName;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $customerId;


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->ipAddress != null) {
			$str .= $delim .  $prefix . 'ipAddress=' . urlencode($this->ipAddress);
			$delim = '&';
		}
		if($this->deviceId != null) {
			$str .= $delim .  $prefix . 'deviceId=' . urlencode($this->deviceId);
			$delim = '&';
		}
		if($this->applicationId != null) {
			$str .= $delim .  $prefix . 'applicationId=' . urlencode($this->applicationId);
			$delim = '&';
		}
		if($this->model != null) {
			$str .= $delim .  $prefix . 'model=' . urlencode($this->model);
			$delim = '&';
		}
		if($this->geoLocation != null) {
			$str .= $delim .  $prefix . 'geoLocation=' . urlencode($this->geoLocation);
			$delim = '&';
		}
		if($this->customerType != null) {
			$str .= $delim .  $prefix . 'customerType=' . urlencode($this->customerType);
			$delim = '&';
		}
		if($this->partnerName != null) {
			$str .= $delim .  $prefix . 'partnerName=' . urlencode($this->partnerName);
			$delim = '&';
		}
		if($this->customerId != null) {
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
	 * No Document Comments
	 *@access public
	 *@var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var ErrorData
	 */ 
	public $error;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$i = 0;
			while(true) {
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
 * Valid values are: Personal, Premier, and Business. Flag="2"
 * corresponds to java.util.regex.Pattern.CASE_INSENSITIVE,
 * meaning the strings are not case-sensitive 
 */
class CreateAccountRequest  {

	/**
	 * No Document Comments
	 *@access public
	 *@var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * No Document Comments
	 *@access public
	 *@var ClientDetailsType
	 */ 
	public $clientDetails;

	/**
	 * Valid values are: Personal, Premier, and Business. Flag="2"
	 * corresponds to java.util.regex.Pattern.CASE_INSENSITIVE,
	 * meaning the strings are not case-sensitive 
	 *@access public
	 *@var string
	 */ 
	public $accountType;

	/**
	 * No Document Comments
	 *@access public
	 *@var NameType
	 */ 
	public $name;

	/**
	 * No Document Comments
	 *@access public
	 *@var date
	 */ 
	public $dateOfBirth;

	/**
	 * No Document Comments
	 *@access public
	 *@var AddressType
	 */ 
	public $address;

	/**
	 * Must provide at least one of contactPhoneNumber,
	 * homePhoneNumber, or mobilePhoneNumber 
	 *@access public
	 *@var string
	 */ 
	public $contactPhoneNumber;

	/**
	 * Must provide at least one of contactPhoneNumber,
	 * homePhoneNumber, or mobilePhoneNumber 
	 *@access public
	 *@var string
	 */ 
	public $homePhoneNumber;

	/**
	 * Must provide at least one of contactPhoneNumber,
	 * homePhoneNumber, or mobilePhoneNumber 
	 *@access public
	 *@var string
	 */ 
	public $mobilePhoneNumber;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $currencyCode;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $citizenshipCountryCode;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $preferredLanguageCode;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $notificationURL;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $emailAddress;

	/**
	 * Valid values are: Mobile and Web. Mobile: Returns a key to
	 * complete the registration. Web: Returns a URL to complete
	 * the registration. 
	 *@access public
	 *@var string
	 */ 
	public $registrationType;

	/**
	 * No Document Comments
	 *@access public
	 *@var CreateAccountWebOptionsType
	 */ 
	public $createAccountWebOptions;

	/**
	 * No Document Comments
	 *@access public
	 *@var boolean
	 */ 
	public $suppressWelcomeEmail;

	/**
	 * Set to true if you want this account to undergo extra
	 * vetting by PayPal before becoming usable. 
	 *@access public
	 *@var boolean
	 */ 
	public $performExtraVettingOnThisAccount;

	/**
	 * tax id, ssn, itin, pan, cpf, acn, abn, etc. 
	 *@access public
	 *@var string
	 */ 
	public $taxId;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $partnerField1;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $partnerField2;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $partnerField3;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $partnerField4;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $partnerField5;

	/**
	 * Required for business account creation 
	 *@access public
	 *@var BusinessInfoType
	 */ 
	public $businessInfo;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = null, $name = null, $address = null, $preferredLanguageCode = null) {
		$this->requestEnvelope = $requestEnvelope;
		$this->name = $name;
		$this->address = $address;
		$this->preferredLanguageCode = $preferredLanguageCode;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != null) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->clientDetails != null) {
			$newPrefix = $prefix . 'clientDetails.';
			$str .= $delim . call_user_func(array($this->clientDetails, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->accountType != null) {
			$str .= $delim .  $prefix . 'accountType=' . urlencode($this->accountType);
			$delim = '&';
		}
		if($this->name != null) {
			$newPrefix = $prefix . 'name.';
			$str .= $delim . call_user_func(array($this->name, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->dateOfBirth != null) {
			$str .= $delim .  $prefix . 'dateOfBirth=' . urlencode($this->dateOfBirth);
			$delim = '&';
		}
		if($this->address != null) {
			$newPrefix = $prefix . 'address.';
			$str .= $delim . call_user_func(array($this->address, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->contactPhoneNumber != null) {
			$str .= $delim .  $prefix . 'contactPhoneNumber=' . urlencode($this->contactPhoneNumber);
			$delim = '&';
		}
		if($this->homePhoneNumber != null) {
			$str .= $delim .  $prefix . 'homePhoneNumber=' . urlencode($this->homePhoneNumber);
			$delim = '&';
		}
		if($this->mobilePhoneNumber != null) {
			$str .= $delim .  $prefix . 'mobilePhoneNumber=' . urlencode($this->mobilePhoneNumber);
			$delim = '&';
		}
		if($this->currencyCode != null) {
			$str .= $delim .  $prefix . 'currencyCode=' . urlencode($this->currencyCode);
			$delim = '&';
		}
		if($this->citizenshipCountryCode != null) {
			$str .= $delim .  $prefix . 'citizenshipCountryCode=' . urlencode($this->citizenshipCountryCode);
			$delim = '&';
		}
		if($this->preferredLanguageCode != null) {
			$str .= $delim .  $prefix . 'preferredLanguageCode=' . urlencode($this->preferredLanguageCode);
			$delim = '&';
		}
		if($this->notificationURL != null) {
			$str .= $delim .  $prefix . 'notificationURL=' . urlencode($this->notificationURL);
			$delim = '&';
		}
		if($this->emailAddress != null) {
			$str .= $delim .  $prefix . 'emailAddress=' . urlencode($this->emailAddress);
			$delim = '&';
		}
		if($this->registrationType != null) {
			$str .= $delim .  $prefix . 'registrationType=' . urlencode($this->registrationType);
			$delim = '&';
		}
		if($this->createAccountWebOptions != null) {
			$newPrefix = $prefix . 'createAccountWebOptions.';
			$str .= $delim . call_user_func(array($this->createAccountWebOptions, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->suppressWelcomeEmail != null) {
			$str .= $delim .  $prefix . 'suppressWelcomeEmail=' . urlencode($this->suppressWelcomeEmail);
			$delim = '&';
		}
		if($this->performExtraVettingOnThisAccount != null) {
			$str .= $delim .  $prefix . 'performExtraVettingOnThisAccount=' . urlencode($this->performExtraVettingOnThisAccount);
			$delim = '&';
		}
		if($this->taxId != null) {
			$str .= $delim .  $prefix . 'taxId=' . urlencode($this->taxId);
			$delim = '&';
		}
		if($this->partnerField1 != null) {
			$str .= $delim .  $prefix . 'partnerField1=' . urlencode($this->partnerField1);
			$delim = '&';
		}
		if($this->partnerField2 != null) {
			$str .= $delim .  $prefix . 'partnerField2=' . urlencode($this->partnerField2);
			$delim = '&';
		}
		if($this->partnerField3 != null) {
			$str .= $delim .  $prefix . 'partnerField3=' . urlencode($this->partnerField3);
			$delim = '&';
		}
		if($this->partnerField4 != null) {
			$str .= $delim .  $prefix . 'partnerField4=' . urlencode($this->partnerField4);
			$delim = '&';
		}
		if($this->partnerField5 != null) {
			$str .= $delim .  $prefix . 'partnerField5=' . urlencode($this->partnerField5);
			$delim = '&';
		}
		if($this->businessInfo != null) {
			$newPrefix = $prefix . 'businessInfo.';
			$str .= $delim . call_user_func(array($this->businessInfo, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		return $str;
	}


} 



/**
 * Valid values are: COMPLETED,
 * COMPLETED:MERCHANT_REFERRAL_BONUS_ID_ASSOCIATION_FAILED 
 */
class CreateAccountResponse  {

	/**
	 * No Document Comments
	 *@access public
	 *@var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $createAccountKey;

	/**
	 * Valid values are: COMPLETED,
	 * COMPLETED:MERCHANT_REFERRAL_BONUS_ID_ASSOCIATION_FAILED 
	 *@access public
	 *@var string
	 */ 
	public $execStatus;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $redirectURL;

	/**
	 * Identifies a PayPal account. Only premier and business
	 * accounts have an accountId 
	 *@access public
	 *@var string
	 */ 
	public $accountId;

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var ErrorData
	 */ 
	public $error;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$mapKeyName =  $prefix . 'createAccountKey';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->createAccountKey = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'execStatus';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->execStatus = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'redirectURL';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->redirectURL = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'accountId';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->accountId = $map[$mapKeyName];
			}
			$i = 0;
			while(true) {
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
 * No Document Comments
 */
class GetUserAgreementRequest  {

	/**
	 * No Document Comments
	 *@access public
	 *@var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $createAccountKey;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $countryCode;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $languageCode;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = null) {
		$this->requestEnvelope = $requestEnvelope;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != null) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->createAccountKey != null) {
			$str .= $delim .  $prefix . 'createAccountKey=' . urlencode($this->createAccountKey);
			$delim = '&';
		}
		if($this->countryCode != null) {
			$str .= $delim .  $prefix . 'countryCode=' . urlencode($this->countryCode);
			$delim = '&';
		}
		if($this->languageCode != null) {
			$str .= $delim .  $prefix . 'languageCode=' . urlencode($this->languageCode);
			$delim = '&';
		}
		return $str;
	}


} 



/**
 * No Document Comments
 */
class GetUserAgreementResponse  {

	/**
	 * No Document Comments
	 *@access public
	 *@var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $agreement;

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var ErrorData
	 */ 
	public $error;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$mapKeyName =  $prefix . 'agreement';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->agreement = $map[$mapKeyName];
			}
			$i = 0;
			while(true) {
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
	 * No Document Comments
	 *@access public
	 *@var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $emailAddress;

	/**
	 * matchCriteria determines which field(s) in addition to
	 * emailAddress is used to locate the account. Currently, we
	 * support matchCriteria of 'NAME' and 'NONE'. 
	 *@access public
	 *@var string
	 */ 
	public $matchCriteria;

	/**
	 * Required if matchCriteria is NAME Optional if matchCriteria
	 * is NONE 
	 *@access public
	 *@var string
	 */ 
	public $firstName;

	/**
	 * Required if matchCriteria is NAME Optional if matchCriteria
	 * is NONE 
	 *@access public
	 *@var string
	 */ 
	public $lastName;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = null, $emailAddress = null, $matchCriteria = null) {
		$this->requestEnvelope = $requestEnvelope;
		$this->emailAddress = $emailAddress;
		$this->matchCriteria = $matchCriteria;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != null) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->emailAddress != null) {
			$str .= $delim .  $prefix . 'emailAddress=' . urlencode($this->emailAddress);
			$delim = '&';
		}
		if($this->matchCriteria != null) {
			$str .= $delim .  $prefix . 'matchCriteria=' . urlencode($this->matchCriteria);
			$delim = '&';
		}
		if($this->firstName != null) {
			$str .= $delim .  $prefix . 'firstName=' . urlencode($this->firstName);
			$delim = '&';
		}
		if($this->lastName != null) {
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
	 * No Document Comments
	 *@access public
	 *@var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * Returned values are: VERIFIED|UNVERIFIED. 
	 *@access public
	 *@var string
	 */ 
	public $accountStatus;

	/**
	 * Returns countryCode belonging to PayPal account. 
	 *@access public
	 *@var string
	 */ 
	public $countryCode;

	/**
	 * Info about PayPal user such as emailAddress, accountId,
	 * firstName, lastName etc. 
	 *@access public
	 *@var UserInfoType
	 */ 
	public $userInfo;

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var ErrorData
	 */ 
	public $error;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$mapKeyName =  $prefix . 'accountStatus';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->accountStatus = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'countryCode';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->countryCode = $map[$mapKeyName];
			}
			if (PPUtils::array_match_key($map, $prefix . "userInfo.")) {
				$newPrefix = $prefix . "userInfo.";
				$this->userInfo = new UserInfoType();
				$this->userInfo->init($map, $newPrefix);
			}
			$i = 0;
			while(true) {
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
	 * No Document Comments
	 *@access public
	 *@var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * Identifying the PayPal account to which this request is
	 * targetted to. Caller of this API has to either provided an
	 * emailAddress or an accountId. 
	 *@access public
	 *@var string
	 */ 
	public $emailAddress;

	/**
	 * Identifying the PayPal account to which this request is
	 * targetted to. Caller of this API has to either provided an
	 * emailAddress or an accountId. 
	 *@access public
	 *@var string
	 */ 
	public $accountId;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $createAccountKey;

	/**
	 * Country code for the bank 
	 *@access public
	 *@var string
	 */ 
	public $bankCountryCode;

	/**
	 * The defualt value is UNKNOWN. 
	 *@access public
	 *@var string
	 */ 
	public $bankName;

	/**
	 * Bank routing or transit number 
	 *@access public
	 *@var string
	 */ 
	public $routingNumber;

	/**
	 * No Document Comments
	 *@access public
	 *@var BankAccountType
	 */ 
	public $bankAccountType;

	/**
	 * Basic Bank Account Number (BBAN) 
	 *@access public
	 *@var string
	 */ 
	public $bankAccountNumber;

	/**
	 * International Bank Account Number (IBAN) 
	 *@access public
	 *@var string
	 */ 
	public $iban;

	/**
	 * CLABE represents the bank information for countries like
	 * Mexico 
	 *@access public
	 *@var string
	 */ 
	public $clabe;

	/**
	 * Bank/State/Branch number 
	 *@access public
	 *@var string
	 */ 
	public $bsbNumber;

	/**
	 * Branch location 
	 *@access public
	 *@var string
	 */ 
	public $branchLocation;

	/**
	 * Branch sort code. 
	 *@access public
	 *@var string
	 */ 
	public $sortCode;

	/**
	 * Bank transit number 
	 *@access public
	 *@var string
	 */ 
	public $bankTransitNumber;

	/**
	 * Institution number 
	 *@access public
	 *@var string
	 */ 
	public $institutionNumber;

	/**
	 * Branch code 
	 *@access public
	 *@var string
	 */ 
	public $branchCode;

	/**
	 * For Brazil Agency Number 
	 *@access public
	 *@var string
	 */ 
	public $agencyNumber;

	/**
	 * Bank code 
	 *@access public
	 *@var string
	 */ 
	public $bankCode;

	/**
	 * RIB key 
	 *@access public
	 *@var string
	 */ 
	public $ribKey;

	/**
	 * control digits 
	 *@access public
	 *@var string
	 */ 
	public $controlDigit;

	/**
	 * Tax id type of CNPJ or CPF, only supported for Brazil. 
	 *@access public
	 *@var string
	 */ 
	public $taxIdType;

	/**
	 * Tax id number for Brazil. 
	 *@access public
	 *@var string
	 */ 
	public $taxIdNumber;

	/**
	 * Date of birth of the account holder 
	 *@access public
	 *@var date
	 */ 
	public $accountHolderDateOfBirth;

	/**
	 * No Document Comments
	 *@access public
	 *@var ConfirmationType
	 */ 
	public $confirmationType;

	/**
	 * No Document Comments
	 *@access public
	 *@var WebOptionsType
	 */ 
	public $webOptions;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = null, $bankCountryCode = null, $confirmationType = null) {
		$this->requestEnvelope = $requestEnvelope;
		$this->bankCountryCode = $bankCountryCode;
		$this->confirmationType = $confirmationType;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != null) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->emailAddress != null) {
			$str .= $delim .  $prefix . 'emailAddress=' . urlencode($this->emailAddress);
			$delim = '&';
		}
		if($this->accountId != null) {
			$str .= $delim .  $prefix . 'accountId=' . urlencode($this->accountId);
			$delim = '&';
		}
		if($this->createAccountKey != null) {
			$str .= $delim .  $prefix . 'createAccountKey=' . urlencode($this->createAccountKey);
			$delim = '&';
		}
		if($this->bankCountryCode != null) {
			$str .= $delim .  $prefix . 'bankCountryCode=' . urlencode($this->bankCountryCode);
			$delim = '&';
		}
		if($this->bankName != null) {
			$str .= $delim .  $prefix . 'bankName=' . urlencode($this->bankName);
			$delim = '&';
		}
		if($this->routingNumber != null) {
			$str .= $delim .  $prefix . 'routingNumber=' . urlencode($this->routingNumber);
			$delim = '&';
		}
		if($this->bankAccountType != null) {
			$str .= $delim .  $prefix . 'bankAccountType=' . urlencode($this->bankAccountType);
			$delim = '&';
		}
		if($this->bankAccountNumber != null) {
			$str .= $delim .  $prefix . 'bankAccountNumber=' . urlencode($this->bankAccountNumber);
			$delim = '&';
		}
		if($this->iban != null) {
			$str .= $delim .  $prefix . 'iban=' . urlencode($this->iban);
			$delim = '&';
		}
		if($this->clabe != null) {
			$str .= $delim .  $prefix . 'clabe=' . urlencode($this->clabe);
			$delim = '&';
		}
		if($this->bsbNumber != null) {
			$str .= $delim .  $prefix . 'bsbNumber=' . urlencode($this->bsbNumber);
			$delim = '&';
		}
		if($this->branchLocation != null) {
			$str .= $delim .  $prefix . 'branchLocation=' . urlencode($this->branchLocation);
			$delim = '&';
		}
		if($this->sortCode != null) {
			$str .= $delim .  $prefix . 'sortCode=' . urlencode($this->sortCode);
			$delim = '&';
		}
		if($this->bankTransitNumber != null) {
			$str .= $delim .  $prefix . 'bankTransitNumber=' . urlencode($this->bankTransitNumber);
			$delim = '&';
		}
		if($this->institutionNumber != null) {
			$str .= $delim .  $prefix . 'institutionNumber=' . urlencode($this->institutionNumber);
			$delim = '&';
		}
		if($this->branchCode != null) {
			$str .= $delim .  $prefix . 'branchCode=' . urlencode($this->branchCode);
			$delim = '&';
		}
		if($this->agencyNumber != null) {
			$str .= $delim .  $prefix . 'agencyNumber=' . urlencode($this->agencyNumber);
			$delim = '&';
		}
		if($this->bankCode != null) {
			$str .= $delim .  $prefix . 'bankCode=' . urlencode($this->bankCode);
			$delim = '&';
		}
		if($this->ribKey != null) {
			$str .= $delim .  $prefix . 'ribKey=' . urlencode($this->ribKey);
			$delim = '&';
		}
		if($this->controlDigit != null) {
			$str .= $delim .  $prefix . 'controlDigit=' . urlencode($this->controlDigit);
			$delim = '&';
		}
		if($this->taxIdType != null) {
			$str .= $delim .  $prefix . 'taxIdType=' . urlencode($this->taxIdType);
			$delim = '&';
		}
		if($this->taxIdNumber != null) {
			$str .= $delim .  $prefix . 'taxIdNumber=' . urlencode($this->taxIdNumber);
			$delim = '&';
		}
		if($this->accountHolderDateOfBirth != null) {
			$str .= $delim .  $prefix . 'accountHolderDateOfBirth=' . urlencode($this->accountHolderDateOfBirth);
			$delim = '&';
		}
		if($this->confirmationType != null) {
			$str .= $delim .  $prefix . 'confirmationType=' . urlencode($this->confirmationType);
			$delim = '&';
		}
		if($this->webOptions != null) {
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
	 * No Document Comments
	 *@access public
	 *@var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * Valid values are: FUNDING_SOURCE_ADDED,
	 * WEB_URL_VERIFICATION_NEEDED 
	 *@access public
	 *@var string
	 */ 
	public $execStatus;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $redirectURL;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $fundingSourceKey;

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var ErrorData
	 */ 
	public $error;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$mapKeyName =  $prefix . 'execStatus';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->execStatus = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'redirectURL';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->redirectURL = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'fundingSourceKey';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->fundingSourceKey = $map[$mapKeyName];
			}
			$i = 0;
			while(true) {
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
	 * No Document Comments
	 *@access public
	 *@var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * Identifying the PayPal account to which this request is
	 * targetted to. Caller of this API has to either provided an
	 * emailAddress or an accountId. 
	 *@access public
	 *@var string
	 */ 
	public $emailAddress;

	/**
	 * Identifying the PayPal account to which this request is
	 * targetted to. Caller of this API has to either provided an
	 * emailAddress or an accountId. 
	 *@access public
	 *@var string
	 */ 
	public $accountId;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $createAccountKey;

	/**
	 * No Document Comments
	 *@access public
	 *@var NameType
	 */ 
	public $nameOnCard;

	/**
	 * No Document Comments
	 *@access public
	 *@var AddressType
	 */ 
	public $billingAddress;

	/**
	 * No Document Comments
	 *@access public
	 *@var date
	 */ 
	public $cardOwnerDateOfBirth;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $cardNumber;

	/**
	 * No Document Comments
	 *@access public
	 *@var CardTypeType
	 */ 
	public $cardType;

	/**
	 * No Document Comments
	 *@access public
	 *@var CardDateType
	 */ 
	public $expirationDate;

	/**
	 * CVV2: Proivde only for requests where confirmationType is
	 * None (Direct request) 
	 *@access public
	 *@var string
	 */ 
	public $cardVerificationNumber;

	/**
	 * No Document Comments
	 *@access public
	 *@var CardDateType
	 */ 
	public $startDate;

	/**
	 * Up to 2 digit for Switch/Maestro/Solo cards. 
	 *@access public
	 *@var string
	 */ 
	public $issueNumber;

	/**
	 * No Document Comments
	 *@access public
	 *@var ConfirmationType
	 */ 
	public $confirmationType;

	/**
	 * No Document Comments
	 *@access public
	 *@var WebOptionsType
	 */ 
	public $webOptions;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = null, $nameOnCard = null, $billingAddress = null, $cardNumber = null, $cardType = null, $confirmationType = null) {
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
		if($this->requestEnvelope != null) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->emailAddress != null) {
			$str .= $delim .  $prefix . 'emailAddress=' . urlencode($this->emailAddress);
			$delim = '&';
		}
		if($this->accountId != null) {
			$str .= $delim .  $prefix . 'accountId=' . urlencode($this->accountId);
			$delim = '&';
		}
		if($this->createAccountKey != null) {
			$str .= $delim .  $prefix . 'createAccountKey=' . urlencode($this->createAccountKey);
			$delim = '&';
		}
		if($this->nameOnCard != null) {
			$newPrefix = $prefix . 'nameOnCard.';
			$str .= $delim . call_user_func(array($this->nameOnCard, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->billingAddress != null) {
			$newPrefix = $prefix . 'billingAddress.';
			$str .= $delim . call_user_func(array($this->billingAddress, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->cardOwnerDateOfBirth != null) {
			$str .= $delim .  $prefix . 'cardOwnerDateOfBirth=' . urlencode($this->cardOwnerDateOfBirth);
			$delim = '&';
		}
		if($this->cardNumber != null) {
			$str .= $delim .  $prefix . 'cardNumber=' . urlencode($this->cardNumber);
			$delim = '&';
		}
		if($this->cardType != null) {
			$str .= $delim .  $prefix . 'cardType=' . urlencode($this->cardType);
			$delim = '&';
		}
		if($this->expirationDate != null) {
			$newPrefix = $prefix . 'expirationDate.';
			$str .= $delim . call_user_func(array($this->expirationDate, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->cardVerificationNumber != null) {
			$str .= $delim .  $prefix . 'cardVerificationNumber=' . urlencode($this->cardVerificationNumber);
			$delim = '&';
		}
		if($this->startDate != null) {
			$newPrefix = $prefix . 'startDate.';
			$str .= $delim . call_user_func(array($this->startDate, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->issueNumber != null) {
			$str .= $delim .  $prefix . 'issueNumber=' . urlencode($this->issueNumber);
			$delim = '&';
		}
		if($this->confirmationType != null) {
			$str .= $delim .  $prefix . 'confirmationType=' . urlencode($this->confirmationType);
			$delim = '&';
		}
		if($this->webOptions != null) {
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
	 * No Document Comments
	 *@access public
	 *@var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * Valid values are: FUNDING_SOURCE_ADDED,
	 * WEB_URL_VERIFICATION_NEEDED 
	 *@access public
	 *@var string
	 */ 
	public $execStatus;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $redirectURL;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $fundingSourceKey;

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var ErrorData
	 */ 
	public $error;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$mapKeyName =  $prefix . 'execStatus';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->execStatus = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'redirectURL';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->redirectURL = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'fundingSourceKey';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->fundingSourceKey = $map[$mapKeyName];
			}
			$i = 0;
			while(true) {
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
	 * No Document Comments
	 *@access public
	 *@var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * Identifying the PayPal account to which this request is
	 * targetted to. Caller of this API has to either provided an
	 * emailAddress or an accountId. 
	 *@access public
	 *@var string
	 */ 
	public $emailAddress;

	/**
	 * Identifying the PayPal account to which this request is
	 * targetted to. Caller of this API has to either provided an
	 * emailAddress or an accountId. 
	 *@access public
	 *@var string
	 */ 
	public $accountId;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $fundingSourceKey;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = null, $fundingSourceKey = null) {
		$this->requestEnvelope = $requestEnvelope;
		$this->fundingSourceKey = $fundingSourceKey;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != null) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->emailAddress != null) {
			$str .= $delim .  $prefix . 'emailAddress=' . urlencode($this->emailAddress);
			$delim = '&';
		}
		if($this->accountId != null) {
			$str .= $delim .  $prefix . 'accountId=' . urlencode($this->accountId);
			$delim = '&';
		}
		if($this->fundingSourceKey != null) {
			$str .= $delim .  $prefix . 'fundingSourceKey=' . urlencode($this->fundingSourceKey);
			$delim = '&';
		}
		return $str;
	}


} 



/**
 * No Document Comments
 */
class SetFundingSourceConfirmedResponse  {

	/**
	 * No Document Comments
	 *@access public
	 *@var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var ErrorData
	 */ 
	public $error;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$i = 0;
			while(true) {
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
 * No Document Comments
 */
class NameType  {

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $salutation;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $firstName;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $middleName;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $lastName;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $suffix;

	/**
	 * Constructor with arguments
	 */
	public function __construct($firstName = null, $lastName = null) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->salutation != null) {
			$str .= $delim .  $prefix . 'salutation=' . urlencode($this->salutation);
			$delim = '&';
		}
		if($this->firstName != null) {
			$str .= $delim .  $prefix . 'firstName=' . urlencode($this->firstName);
			$delim = '&';
		}
		if($this->middleName != null) {
			$str .= $delim .  $prefix . 'middleName=' . urlencode($this->middleName);
			$delim = '&';
		}
		if($this->lastName != null) {
			$str .= $delim .  $prefix . 'lastName=' . urlencode($this->lastName);
			$delim = '&';
		}
		if($this->suffix != null) {
			$str .= $delim .  $prefix . 'suffix=' . urlencode($this->suffix);
			$delim = '&';
		}
		return $str;
	}


	public function init($map = null, $prefix = '') {
		if($map != null) {
			$mapKeyName =  $prefix . 'salutation';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->salutation = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'firstName';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->firstName = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'middleName';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->middleName = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'lastName';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->lastName = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'suffix';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->suffix = $map[$mapKeyName];
			}
			
		}
	}
} 



/**
 * No Document Comments
 */
class AddressType  {

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $line1;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $line2;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $city;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $state;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $postalCode;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $countryCode;

	/**
	 * Constructor with arguments
	 */
	public function __construct($line1 = null, $countryCode = null) {
		$this->line1 = $line1;
		$this->countryCode = $countryCode;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->line1 != null) {
			$str .= $delim .  $prefix . 'line1=' . urlencode($this->line1);
			$delim = '&';
		}
		if($this->line2 != null) {
			$str .= $delim .  $prefix . 'line2=' . urlencode($this->line2);
			$delim = '&';
		}
		if($this->city != null) {
			$str .= $delim .  $prefix . 'city=' . urlencode($this->city);
			$delim = '&';
		}
		if($this->state != null) {
			$str .= $delim .  $prefix . 'state=' . urlencode($this->state);
			$delim = '&';
		}
		if($this->postalCode != null) {
			$str .= $delim .  $prefix . 'postalCode=' . urlencode($this->postalCode);
			$delim = '&';
		}
		if($this->countryCode != null) {
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
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $returnUrl;

	/**
	 * No Document Comments
	 *@access public
	 *@var boolean
	 */ 
	public $showAddCreditCard;

	/**
	 * Ask end-user to also initiate confirmation of their mobile
	 * phone. This number must be supplied by the API caller (using
	 * mobilePhoneNumber) Default=false. 
	 *@access public
	 *@var boolean
	 */ 
	public $showMobileConfirm;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $returnUrlDescription;

	/**
	 * If provided, end user will go through a single page sign-up
	 * flow on a Mini Browser. If not provided, flow defaults to
	 * the Multi-page flow that is full size. 
	 *@access public
	 *@var boolean
	 */ 
	public $useMiniBrowser;


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->returnUrl != null) {
			$str .= $delim .  $prefix . 'returnUrl=' . urlencode($this->returnUrl);
			$delim = '&';
		}
		if($this->showAddCreditCard != null) {
			$str .= $delim .  $prefix . 'showAddCreditCard=' . urlencode($this->showAddCreditCard);
			$delim = '&';
		}
		if($this->showMobileConfirm != null) {
			$str .= $delim .  $prefix . 'showMobileConfirm=' . urlencode($this->showMobileConfirm);
			$delim = '&';
		}
		if($this->returnUrlDescription != null) {
			$str .= $delim .  $prefix . 'returnUrlDescription=' . urlencode($this->returnUrlDescription);
			$delim = '&';
		}
		if($this->useMiniBrowser != null) {
			$str .= $delim .  $prefix . 'useMiniBrowser=' . urlencode($this->useMiniBrowser);
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
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $businessName;

	/**
	 * No Document Comments
	 *@access public
	 *@var AddressType
	 */ 
	public $businessAddress;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $workPhone;

	/**
	 * PayPal Business Category. i.e., baby - 1004 
	 *@access public
	 *@var integer
	 */ 
	public $category;

	/**
	 * Paypal Business subcategory. i.e., baby-clothing - 2027 
	 *@access public
	 *@var integer
	 */ 
	public $subCategory;

	/**
	 * If Category and Subcategory is specified, then this is
	 * optional. PayPal uses the industry standard Merchant
	 * Category Codes. Please refer to your Association Merchant
	 * Category Code documentation for a list of codes 
	 *@access public
	 *@var integer
	 */ 
	public $merchantCategoryCode;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $doingBusinessAs;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $customerServicePhone;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $customerServiceEmail;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $disputeEmail;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $webSite;

	/**
	 * Company Id: tax id, acn, abn, etc. 
	 *@access public
	 *@var string
	 */ 
	public $companyId;

	/**
	 * No Document Comments
	 *@access public
	 *@var date
	 */ 
	public $dateOfEstablishment;

	/**
	 * No Document Comments
	 *@access public
	 *@var BusinessType
	 */ 
	public $businessType;

	/**
	 * No Document Comments
	 *@access public
	 *@var BusinessSubtypeType
	 */ 
	public $businessSubtype;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $incorporationId;

	/**
	 * Average transaction value. 
	 *@access public
	 *@var double
	 */ 
	public $averagePrice;

	/**
	 * Average monthly transaction value. 
	 *@access public
	 *@var double
	 */ 
	public $averageMonthlyVolume;

	/**
	 * Percentage of the revenue that is from online sales
	 * (0%-100%). 
	 *@access public
	 *@var integer
	 */ 
	public $percentageRevenueFromOnline;

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var SalesVenueType
	 */ 
	public $salesVenue;

	/**
	 * Description of store front or place for sales. Only required
	 * when "OTHER" is specified for salesVenue. 
	 *@access public
	 *@var string
	 */ 
	public $salesVenueDesc;

	/**
	 * Value Added Tax (VAT) ID number 
	 *@access public
	 *@var string
	 */ 
	public $vatId;

	/**
	 * Country code for country on the vat id. 
	 *@access public
	 *@var string
	 */ 
	public $vatCountryCode;

	/**
	 * Official commercial registration location. 
	 *@access public
	 *@var string
	 */ 
	public $commercialRegistrationLocation;

	/**
	 * No Document Comments
	 *@access public
	 *@var AddressType
	 */ 
	public $principalPlaceOfBusinessAddress;

	/**
	 * No Document Comments
	 *@access public
	 *@var AddressType
	 */ 
	public $registeredOfficeAddress;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $establishmentCountryCode;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $establishmentState;

	/**
	 * All the stakeholders of the company. 
     *@array
	 *@access public
	 *@var BusinessStakeholderType
	 */ 
	public $businessStakeholder;

	/**
	 * Constructor with arguments
	 */
	public function __construct($businessName = null, $businessAddress = null, $workPhone = null) {
		$this->businessName = $businessName;
		$this->businessAddress = $businessAddress;
		$this->workPhone = $workPhone;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->businessName != null) {
			$str .= $delim .  $prefix . 'businessName=' . urlencode($this->businessName);
			$delim = '&';
		}
		if($this->businessAddress != null) {
			$newPrefix = $prefix . 'businessAddress.';
			$str .= $delim . call_user_func(array($this->businessAddress, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->workPhone != null) {
			$str .= $delim .  $prefix . 'workPhone=' . urlencode($this->workPhone);
			$delim = '&';
		}
		if($this->category != null) {
			$str .= $delim .  $prefix . 'category=' . urlencode($this->category);
			$delim = '&';
		}
		if($this->subCategory != null) {
			$str .= $delim .  $prefix . 'subCategory=' . urlencode($this->subCategory);
			$delim = '&';
		}
		if($this->merchantCategoryCode != null) {
			$str .= $delim .  $prefix . 'merchantCategoryCode=' . urlencode($this->merchantCategoryCode);
			$delim = '&';
		}
		if($this->doingBusinessAs != null) {
			$str .= $delim .  $prefix . 'doingBusinessAs=' . urlencode($this->doingBusinessAs);
			$delim = '&';
		}
		if($this->customerServicePhone != null) {
			$str .= $delim .  $prefix . 'customerServicePhone=' . urlencode($this->customerServicePhone);
			$delim = '&';
		}
		if($this->customerServiceEmail != null) {
			$str .= $delim .  $prefix . 'customerServiceEmail=' . urlencode($this->customerServiceEmail);
			$delim = '&';
		}
		if($this->disputeEmail != null) {
			$str .= $delim .  $prefix . 'disputeEmail=' . urlencode($this->disputeEmail);
			$delim = '&';
		}
		if($this->webSite != null) {
			$str .= $delim .  $prefix . 'webSite=' . urlencode($this->webSite);
			$delim = '&';
		}
		if($this->companyId != null) {
			$str .= $delim .  $prefix . 'companyId=' . urlencode($this->companyId);
			$delim = '&';
		}
		if($this->dateOfEstablishment != null) {
			$str .= $delim .  $prefix . 'dateOfEstablishment=' . urlencode($this->dateOfEstablishment);
			$delim = '&';
		}
		if($this->businessType != null) {
			$str .= $delim .  $prefix . 'businessType=' . urlencode($this->businessType);
			$delim = '&';
		}
		if($this->businessSubtype != null) {
			$str .= $delim .  $prefix . 'businessSubtype=' . urlencode($this->businessSubtype);
			$delim = '&';
		}
		if($this->incorporationId != null) {
			$str .= $delim .  $prefix . 'incorporationId=' . urlencode($this->incorporationId);
			$delim = '&';
		}
		if($this->averagePrice != null) {
			$str .= $delim .  $prefix . 'averagePrice=' . urlencode($this->averagePrice);
			$delim = '&';
		}
		if($this->averageMonthlyVolume != null) {
			$str .= $delim .  $prefix . 'averageMonthlyVolume=' . urlencode($this->averageMonthlyVolume);
			$delim = '&';
		}
		if($this->percentageRevenueFromOnline != null) {
			$str .= $delim .  $prefix . 'percentageRevenueFromOnline=' . urlencode($this->percentageRevenueFromOnline);
			$delim = '&';
		}
		for($i = 0; $i < count($this->salesVenue); $i++) {
			$str .= $delim .  $prefix . "salesVenue($i)=" .  urlencode($this->salesVenue[$i]);
			$delim = '&';
		}
		if($this->salesVenueDesc != null) {
			$str .= $delim .  $prefix . 'salesVenueDesc=' . urlencode($this->salesVenueDesc);
			$delim = '&';
		}
		if($this->vatId != null) {
			$str .= $delim .  $prefix . 'vatId=' . urlencode($this->vatId);
			$delim = '&';
		}
		if($this->vatCountryCode != null) {
			$str .= $delim .  $prefix . 'vatCountryCode=' . urlencode($this->vatCountryCode);
			$delim = '&';
		}
		if($this->commercialRegistrationLocation != null) {
			$str .= $delim .  $prefix . 'commercialRegistrationLocation=' . urlencode($this->commercialRegistrationLocation);
			$delim = '&';
		}
		if($this->principalPlaceOfBusinessAddress != null) {
			$newPrefix = $prefix . 'principalPlaceOfBusinessAddress.';
			$str .= $delim . call_user_func(array($this->principalPlaceOfBusinessAddress, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->registeredOfficeAddress != null) {
			$newPrefix = $prefix . 'registeredOfficeAddress.';
			$str .= $delim . call_user_func(array($this->registeredOfficeAddress, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->establishmentCountryCode != null) {
			$str .= $delim .  $prefix . 'establishmentCountryCode=' . urlencode($this->establishmentCountryCode);
			$delim = '&';
		}
		if($this->establishmentState != null) {
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
	 * No Document Comments
	 *@access public
	 *@var StakeholderRoleType
	 */ 
	public $role;

	/**
	 * No Document Comments
	 *@access public
	 *@var NameType
	 */ 
	public $name;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $fullLegalName;

	/**
	 * No Document Comments
	 *@access public
	 *@var AddressType
	 */ 
	public $address;

	/**
	 * No Document Comments
	 *@access public
	 *@var date
	 */ 
	public $dateOfBirth;

	/**
	 * Constructor with arguments
	 */
	public function __construct($role = null) {
		$this->role = $role;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->role != null) {
			$str .= $delim .  $prefix . 'role=' . urlencode($this->role);
			$delim = '&';
		}
		if($this->name != null) {
			$newPrefix = $prefix . 'name.';
			$str .= $delim . call_user_func(array($this->name, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->fullLegalName != null) {
			$str .= $delim .  $prefix . 'fullLegalName=' . urlencode($this->fullLegalName);
			$delim = '&';
		}
		if($this->address != null) {
			$newPrefix = $prefix . 'address.';
			$str .= $delim . call_user_func(array($this->address, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->dateOfBirth != null) {
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
	 *@access public
	 *@var string
	 */ 
	public $emailAddress;

	/**
	 * Valid values are: Personal, Premier, and Business (not
	 * case-sensitive). 
	 *@access public
	 *@var string
	 */ 
	public $accountType;

	/**
	 * Identifies a PayPal account. Only premier and business
	 * accounts have an accountId 
	 *@access public
	 *@var string
	 */ 
	public $accountId;

	/**
	 * Identifies a PayPal user, like firstName, lastName. 
	 *@access public
	 *@var NameType
	 */ 
	public $name;

	/**
	 * Business Name of the PayPal account holder. 
	 *@access public
	 *@var string
	 */ 
	public $businessName;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			$mapKeyName =  $prefix . 'emailAddress';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->emailAddress = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'accountType';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->accountType = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'accountId';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->accountId = $map[$mapKeyName];
			}
			if (PPUtils::array_match_key($map, $prefix . "name.")) {
				$newPrefix = $prefix . "name.";
				$this->name = new NameType();
				$this->name->init($map, $newPrefix);
			}
			$mapKeyName =  $prefix . 'businessName';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->businessName = $map[$mapKeyName];
			}
			
		}
	}
} 



/**
 * No Document Comments
 */
class WebOptionsType  {

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $returnUrl;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $cancelUrl;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $returnUrlDescription;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $cancelUrlDescription;


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->returnUrl != null) {
			$str .= $delim .  $prefix . 'returnUrl=' . urlencode($this->returnUrl);
			$delim = '&';
		}
		if($this->cancelUrl != null) {
			$str .= $delim .  $prefix . 'cancelUrl=' . urlencode($this->cancelUrl);
			$delim = '&';
		}
		if($this->returnUrlDescription != null) {
			$str .= $delim .  $prefix . 'returnUrlDescription=' . urlencode($this->returnUrlDescription);
			$delim = '&';
		}
		if($this->cancelUrlDescription != null) {
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
	 *@access public
	 *@var integer
	 */ 
	public $month;

	/**
	 * Year in four digit format- YYYY 
	 *@access public
	 *@var integer
	 */ 
	public $year;

	/**
	 * Constructor with arguments
	 */
	public function __construct($month = null, $year = null) {
		$this->month = $month;
		$this->year = $year;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->month != null) {
			$str .= $delim .  $prefix . 'month=' . urlencode($this->month);
			$delim = '&';
		}
		if($this->year != null) {
			$str .= $delim .  $prefix . 'year=' . urlencode($this->year);
			$delim = '&';
		}
		return $str;
	}


} 




?>