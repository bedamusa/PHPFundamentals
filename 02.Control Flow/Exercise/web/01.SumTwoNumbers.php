<form method="get">
	<div>
		Operation:
		<select name="oparation">
			<option value="sum">Sum</option>
			<option value="subtract">Subtract</option>
		</select>
	</div>
	<div>
		Number 1:
		<input type="text" name="number_one"/>
	</div>
	<div>
		Number 2:
		<input type="text" name="number_two"/>
	</div>
	<div>
		<input type="submit" name="calculate" value="Calculate!"/>
	</div>
</form>

<?php
if (isset($_GET['calculate'])) {
	$operation = $_GET['oparation'];
	$numberOne = $_GET['number_one'];
	$numberTwo = $_GET['number_two'];
	if ($operation == "sum") {
		echo " == " . ($numberOne + $numberTwo);
	} else if ($oparation == "subtract") {
		echo " == " . ($numberOne - $numberTwo);
	} else {
		echo " == Invalid operation supplied";
	}
}

?>