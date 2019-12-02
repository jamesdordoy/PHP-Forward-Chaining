<?php

/**
* First Found Conflict Resolution Strategy
*
* @package    JD_Dissatation
* @author     James Dordoy	
* @created date   14/02/2017
* @updated last   02/12/2019
**/

namespace JamesDordoy\PHPForwardChaining;

use JamesDordoy\PHPForwardChaining\Interfaces\ConflictResolutionStrategyInterface;

class FirstAlwaysConflictResolutionStrategy implements ConflictResolutionStrategyInterface
{	
    /**
      * Select The Prefered Rule (First Avilable)
      * @return Void
      * @Override
      */
    public function selectPreferedRule($rules)
    {
        return $rules[0];
    }
    
    /**
      * toString Magic PHP Method
      * @return String
      */
    public function __toString()
    {
        return "First Result Found Conflict Resolution Strategy";
    }
}
