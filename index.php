<?php
require_once __DIR__ . '/entities/car.php';
require_once __DIR__ . '/views/ViewCalculateSaleFee.php';

if (isset($_GET['calculate_sale_fee']))
{
	$carSaleAmount = 32412.50;
	$car = new Car(1, 'BMW', $carSaleAmount);
	$rate = 0.05;
	echo "sale amount: ".ViewCalculateSaleFee($car, $rate) . "<br>";
}

?>
