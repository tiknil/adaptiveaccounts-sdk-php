
PayPal PHP Adaptive Accounts SDK
================================

Prerequisites
-------------

PayPal's PHP Adaptive Accounts SDK requires 

   * PHP 5.2 and above with curl/openssl extensions enabled
  
Installing the SDK
-------------------
   if not using composer 
   
   run installation script from adaptiveaccounts-sdk-php/samples directory
   
    curl  https://raw.github.com/paypal/adaptiveaccounts-sdk-php/composer/samples/install.php | php
    
        or 
        
    php install.php
    
   if using composer
   
   Run from adaptiveaccounts-sdk-php/samples directory and after the installation set the path to config file in PPBootStrap.php, config file is in vendor/paypal/adaptiveaccounts-sdk-php/config/
   
    composer update
    
Using the SDK
-------------

To use the SDK, 

   * Update the sdk_config.ini with your API credentials. or it can be passed as a hashmap to AdaptiveAccountsService($configMap) if dynamic configuration is used
   * Require "PPBootStrap.php" in your application. [copy it from vendor/paypal/adaptiveaccounts-sdk-php/sample/ if using composer]
   * To run samples : copy samples in [vendor/paypal/adaptiveaccounts-sdk-php/] to root directory and run in browser
   * To build your own application:
   * Create a service wrapper object.
   * Create a request object as per your project's needs. All the API request and response classes are available 
     in services\AdaptiveAccounts\AdaptiveAccountsService.php
   * Invoke the appropriate method on the service object.

For example,

	 //sets config file path and loads all the classes
    require("PPBootStrap.php");

  	$createAccountRequest = new CreateAccountRequest($requestEnvelope, $name, $address, $preferredLanguageCode);
	$createAccountRequest->accountType = $accountType;
	......

	$service  = new AdaptiveAccountsService();
	//or
    // $service  = new AdaptiveAccountsService($configMap); // where $configMap is a config array (used if dynamic configuration is used)
	$response = $service->CreateAccount($createAccountRequest);	
	$ack = strtoupper($response->responseEnvelope->ack); 
	if($ack == 'SUCCESS') {
		// Success
	}
  

The SDK provides multiple ways to authenticate your API call.

	$service  = new AdaptiveAccountsService();
	
	// Use the default account (the first account) configured in sdk_config.ini
	$response = $service->CreateAccount($createAccountRequest);	

	// Use a specific account configured in sdk_config.inig
	$response = $service->CreateAccount($createAccountRequest, 'jb-us-seller_api1.paypal.com');	
	 
	// Pass in a dynamically created API credential object
    $cred = new PPCertificateCredential("username", "password", "path-to-pem-file");
    $cred->setThirdPartyAuthorization(new PPTokenAuthorization("accessToken", "tokenSecret"));
	$response = $service->CreateAccount($createAccountRequest, $cred);	

 

SDK Configuration
-----------------

Replace the API credential in config/sdk_config.ini . You can use the configuration file to configure

   * (Multiple) API account credentials.
   * Service endpoint and other HTTP connection parameters
   * Logging 
   
   dynamic configuration values can be set by passing a map of credential and config values (if config map is passed the config file is ignored)
   ex : 
    $service  = new AdaptiveAccountsService($configMap); // where $configMap is a config array

Please refer to the sample config file provided with this bundle.

Using multiple SDKs together
----------------------------
*add the required sdk names to 'required' section of composer.json
*add the service endpoint to 'config/sdk_config.ini', for the endpoints refer the list below

Endpoint Configuration
---------------------------
*set 'mode' to 'SANDBOX' for testing and 'LIVE' for production

For additional information please refer to https://www.x.com/developers/paypal/documentation-tools/api

Instant Payment Notification (IPN)
-----------------------------------
refer to the IPN-README in 'samples/IPN' directory

Getting help
------------

If you need help using the SDK, a new feature that you need or have a issue to report, please visit

   https://www.x.com/developers/paypal/forums/adaptive-accounts
   
     OR
   
   https://github.com/paypal/adaptiveaccounts-sdk-php/issues 

