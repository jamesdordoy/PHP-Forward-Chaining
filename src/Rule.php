<?php

/**
* Rule class for modeling logic
*
* @package    JD_Dissatation
* @author     James Dordoy		
* @created date   28/02/2017
* @updated last   02/12/2019
**/

namespace JamesDordoy\PHPForwardChaining;

use Symfony\Component\ExpressionLanguage\ExpressionLanguage;

class Rule{

	private $id;

	//@Expression
	private $condition;

	//@JSON String
	private $action;

	//@Int
	private $priorty;

	//@Bool
	private $executed;

	//@Bool
	private $active;

	public function __construct($id, $condition, $action, $priorty, $active)
	{
		$this->id = $id;
		$this->condition = $condition;
		$this->action = $action;
		$this->priorty = $priorty;
		$this->executed = 0;
		$this->active = $active;
	}

	//@return bool
	public function checkCondition($facts)
	{
		$language = new ExpressionLanguage();

		return $language->evaluate($this->condition, $facts);
	}

	public function __toString()
	{
		return "Rule: " . $this->condition . ",  JSON Action:" . $this->action;
	}

	/**
     * Get Condition
     * @return Expression String
     */
	public function getCondition()
	{
		return $this->condition;
	}

	/**
     * Get Action
     * @return Expression String
     */
	public function getAction()
	{
		return $this->action;
	}

	/**
     * Get ID
     * @return String
     */
	public function getId()
	{
		return $this->id;
	}
}
