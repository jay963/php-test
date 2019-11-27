<?php

function add($a)
{
	$b = array_filter(explode(',',str_replace("\\",'',$a)));
	$negative = array();
	foreach($b as $value) 
	{
	    if($value < 0) 
	    {
	        $negative[] = $value;
	    }
	} 
	if(min($b) < 0){
	  	echo "Negative numbers (".implode(',',$negative).") not allowed";  
	}else{
	    $sum = array_sum($b);
    	echo $sum;
	}
}
function multiply($a)
{
	$b = array_filter(explode(',',str_replace("\\",'',$a)));
	$negative = array();
	foreach($b as $value) 
	{
	    if($value < 0) 
	    {
	        $negative[] = $value;
	    }
	} 
    if(min($b) < 0){
	  	echo "Negative numbers (".implode(',',$negative).") not allowed";   
	}else{
    	$multiply = array_product($b);
    	echo $multiply;
    }
}

array_shift($argv);
$funcName = array_shift($argv); 
call_user_func_array($funcName, $argv);
