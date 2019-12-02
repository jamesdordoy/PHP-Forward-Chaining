<?php

/**
* A MySQL Data Access Object for storing the rules in a table
*
* @package    JD_Dissatation
* @author     James Dordoy
* @created date   28/02/2017
* @updated last   02/12/2019
**/

namespace JamesDordoy\PHPForwardChaining;

use JamesDordoy\PHPForwardChaining\Interfaces\RuleDAOInterface;

class MySQLRuleDAO implements RuleDAOInterface
{
    public function findAll($ruleSet, $activeOnly)
    {
        //TODO:
	}
}
