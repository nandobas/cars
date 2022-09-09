<?php
require_once __DIR__ . '../../entities/car.php';
require_once __DIR__ . '/functions.php';

function Test_WhenCalculateSaleFee_ExpectedCorretSaleAmount(){
	// Arrange
	$carSaleAmount		= 75630.52;
	$rate 			=     0.05;
	$expectSaleFeeAmount	=  3781.53;
	$car = new Car(1, 'BMW', $carSaleAmount);

	// Act
	$givenSaleFeeAmount = calculateSaleFee($rate, $car->SaleAmount());

	// Assert
	if ($givenSaleFeeAmount != $expectSaleFeeAmount) {
		die(printf("expected value %f is different given value %f", $expectSaleFeeAmount, $givenSaleFeeAmount));
	}

	echo "test passed! <br>";
}

Test_WhenCalculateSaleFee_ExpectedCorretSaleAmount();









	
?>

