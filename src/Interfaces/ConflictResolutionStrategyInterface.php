<?php

/**
  * Interface - Conflict Resolution Strategy
  *
  * @package    JD_Dissatation
  * @author     James Dordoy		
  * @created date   28/02/2017
  * @updated last 	02/12/2019
  **/

namespace JamesDordoy\PHPForwardChaining\Interfaces;
	
interface ConflictResolutionStrategyInterface 
{
    /**
      * Selects The Prefered Rule For Implementation
      * @return Rule
      */
    public function selectPreferedRule($rules);
}