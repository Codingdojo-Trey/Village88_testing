<?php

$string = "john";
	
function split_string($string)
{	
	$stop = FALSE;
	$new_string = array();
	$count = 0;

	do{
		$letter = substr($string, $count, 1);
		
		if($letter != '')
			$new_string[] = $letter;
		else
			$stop = TRUE;
			
		$count++;
		
	} while($stop !== TRUE);
	
	return $new_string;
}