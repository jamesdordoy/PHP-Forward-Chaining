<?php

/**
* Result Found (Goal Statement)
*
* @package    JD_Dissatation
* @author     James Dordoy			
* @created date   12/03/2017
* @updated last   02/12/2019
**/
	
namespace JamesDordoy\PHPForwardChaining;

use JamesDordoy\PHPForwardChaining\Interfaces\GoalStatementInterface;
	
class ResultFoundGoalStatement implements GoalStatementInterface{

	//@Assoc Array
	private $goalReached = false;

	//Checks to see if the inference engine facts include a result
	public function checkGoalReached($facts)
	{
		//Wouldnt work any other way
		$values = array_values($facts);
		$keys = array_keys($facts);

		for ($i = 0; $i < count($facts); $i++) {
			$val = $values[$i];
			$key = $keys[$i];

			if ($key == "result" && $val != "") {
				return true;
			}
		}
		return false;
	}

	public function setGoalReached($bool)
	{
		$this->goalReached = $bool;
	}

	public function getGoalReached()
	{
		return $this->goalReached;
	}
}
