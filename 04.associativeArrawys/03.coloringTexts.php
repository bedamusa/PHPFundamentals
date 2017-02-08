<!DOCTYPE html>
<html>
<head>
    <title>Color text</title>
</head>
<body>

<form method="get">
    <input type="text" name="input"/>
    <br><input type="submit" value="Color text">
</form>
<?php
if (isset($_GET['input']) && !empty(trim($_GET["input"]))) {
    $words = array_map('trim', explode(',', $_GET['input']));
    foreach ($words as $result) {
        $word = $result;
    }
    $noSpasesWords = preg_replace("/[ ]/", "",$word);
    chunk_split($noSpasesWords, 1, ' ');
    $noSpasesArray = str_split($noSpasesWords);
    foreach ($noSpasesArray as $value) {
        if (ord($value) % 2 == 0) {
            echo "<font color='red'>$value </font>";
        } else {
            echo "<font color='blue'>$value </font>";
        }
    }
}

?>