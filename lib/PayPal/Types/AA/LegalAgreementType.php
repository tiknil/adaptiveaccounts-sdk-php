<?php 
namespace AdaptiveAccounts\Types\AA;
use PayPal\Core\PPMessage;  
/**
 * 
 */
class LegalAgreementType  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $accepted;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $type;


}
