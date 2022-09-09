<?php
function numberFormatBR(float $amount):string{
	return 'R$ ' . number_format($amount, 2, ',', '.');
}


function calculateSaleFee(float $rate, $amount):float
{
	$amount =  ($rate * $amount) * 100;
	$return = ceil($amount)/100;
	return $return; 
}









	
?>

