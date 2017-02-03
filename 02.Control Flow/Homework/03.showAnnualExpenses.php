<form method="get">
    <input type="text" name="textInput">
    <input type="submit" name="submit" value="Show Costs">
</form>

<?php
if (isset($_GET['submit']) && isset($_GET['textInput'])) {
    $resuilt = $_GET['textInput'];
    $curYear = date('Y');
    $countYear = $curYear -1;
    $totalNumber = 0;

    echo "<table border='1px solid'>
            <tr>
            <td>Year</td>
            <td>January</td>
            <td>February</td>
            <td>March</td>
            <td>April</td>
            <td>May</td>
            <td>June</td>
            <td>July</td>
            <td>August</td>
            <td>September</td>
            <td>October</td>
            <td>November</td>
            <td>December</td>
            <td>Total:</td>
            </tr>";
    for ($i = 1; $i <= $resuilt; $i++){
        $randomNumebers = rand(0, 999);
        echo "<tr><td>{$countYear}</td> ";
            for ($j = 0 ; $j < 12 ; $j++) {
                echo "<td>{$randomNumebers}</td>";
                $totalNumber += $randomNumebers;
            }
        echo "<td>{$totalNumber}</td></tr>";
        $countYear -= 1;
    }
    echo "</table>";
}
?>