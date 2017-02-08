<!DOCTYPE html>
<html>
<head>
    <title>World Mapper</title>
</head>
<body>

<form method="get">
    <input type="text" name="input"/>
    <br><input type="submit" value="Count words">
</form>
<?php
if (isset($_GET['input']) && !empty(trim($_GET["input"]))) {
    $words = array_count_values(str_word_count(strtolower($_GET['input']), 1));
    echo "<table border='2'>";
    foreach ($words as $key => $value) {
        echo "<tr><td>{$key}</td>";
        echo "<td>{$value}</td></tr>";
    }
    echo "</table>";

}

?>

