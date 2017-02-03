<?php

?>
	<table border="1px">
        <tr>
            <td>Number</td>
            <td>Sqare</td>
        </tr>

        <?php
        $totalSum = 0;
        for ($j = 0; $j <= 100; $j= $j +2) {
            $squareNumbers = round(sqrt($j), 2);
            $totalSum += $squareNumbers;
            echo "<tr>
                   <td>{$j}</td>
                   <td>{$squareNumbers}</td>
                   <tr>";
        }

        echo "<tr>
            <td>Total: </td>
            <td>{$totalSum}</td>
        </tr>";
        ?>
    </table>