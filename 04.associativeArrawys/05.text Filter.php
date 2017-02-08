<!DOCTYPE html>
<html>
<head>
    <title>Text filter</title>
</head>
<body>

<form method="get">
    <input type="text" name="text"/> <br>
    <input type="text" name="banwords"/><br>
    <input type="submit" value="Submit">
</form>
<?php
if (isset($_GET['text']) && isset($_GET['banwords']) )  {
    $text = $_GET['text'];
    $badWords = explode(", ", $_GET['banwords']);
    //$text = trim(fgets(STDIN));
    //$badWords = explode(", ", trim(fgets(STDIN)));
    foreach ($badWords as $badBad) {
        $replaseBad = '';
        for ($i =0; $i < strlen($badBad); $i++) {
            $replaseBad .= '*';
        }
       $text = str_replace($badBad, $replaseBad, $text);
    }
    echo $text;
}

