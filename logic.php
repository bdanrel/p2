<?php

$wordlist = ["aardvark", "cougar", "dingo","elephant","sloth","crocodile","emu","armadillo","tiger","zebra"];
 var_dump($_GET);


 if ( $_SERVER['REQUEST_METHOD'] == 'GET' ) {
    $password="";
	$wordNumber=4; #default value
	
	//first word in password 
	$password = $wordlist[rand(0,count($wordlist)-1)];  
 
	//add additional words as requested in form, words will be separated by '-' 
	for ($i = 1; $i < $wordNumber; $i++) { 
		//$password = $password."-".$wordlist[$rand_word[$i]]; 
		$password = $password."-".$wordlist[rand(0,count($wordlist)-1)]; 
	}
	
	if (isset($_GET['useNumber'])) {
		// checkbox was checked. 
        $password .= rand(0,9);
    }
    if (isset($_GET['useSymbol'])) {
        // checkbox was checked. 
		$password .= "@";
    }
}
 
 
?>