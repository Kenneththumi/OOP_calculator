<?php

class Divide  implements OperatorInterface
{
    /* Dividing method */
	public function run($number, $result)
	{

		return $result /$number;
	}
}