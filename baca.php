<?php 
require"modul.php";
@system("rm -rf user");
@system("git clone https://github.com/hidensystem/user");
@system("clear");
error_reporting(0);
require __DIR__."/user/setting.php";
echo$baca_plus.$t;
sleep(3);
echo$ijo.$msg_baca.$t;
sleep(1);
echo$putih."[?] login ";
loading();
invite($header);
$login=json_decode(login($header),true);
$user=$login["UserId"];
$coin=$login["Coin"];
$money=$login["Money"];
$invite=$login["InviteCode"];
$teman=$login["InviteeCount"];
if($user!=null){
  echo$t.$turkis."[==]>]$putih welcome$ijo ".str_replace("+"," ",$user_name).$t;
sleep(1);
echo$putih."[•] coin:$ijo ".$coin."$putih || money: Rp.$ijo".$money.$t;
echo$putih."[•] code invite:$ijo ".$invite."$putih || total teman: $turkis".$teman.$t;
}
else{
echo$t.$red."[×] terjadi kesalahan -_- ".$t;
@system("rm -rf user");
exit;
}
sleep(5);
if($stat_baca){
echo$t.$turkis."[*] Cek Absen".$t;
sleep(3);
$absen=json_decode(absen($header),true);
$coin=$absen["Coin"];
$bal=$absen["Money"];
$efek=$absen["Effect"];
$gold=$efek["Coin"];
$money=$efek["Money"];
$error=$efek["Error"];
if($error==0){
echo$ijo."[√] Berhasil$putih || coin +$ijo".$gold."$putih || coin: $ijo".$coin.$t;
}
elseif($error==10001){
echo$kuning."[-] Hari Ini Udah Absen$putih || coin:$ijo ".$coin.$t;
}
else{
echo$red."[×] terjadi kesalahan -_".$t;
}
sleep(1);
echo$t.$turkis."[*] Rewardd Harian ".$t;
sleep(1);
$day=json_decode(day_reward($header),true);
$coin=$day["Coin"];
$bal=$day["Money"];
$efek=$day["Effect"];
$gold=$efek["Coin"];
$money=$efek["Money"];
$error=$efek["Error"];
if($error==0){
echo$ijo."[√] Berhasil$putih || coin +$ijo".$gold."$putih || coin:$ijo ".$coin.$t;
}
elseif($error==10004){
echo$kuning."[×] sudah terclaim$putih || coin$ijo ".$coin.$t;
}
elseif($error==10001){
echo$kuning."[×] sudah terclaim$putih || coin:$ijo ".$coin."$putih || money: Rp.$ijo".$bal.$t;
}
else{
echo"[-] ".$error." terjadi kesalahan".$t;
}
sleep(3);
echo $ijo."delay 10 detik.... ".$t;
sleep(1);
echo$t.$turkis."[•] Baca Berita Dapet Duit ".$t;
sleep(3);
while(true){
$news=json_decode(news($header),true);
$coin=$news["Coin"];
$bal=$news["Money"];
$efek=$news["Effect"];
$gold=$efek["Coin"];
$money=$efek["Money"];
$error=$efek["Error"];
if($error==0){
echo$ijo."[√] Berhasil$putih || coin +$ijo".$gold."$putih || coin: $ijo".$coin.$t;
sleep(10);
}
elseif($error==10004){
echo$kuning."[×] sudah terclaim$putih || coin$ijo ".$coin.$t;
}
elseif($error==10001){
echo$kuning."[•] limit harian$putih || coin:$ijo ".$coin."$putih || money: Rp.$ijo".$bal.$t;
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
echo$t.$kuning."[•] oopse fitur terkunci gan".$t;
@system("rm -rf user");
}
@system("rm -rf user");
echo$msg_baca.$t;
?>






















