<?php

/**
  * Interface - Goal Statement Strategy
  *
  * @package    JD_Dissatation
  * @author     James Dordoy
  * @created date   12/03/2017
  * @updated last 	02/12/2019		
  **/

namespace JamesDordoy\PHPForwardChaining\Interfaces;

interface GoalStatementInterface
{
	  /**
     * Check if a Goal can be derived from facts
     * @return Bool
     */
	  public function checkGoalReached($facts);
}
