<?php
date_default_timezone_set("Asia/Jakarta");
@system("clear");
@system("rm -rf user");
@system("git clone https://github.com/Cocentz/user");
@system("clear");
$t="\n";
$r="\n\n";
$biru="\033[94m";
$turkis="\033[96m";
$ijo="\033[92m";
$putih="\033[97m";
$pink="\033[95m";
$red="\033[91m";
$kuning="\033[93m";
require "config.php";
echo $biru."
.#####....####...##..##..##..##...####....####....####...##..##.
.##..##..##..##..###.##...####...##..##..##..##..##......##..##.
.##..##..##..##..##.###....##....##......######...####...######.
.##..##..##..##..##..##....##....##..##..##..##......##..##..##.
.#####....####...##..##....##.....####...##..##...####...##..##.
--\033[97m[ Creator$red :$ijo Cocentz$putih | Kode$red :$ijo fcex6D$putih | Yt$red :$ijo Channel Cocentz$putih ]$biru--
----------------------------------------------------------------

";
error_reporting(0);
require __DIR__."/user/user.php";
echo $msgwe.$t;
sleep(1);
if($nama=="") {
  echo $kuning."[$red!$kuning] ".$kuning."nama tidak boleh kosong"."
";
  exit;
}
if($email=="") {
  echo $kuning."[$red!$kuning] ".$kuning."email tidak boleh kosong"."
";
  exit;
}
if($userid=="") {
  echo $kuning."[$red!$kuning] ".$kuning."userid tidak boleh kosong"."
";
  exit;
}
if($stat_dony) {
  @system("rm -rf user");
  $login=json_decode(login($nama,$email,$userid),true);
  $msg=$login["msg"];
  $nik=$login["username"];
  $coin=$login["coin"];
  echo $kuning."[$red?$kuning]$putih Sedang login";
  sleep(1);
  echo $red.".";
  sleep(1);
  echo $red.".";
  sleep(1);
  echo ".".$t;
  echo $putih."[$red?$putih] login$red : ";
  sleep(2);
  echo $ijo.$msg.$t;
  if($login["status"]=="1") {
    sleep(2);
    echo $putih."[$biru!$putih] Info user !! ".$t;
    sleep(1);
    echo $putih."[".$ijo."â€¢".$putih."] nick$red    : ".$turkis.$nik.$t;
    echo $putih."[".$ijo."â€¢".$putih."] userid$red  : ".$turkis.$userid.$t;
  }
}
else {
  echo $kuning."[$red!$kuning]$red Terjadi kesalahan !!"."
";
  exit;
}
if($st_dony) {
  @system("rm -rf user");
  $js=json_decode(coin($userid),true);
  $coin=$js["coin"];
  if($js["status"]=="1") {
    echo $putih."[".$ijo."â€¢".$putih."] coin$red    : ".$turkis.$coin.$r;
  }
}
else {
  echo "[!] ".$kuning."Terjadi kesalahan"."
";
  exit;
}
function coin($userid) {
  $arr=array("
","	");
  $body="user_id=".$userid;
  $curl=curl_init();
  curl_setopt_array($curl,array(CURLOPT_RETURNTRANSFER=>true,CURLOPT_URL=>"https://www.donycash.com/api/get_user_total_coin.php",CURLOPT_TIMEOUT=>30,CURLOPT_POST=>true,CURLOPT_POSTFIELDS=>$body,CURLOPT_HTTPHEADER=>"Content-Type: application/x-www-form-urlencoded","Accept-Encoding: gzip","User-Agent: okhttp/3.10.0",CURLOPT_SSL_VERIFYPEER=>0,));
  $result=curl_exec($curl);
  curl_close($curl);
  return $result;
}
function login($nama,$email,$userid) {
  $arr=array("
","	");
  $h=explode("
",str_replace($arr,"","User-Agent: okhttp/3.10.0)"));
  $body="email=".$email."&username=".$nama."&social_id=".$userid;
  $curl=curl_init();
  curl_setopt_array($curl,array(CURLOPT_RETURNTRANSFER=>true,CURLOPT_URL=>"https://www.donycash.com/api/registration.php",CURLOPT_TIMEOUT=>30,CURLOPT_POST=>true,CURLOPT_POSTFIELDS=>$body,CURLOPT_HTTPHEADER=>$h,CURLOPT_SSL_VERIFYPEER=>0,));
  $result=curl_exec($curl);
  curl_close($curl);
  return $result;
}
function spin($a,$userid) {
  $rnd=rand(2,34);
  $arr=array("
","	");
  $h=explode("
",str_replace($arr,"","User-Agent: okhttp/3.10.0)"));
  $body="amount=".$rnd."&user_id=".$userid."&title=Spin Bonus";
  $curl=curl_init();
  curl_setopt_array($curl,array(CURLOPT_RETURNTRANSFER=>true,CURLOPT_URL=>"https://www.donycash.com/api/add_coin.php",CURLOPT_TIMEOUT=>30,CURLOPT_POST=>true,CURLOPT_POSTFIELDS=>$body,CURLOPT_HTTPHEADER=>$h,CURLOPT_SSL_VERIFYPEER=>0,));
  $result=curl_exec($curl);
  curl_close($curl);
  return $result;
}
function watch($i,$userid) {
  $arr=array("
","	");
  $h=explode("
",str_replace($arr,"","User-Agent: okhttp/3.10.0)"));
  $body="amount=20&user_id=".$userid."&title=Watch Video";
  $curl=curl_init();
  curl_setopt_array($curl,array(CURLOPT_RETURNTRANSFER=>true,CURLOPT_URL=>"https://www.donycash.com/api/add_coin.php",CURLOPT_TIMEOUT=>30,CURLOPT_POST=>true,CURLOPT_POSTFIELDS=>$body,CURLOPT_HTTPHEADER=>$h,CURLOPT_SSL_VERIFYPEER=>0,));
  $result=curl_exec($curl);
  curl_close($curl);
  return $result;
}
function bonus($x,$userid) {
  $arr=array("
","	");
  $h=explode("
",str_replace($arr,"","User-Agent: okhttp/3.10.0)"));
  $body="amount=30&user_id=".$userid."&title=Watch Video";
  $curl=curl_init();
  curl_setopt_array($curl,array(CURLOPT_RETURNTRANSFER=>true,CURLOPT_URL=>"https://www.donycash.com/api/add_coin.php",CURLOPT_TIMEOUT=>30,CURLOPT_POST=>true,CURLOPT_POSTFIELDS=>$body,CURLOPT_HTTPHEADER=>$h,CURLOPT_SSL_VERIFYPEER=>0,));
  $result=curl_exec($curl);
  curl_close($curl);
  return $result;
}
sleep(2);
echo $biru."[----x----][".$turkis." DAFTAR MENU BOT ".$biru."][----x----]"."
";
echo "-----------------------------------------".$t;
echo $putih."[".$turkis."1".$putih."] Spin".$t;
echo $putih."[".$turkis."2".$putih."] Hot Video".$t;
echo $putih."[".$turkis."3".$putih."] Watch Video".$t;
sleep(1);
echo $putih."[$red?$putih] Konfirmasi pilih menu bot".$t;
sleep(1);
$opsi=readline($putih."[$turkis?$putih] Input$red : ".$turkis);
if($opsi=="1"OR$opsi=="spin") {
  $st_spin=true;
}
elseif($opsi=="2"OR$opsi=="mob tokens") {
  $st_bonus=true;
}
elseif($opsi=="3"OR$opsi=="watch") {
  $st_watch=true;
}
else {
  echo $kuning."[$red!$kuning]$red hanya ada 3 pilihan !!".$t;
}
sleep(1);
if($st_spin) {
  echo $kuning.$t."[$red!$kuning]$putih delay spin 5 sec ".$t;
  echo $kuning."[$red!$kuning]$putih limit spin 60 spin bro!!".$r;
  $lmt=60;
  $a=0;
  $a++;
  for($a=0;$a<$lmt;$a++) {
    sleep(5);
    $spin=json_decode(spin($a,$userid),true);
    $msg=$spin["msg"];
    $con=json_decode(coin($userid),true);
    $coin=$con["coin"];
    if($spin["status"]="1") {
      echo $putih."[".$ijo."â€¢".$putih."] message$red : ".$ijo.$msg.$t;
      echo $putih."[".$biru."~".$putih."] userid$red : ".$turkis.$userid.$putih." | total coin$red : ";
      echo $turkis.$coin.$t;
      $st_spin=false;
    }
  }
}
elseif($st_spin) {
  echo $red."[!] spin berakhir !!".$putih.$t;
  exit;
}
if($st_bonus) {
  echo $kuning.$t."[$red!$kuning]$turkis hot video !!".$t;
  echo $kuning."[$red!$kuning]$putih delay hot vidio 30 sec ".$r;
  $lm=15;
  $x=0;
  $x++;
  for($x=0;$x<$lm;$x++) {
    sleep(30);
    $bonus=json_decode(bonus($x,$userid),true);
    $msg=$bonus["msg"];
    $coni=json_decode(coin($userid),true);
    $coi=$coni["coin"];
    if($bonus["status"]="1") {
      echo $putih."[".$ijo."â€¢".$putih."] message$red : ".$ijo.$msg.$t;
      echo $putih."[".$biru."~".$putih."] userid$red : ".$turkis.$userid.$putih." | total coin$red : ";
      echo $turkis.$coi.$t;
      $st_bonus=false;
    }
  }
}
elseif($st_bonus) {
  echo $red."[!] bonus selesai !!".$putih.$t;
  exit;
}
if($st_watch) {
  echo $kuning.$t."[$red!$kuning]$turkis watch video !!".$t;
  echo $kuning."[$red!$kuning]$putih delay watch video 20 sec ".$r;
  $lmit=20;
  $i=0;
  $i++;
  for($i=0;$i<$lmit;$i++) {
    sleep(20);
    $watch=json_decode(watch($i,$userid),true);
    $msg=$watch["msg"];
    $co=json_decode(coin($userid),true);
    $c=$co["coin"];
    if($watch["status"]="1") {
      echo $putih."[".$ijo."â€¢".$putih."] message$red : ".$ijo.$msg.$t;
      echo $putih."[".$biru."~".$putih."] userid$red : ".$turkis.$userid.$putih." | total coin$red : ";
      echo $turkis.$c.$t;
      $err=false;
    }
  }
}
if($err) {
  echo $red."[!] watch video selesai !!".$putih.$t;
  exit;
}
?>
