<!DOCTYPE html>
<html>
<head>
    <title>InformationTable</title>

</head>
<body>
<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    .left {
        background-color: orange;
    }
    .right {
        text-align: right;
    }
</style>
<?php
$name = "Gosho";
$phoneNumber = "0882-321-423";
$age = 24;
$address = "Hadji Dimitar";

echo "<table>
        <tr>
        <td class='left'>Name</td>
        <td class='right'>$name</td>
</tr>
        <tr>
        <td class='left'>Phone numner</td>
        <td class='right'>$phoneNumber</td>
</tr>
        <tr>
        <td class='left'>Age</td>
        <td class='right'>$age</td>
</tr>
        <tr>
        <td class='left'>Address</td>
        <td class='right'>$address</td>
</tr>
</table>"
?>
</body>
</html>