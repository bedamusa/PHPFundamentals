<?php

echo '<pre>';
echo gettype("hello");
echo '</pre>';
echo '<pre>';
var_dump(15);
echo '</pre>';
echo '<pre>';
var_dump(1.234);
echo '</pre>';
echo '<pre>';
echo gettype(array(1,2,3));
echo '</pre>';
echo '<pre>';
echo gettype((object)[2,34]);
echo '</pre>';

?>