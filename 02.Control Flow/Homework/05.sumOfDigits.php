<form method="get">
    Imput string:
    <input type="text" name="textInput">
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_GET['submit']) && isset($_GET['textInput'])) {
    $resuilt = array_map('trim', explode(",", $_GET['textInput']));
    echo "<table border='1px solid'>";
    foreach ($resuilt as  $value) {
        if ($value != 0) {
            $arraySum = 0;
            for ($i = 0; $i < strlen($value); $i++) {
                $arraySum += intval($value[$i]);

            }

        echo "<tr><td>{$value}</td><td>{$arraySum}</td></tr>";
        }else {
            echo "<tr><td>{$value}</td><td>I cannot sum that</td></tr>";
        }

    }
    echo "</table>";
}
?>