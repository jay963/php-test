<?php

function sum($a)
{
	$b = explode(',',$a);
	if(count(array_filter ($b)) > 2){
		echo 'Please enter between zero to two numbers';
	}else{
    	$sum = array_sum($b);
    	echo $sum;
    }
}

function multiply($a)
{
	$b = explode(',',$a);
	if(count(array_filter ($b)) > 2){
		echo 'Please enter between zero to two numbers';
	}else{
    	$multiply = array_product($b);
    	echo $multiply;
	}
}

array_shift($argv);
$funcName = array_shift($argv); 
call_user_func_array($funcName, $argv);
