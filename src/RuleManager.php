<?php

/**
* Rules collection model
*
* @package    JD_Dissatation
* @author     James Dordoy		
* @created date   28/02/2017
* @updated last   02/12/2019
**/

namespace JamesDordoy\PHPForwardChaining;

class RuleManager
{
    private $rules = [];

    public function __construct(){}

    public function getRules()
    {
        return $this->rules;
    }

    public function addRule($rule)
    {
        $this->rules[$rule->getId()] = $rule;
    }

    public function removeRule($id)
    {
        unset($this->rules[$id]);
    }

    public function getSuitableRules($facts)
    {
      $actions = array();

      foreach($this->rules as $thing){

          if($thing->checkCondition($facts)){
              $actions[] = $thing;
          }
      }

      return $actions;
    }
}
