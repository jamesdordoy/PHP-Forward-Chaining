<?php

/**
  * Interface - Rule Data Access Object
  *
  * @package    JD_Dissatation
  * @author     James Dordoy
  * @created date   12/03/2017
  * @updated last 	02/12/2019	
  **/

namespace JamesDordoy\PHPForwardChaining\Interfaces;

interface RuleDAOInterface
{
	  /**
     * Find All Data Matching the Rule Name
     * @return Assoc Array
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
	  public function findAll($ruleSet, $activeOnly);
}
