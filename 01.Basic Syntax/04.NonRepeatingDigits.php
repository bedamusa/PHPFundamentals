<?php

$n = 1234;
if ($n <= 101)
{
    echo "no";
}
for ($i = 102; $i <= $n; $i++) {
	echo $i;
	if($i > 986 || $i == $n)
	{
		break;
	}
	echo ", ";
    
}

?>