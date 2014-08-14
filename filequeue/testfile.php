<?php

/**
 * use "echo textcontent >> myfile.txt" for test
 *
 * 
**/


$fp = fopen("myfile.txt", "r");

while (1) {
	
	$fstat = fstat($fp);
	$fsize = $fstat['size'];
	$ftell = ftell($fp);
	
	if ( $ftell == $fsize ) {
		sleep(2);		
		echo 'tell ' . $ftell . PHP_EOL;
		
	} else {
		$current_line = fgets($fp);
		
		var_dump($current_line);
	}    
}
