<?php 
require"modul.php";
@system("rm -rf user");
@system("git clone https://github.com/shadowbot82/user.git");
   error_reporting(0);
   require __DIR__."/user/setting.php";
echo$baca_plus.$t;
sleep(3);
echo$ijo.$msg_baca.$t;
sleep(1);
echo$putih."[?] login ";
loading();
invite($header);
echo"\n";
echo $putih."[".$ijo."•".$putih."]".$turkis." Info Akun : ".$t;
$login=json_decode(login($header),true);
$user=$login["UserId"];
$coin=$login["Coin"];
$money=$login["Money"];
$invite=$login["InviteCode"];
$teman=$login["InviteeCount"];
if($user!=null){

	echo$t.$putih."[>] user :$ijo ".str_replace("+"," ",$user_name).$t;
	
	echo$putih."[-] coin :$ijo ".$coin.$t;
	echo$putih."[>] money : Rp.$ijo".$money.$t;
	echo$putih."[-] code invite :$ijo ".$invite.$t;
	echo$putih."[>] total teman : $ijo".$teman.$t;
	    }
else{
	echo$t.$red."[x] terjadi kesalahan ".$t;
@system("rm -rf user");
exit;
   }
sleep(5);
if($stat_baca){
	echo$t.$turkis."[•] cek absen ";




echo"\n";
  $absen=json_decode(absen($header),true);
  $coin=$absen["Coin"];
  $bal=$absen["Money"];
  $efek=$absen["Effect"];
  $gold=$efek["Coin"];
  $money=$efek["Money"];
  $error=$efek["Error"];
 if($error==0){
	 echo$putih."[•] Status :$ijo Berhasil$putih || coin +$ijo ".$gold."$putih || coin sekarang : $ijo".$coin.$t;
	 }
elseif($error==10001){
	echo$kuning."[•] sudah absen hari ini$putih || coin:$ijo ".$coin.$t;
	}
else{echo$red."[•] terjadi kesalahan".$t;
    }
sleep(1);
echo$t.$turkis."[•] reward harian ".$t;
sleep(1);
$day=json_decode(day_reward($header),true);
$coin=$day["Coin"];
$bal=$day["Money"];
$efek=$day["Effect"];
$gold=$efek["Coin"];
$money=$efek["Money"];
$error=$efek["Error"];
if($error==0){
	echo$putih."[•] Status :$ijo Berhasil$putih || coin +$ijo".$gold."$putih || coin:$ijo ".$coin.$t;
	}
elseif($error==10004){
	echo$kuning."[•] sudah terclaim$putih || coin$ijo ".$coin.$t;
	}
elseif($error==10001){
	echo$kuning."[•] sudah terclaim$putih || coin:$ijo ".$coin."$putih || money: Rp.$ijo".$bal.$t;
	}
else{echo"[•] ".$error." terjadi kesalahan".$t;
}
sleep(3);
	
echo $ijo."delay 10 detik...".$t;
echo$t.$putih."[•]$turkis membaca berita ".$t;
sleep(1);



echo $kuning."Jalanin Botnya Sambil Ngopi Aja Cuk".$t;
echo $kuning."Biar gak bete sama bosen 😪".$t.$t;
sleep(1);
while(true){
	$news=json_decode(news($header),true);
	$coin=$news["Coin"];
	$bal=$news["Money"];
	$efek=$news["Effect"];
	$gold=$efek["Coin"];
	$money=$efek["Money"];
	$error=$efek["Error"];
if($error==0){
	echo$putih."[•] Status :$ijo Berhasil$putih || coin +$ijo ".$gold."$putih || coin sekarang : $ijo".$coin.$t;
	sleep(10);
	}
elseif($error==10004){
	echo$kuning."[•] sudah terclaim$putih || coin$ijo ".$coin.$t;
	}
elseif($error==10001){
	echo$kuning."[x] limit harian$putih || coin:$ijo ".$coin."$putih || money: Rp.$ijo".$bal.$t;
break;
}
else{
	echo$red."[×] ".$error." terjadi kesalahan".$t;
	@system("rm -rf user");
	exit;
	}
sleep(1);
}
sleep(3);
}
else{
	echo$t.$kuning."[×] oops fitur terkunci".$t;
	@system("rm -rf user");
}
@system("rm -rf user");
echo$msg_baca.$t;
?>




























