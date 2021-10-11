<?php

/**
* Inference Engine For Forward Chaining
*
* @package    JD_Dissatation
* @author     James Dordoy
* @created date   28/02/2017
* @updated last   02/12/2019
*/

namespace JamesDordoy\PHPForwardChaining;

use JamesDordoy\PHPForwardChaining\Rule;
use JamesDordoy\PHPForwardChaining\RuleManager;
use JamesDordoy\PHPForwardChaining\WorkingMemory;
use JamesDordoy\PHPForwardChaining\ResultFoundGoalStatement;
use JamesDordoy\PHPForwardChaining\Exceptions\NoMatchingRuleException;
use JamesDordoy\PHPForwardChaining\Interfaces\ConflictResolutionStrategyInterface;

class InferenceEngine{

	//@Working Memory Object
	private $workingMemory;

	//@Conflict Resolution Strategy Interface
	private $conflictResolutionStrategy;

	//@Goal Statement Interface
	private $goalStatement;

	//@Array
	private $ruleManager;

    /**
     * Constructor
     *
     * @return void
     */
	public function __construct(ConflictResolutionStrategyInterface $strategy){

		//Working Memory Object
		$this->workingMemory = new WorkingMemory();

		//First Rule Found Conflict Resolution Stratergy Object
		$this->conflictResolutionStrategy = $strategy;

		//Result Found Goal Statement Object
		$this->goalStatement = new ResultFoundGoalStatement();

		$this->ruleManager = new RuleManager();
	}

	/**
    * Start Inference Engine
    * @return Rule
    */
	public function run()
	{
		while (! $this->goalStatement->getGoalReached()) {

			$acceptedRules = $this->ruleManager->getSuitableRules($this->workingMemory->getAllFacts());

			if(!empty($acceptedRules)){

				//get the most appropriate rule using conflict resolution strategy
				$actionRule = $this->conflictResolutionStrategy->selectPreferedRule($acceptedRules);

				$newFacts = json_decode($actionRule->getAction(), 1);

				foreach ($newFacts as $newFact) {
					$this->workingMemory->setFact(key($newFact), $newFact[key($newFact)]);
				}

				$this->ruleManager->removeRule($actionRule->getId());

				//If this rules new facts can appease the Goal Statement
				if ($this->goalStatement->checkGoalReached($this->workingMemory->getAllFacts())) {

					//Break Loop
					$this->goalStatement->setGoalReached(true);
				}

			} else {
				//Throw Exception
				throw new NoMatchingRuleException;
			}
		}

		return $actionRule;
	}

	public function addRule($ruleName, Rule $rule)
	{
		$this->ruleManager->addRule($rule);
	}

	public function getWorkingMemory()
	{
		return $this->workingMemory;
	}

	public function getRulesManager()
	{
		return $this->ruleManager;
	}

	public function getResolutionStrategy()
	{
		return (string) $this->conflictResolutionStrategy;
	}
}
