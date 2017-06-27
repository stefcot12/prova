<?php

$var = array();

for ($i=0;$i<= 100; $i++){

	$var[]="id: " .$i;

}

$var=json_encode($var);
print_r($var);


?> 