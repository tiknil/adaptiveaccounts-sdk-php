
PayPal PHP Adaptive Accounts SDK
================================

Prerequisites
-------------

PayPal's PHP Adaptive Accounts SDK requires 

   * PHP 5.2 and above with curl/openssl extensions enabled
  

Using the SDK
-------------

To use the SDK, 

   * Copy the config and lib folders into your project. Modify the config file to suit your needs.
   * Make sure that the lib folder in your project is available in PHP's include path.
   * Include the services\AdaptiveAccounts\AdaptiveAccountsService.php file in your code.
   * Create a service wrapper object.
   * Create a request object as per your project's needs. All the API request and response classes are available 
     in services\AdaptiveAccounts\AdaptiveAccountsService.php
   * Invoke the appropriate method on the service object.

For example,

	require_once('services/AdaptiveAccounts/AdaptiveAccountsService.php');

  	$createAccountRequest = new CreateAccountRequest($requestEnvelope, $name, $address, $preferredLanguageCode);
	$createAccountRequest->accountType = $accountType;
	......

	$service  = new AdaptiveAccountsService();
	
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

Please refer to the sample config file provided with this bundle.


Getting help
------------

If you need help using the SDK, a new feature that you need or have a issue to report, please visit

   https://www.x.com/developers/paypal/forums/adaptive-accounts
   
     OR
   
   https://github.com/paypal/adaptiveaccounts-sdk-php/issues 

