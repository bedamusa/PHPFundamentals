<form>
    Input String: <input type="text" name="text" size="20">

    <input type="radio"  name="options" value="palindrom" checked> Check Palindrom
    <input type="radio"  name="options" value="reverse"> Reverse String
    <input type="radio"   name="options" value="split"> Split
    <input type="radio"  name="options" value="hash"> Hash String
    <input type="radio"   name="options"  value="shuffle"> Shuffle String
    <input type="submit" value="Show cost" name="submit">
</form>
<?php
if (isset($_GET['submit'])) {
    if ($_GET['text']) {
        $words = array_map('trim', explode(',', $_GET['text']));
        $options = $_GET['options'];
        if ($options == "palindrom") {
            foreach ($words as $result) {
                $word = $result;
            }
            $reverse = strrev($word);
            if ($reverse == $word) {
                echo $word . " Is palindrome";
            } else {
                echo $word . " Is not palindrome";
            }
        } elseif ($options == "reverse") {
            foreach ($words as $result) {
                $word = $result;
            }
            $reverse = strrev($word);
            echo "$reverse";
        } else if ($options == "split") {
            foreach ($words as $result) {
                $word = $result;
            }
            $noSpasesWords = preg_replace("/[ ]/", "",$word);
            echo chunk_split($noSpasesWords, 1, ' ');
        } else if ($options == "hash") {
            foreach ($words as $result) {
                $word = $result;
            }
            echo hash('sha256', $word, false);
        } else {
            foreach ($words as $result) {
                $word = $result;
            }
            $shuffle = str_shuffle($word);
            echo "$shuffle";
        }
    }
} else {

}
?>