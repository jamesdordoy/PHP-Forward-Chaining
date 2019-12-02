<?php

/**
* Working Memory Class for Storing Facts
*
* @package    JD_Dissatation
* @author     James Dordoy		
* @created date   28/02/2017
* @updated last   02/12/2019
**/

namespace JamesDordoy\PHPForwardChaining;
	
class WorkingMemory
{
	//@Assoc Array
	private $facts = array();

	/**
    * Adds New Fact To Assoc Array
    * @return Void
    */
	public function setFact($factName, $factValue){
		$this->facts[$factName] = $factValue;
	}

	/**
    * Adds Fact Array To Assoc Array
    * @return Void
    */
	public function addFact($fact){
		array_merge($this->facts, $fact);
	}

	/**
    * Gets Fact From Assoc Array
    * @return Fact
    */
	public function getFact($factName){
		return $facts[$factName];
	}

	/**
    * Adds Fact To Assoc Array
    * @return Void
    */
	public function setAllFacts($facts){
		$this->facts = array_merge($this->facts, $facts);
	}

	/**
    * Adds Fact To Assoc Array
    * @return Void
    */
	public function unsetAllFacts(){
		$this->facts = [];
	}

	/**
    * Adds Fact To Assoc Array
    * @return Void
    */
	public function getAllFacts(){
		return $this->facts;
	}
}
