<?php
//read contents of a file to get common words to use for password
$filedata=file_get_contents('wordlist.csv');
$wordlist = str_getcsv($filedata);

//declare empty password to start
$password="";


if ( $_SERVER['REQUEST_METHOD'] == 'GET' ) {
	
	//declare $wordNumber with default value of 4 if null
	$wordNumber = (isset($_GET['wordNumber']) ? $_GET['wordNumber'] : 4);
	#$wordNumber = trim($wordNumber);  //remove spaces
    //set # words to default value 4 if $wordnum is not between 1 and 9 or is not an integer
	if ($wordNumber < 1 or $wordNumber > 9 ) { 
		$wordNumber = 4; 
	}
	elseif (!is_numeric($wordNumber)){ 
		$wordNumber = 4; 
	}
			
	//first word in password 
	$password = $wordlist[rand(0,count($wordlist)-1)];  
 
	//add additional words as requested in form, words will be separated by '-' 
	for ($i = 1; $i < $wordNumber; $i++) { 
		//$password = $password."-".$wordlist[$rand_word[$i]]; 
		$password = $password."-".$wordlist[rand(0,count($wordlist)-1)]; 
	}
	//append an "@" if symbol was requested
    if (isset($_GET['useSymbol'])) {
        // checkbox was checked. 
		$password .= "@";
    }
	//append a random number between 0 and 9 if number was requested
	if (isset($_GET['useNumber'])) {
		// checkbox was checked. 
        $password .= rand(0,9);
    }
	
}
 
 
?>