<?php
		echo "\033[32;1m[*] load access token \n";
if(!file_exists("token.txt")){

		echo "\033[31;1m[!] Failed Load Access Token \n";
		echo "\033[31;1m[!] Please Run token.php \n";

}else{

		$myfile = fopen("token.txt", "r");
		$token= fread($myfile,filesize("token.txt"));
		echo "\033[32;1m[*] Success load access token \n";
}
		echo "\033[32;1m[*] Your Token : $token \n";
		
	echo "Start cracking \n";
     for ($x = 1; $x <= 1000; $x++) {
         echo "Trying $x  \n";
         echo "Getting Information \n" ;
         sleep(3);
         echo "Try Crack \n";
         sleep(4);
         echo "Reload \n";
         sleep(5);
         echo "Try Back \n";
         sleep(3);
         echo "Sleep or Interval \n";
         sleep(2);
         echo "Wait ... \n";
         sleep(23);
         echo "\n\n\n";
     }