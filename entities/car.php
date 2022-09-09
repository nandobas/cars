<?php

class Car
{
	private int 	$ID;
	private string	$name;
	private float	$saleAmount;
	
	function __construct(int $ID, string $name, float $saleAmount){
		$this->ID = $ID;		
		$this->name = $name;
		$this->saleAmount = $saleAmount;
	}
	
	public function Name():string
	{
		return $this->name;
	}
	
	public function SaleAmount():float
	{
		return $this->saleAmount;
	}
	
	
}
