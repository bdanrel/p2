<?php

$wordlist = ["aardvark", "cougar", "dingo","elephant","sloth","crocodile","emu","armadillo","tiger","zebra"];
 var_dump($_GET);


 if ( $_SERVER['REQUEST_METHOD'] == 'GET' ) {
    $password="";
	$wordNumber=4; #default value
	for($i=0; $i<$wordNumber; $i++){
		$password .= $wordlist[rand(0,9)] . "-";
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