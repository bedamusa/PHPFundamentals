<form method="post">
    Imput string:
    <input type="text" name="textInput">
    <input type="submit" name="submit" value="Submit">
</form>

<?php
$message = array();

if (isset($_POST['submit']) && isset($_POST['textInput']) && !empty($_POST['textInput'])) {
    $hos = array_map("trim",explode(",",$_POST['textInput']));
    foreach($hos as $array)	{
        if($array == ''){
            $message[] ='';
        }
        else{
            $nas = str_split($array);
            $results=0;
            foreach($nas as $sums){
                if(!is_numeric($sums)){
                    $results = 'I cannot sum that';
                }
                else{
                    $results +=intval($sums);
                }
            }
            $message[] = "<table border='1'><tr><td>$array</td><td>$results</td></tr></table>";
        }
    }
}
foreach($message as $render){
    echo $render;
}
?>