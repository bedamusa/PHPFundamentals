
	<?php
if (isset($_GET['calculate'])) {
	$operation = $_GET['oparation'];
	$numberOne = $_GET['number_one'];
	$numberTwo = $_GET['number_two'];
	$output = "";
	if ($operation == "sum") {
		$output = $numberOne + $numberTwo;
	} else if ($oparation == "subtract") {
		$output = $numberOne - $numberTwo;
	} else {
		$output = 'Invalid operation supplied';
	}
}
include '01.calculator_frontend.php';
?>


