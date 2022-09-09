<?php
require_once __DIR__ . '../../utils/functions.php';

function ViewCalculateSaleFee(Car $car, float $rate){
	$carSaleAmount		= $car->SaleAmount();
	$givenSaleFeeAmount = calculateSaleFee($rate, $car->SaleAmount());	
	return $givenSaleFeeAmount;
}
