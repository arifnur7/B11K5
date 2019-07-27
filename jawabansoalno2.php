<?php
function cekusername($username){
	$string=$username;
			if(preg_match("/^([a-zA-Z])+{5,9}$/i", $string)){
				if(preg_match("/[a-zA-Z0-9]+$/i", $string)){
					echo "Username OK";
				}else{
					echo "Username memuat karakter selain angka dan huruf";
				}
			}else{
				echo "Username memiliki karakter kurang dari <= 5 atau >=9 atau awalan angka atau karakter spesial";
			}
}

function cekpassword($pass){
	$string=$pass;
	if(preg_match("/^[a-zA-Z]{5,9}$/i", $string)){
		echo "pass OK";
	}else{
		echo "Password kurang dari 8 karakter";
	}
}

$username="Xrutaf888";
echo "Username : ".$username."<br/>";
cekusername($username);

$pass="passW0rd";
echo "<br/>Password : ".$pass."<br/>";
cekpassword($pass);
?>