<!DOCTYPE html>
<html>
<head>
    <title>Sum Two numbers</title>
</head>
<body>

<form>
    <div>Num one</div>
    <input type="number" step="any" name="namefirstNum"/>
    <div>Num two</div>
    <input type="number" step="any" name="secondNum"/>
    <div><br><input type="submit" value="CHECK SUM"></div><br>
</form>

<?php
if (isset($_GET['namefirstNum']) && isset($_GET['secondNum'])) {

    $firstNumber = $_GET['namefirstNum'];
    $secondNumber = $_GET['secondNum'];
    $sumToNumber= $firstNumber + $secondNumber;
    echo '$firstNumber + $secondNumber' . " = {$firstNumber} + {$secondNumber} = ";
    echo round($sumToNumber, 2);
}


?>

</body>
</html>