<?php

function add($a)
{
	$b = explode(',',str_replace("/n",',',$a));
    $sum = array_sum($b);
    echo $sum;
}
function multiply($a)
{
	$b = explode(',',str_replace("/n",',',$a));
    $multiply = array_product($b);
    echo $multiply;
}

array_shift($argv);
$funcName = array_shift($argv); 
call_user_func_array($funcName, $argv);
