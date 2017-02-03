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
	<?php
if (isset($_GET['calculate'])) {
	$operation = $_GET['oparation'];
	$numberOne = $_GET['number_one'];
	$numberTwo = $_GET['number_two'];
	echo "Reault: ";
	if ($operation == "sum") {
		echo " <input type='text' disabled='disabled' readonly='readonly' value=' " . ($numberOne + $numberTwo) . "'/>";
	} else if ($oparation == "subtract") {
		echo " <input type='text' disabled='disabled' readonly='readonly' value='" . ($numberOne - $numberTwo) . "'/>";
	} else {
		echo " <input type='text' disabled='disabled' readonly='readonly' value='Invalid operation supplied'/>";
	}
}
?>
	</div>
	<div>
		<input type="submit" name="calculate" value="Calculate!"/>
	</div>
</form>

