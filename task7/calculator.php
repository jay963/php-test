<?php

function add($a)
{
	$b = array_filter(explode(',',$a));
	$greaterthan = array();
	foreach($b as $value) 
	{
	    if($value <= 1000) 
	    {
	        $greaterthan[] = $value;
	    }
	} 
	 
	$sum = array_sum($greaterthan);
    echo $sum;
	 
}
function multiply($a)
{
	$b = array_filter(explode(',',$a));
	$greaterthan = array();
	foreach($b as $value) 
	{
	    if($value <= 1000) 
	    {
	        $greaterthan[] = $value;
	    }
	} 

	$multiply = array_product($greaterthan);
	echo $multiply;
    
}

array_shift($argv);
$funcName = array_shift($argv); 
call_user_func_array($funcName, $argv);
