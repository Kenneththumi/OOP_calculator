<?php

class Calculator
{
  /* declare empty result variable as protected */
  protected $result;

  protected $operation;

 /* set the needed operation through dependency injection */
  public function setOperation(OperatorInterface $operation)
  {
  	$this->operation=$operation;

  }

   /* perform calculation using the passed varibles */
  public function calculate()
  {
 
  	foreach (func_get_args()  as $number)
  	{
  		
  		$this->result = $this->operation->run($number, $this->result);
  	}
  }

  /* returns the result set */
  public function getResult()
  {
		  return $this->result;
  }

}