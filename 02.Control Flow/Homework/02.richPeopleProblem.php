<form method="get">
    <input type="text" name="textInput">
    <input type="submit" name="submit" value="Show Result">
</form>

<?php
if (isset($_GET['submit']) && isset($_GET['textInput'])) {
    $resuilt = explode(",", $_GET['textInput']);
    $colorArray = ["green", "black", "white", "red", "welloy"];
    $counts = count($resuilt);
    echo "<table border='1px solid'><tr><td>Car</td><td>Color</td><td>Count</td></tr>";
            for ($i = 0; $i < $counts; $i++){
                $colorRand = array_rand($colorArray, 1);
                $nameRand = $resuilt[$i];
                $countRand = rand(1,5);
                echo "<tr><td>{$nameRand}</td><td>{$colorArray[$colorRand]}</td><td>{$countRand}</td></tr>";
            }
    echo "</table>";
}
?>