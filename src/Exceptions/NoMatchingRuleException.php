<?php

/**
  * Exception - No Matching Rule Exception
  *
  * @package    JD_Dissatation
  * @author     James Dordoy
  * @created date   10/02/2017
  * @updated last 	02/12/2019
  **/

namespace JamesDordoy\PHPForwardChaining\Exceptions;

class NoMatchingRuleException extends \Exception
{
	/**
    * Error Message For Display
    * @return String
    */
	public function errorMessage(){
		return 'No Matching Rules Exception Thrown!!';
	}
}