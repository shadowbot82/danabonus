<?php

function spin($uid, $chn, $client, $token, $jumlah, $wait){
    $x = 0; 
    while($x < $jumlah) {
		$body = ("uid=$uid&userRating=null&channelId=$chn&clientId=$client");
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://api.cashmart.id/arowanaintl/goldDraw/draw");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array("Host: api.cashmart.id","Accept: application/json","origin: https://sdmk.cashmart.id","Referer: https://sdmk.cashmart.id/index.html","Connection: keep-alive","User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; Andromax A26C4H Build/MMB29M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/55.0.2883.91 Mobile Safari/537.36 zzappmta_1.0.3
","X-Requested-With: id.danabonus.android","logintoken: $token"));
        $server_output = curl_exec ($ch);
        curl_close ($ch);
		echo $server_output."\n";
        sleep($wait);
        $x++;
        flush();
    }
}
print "AWTO SPIN DANA BONUS\n\n";
echo "UID?\nInput : ";
$uid = trim(fgets(STDIN));
echo "ChannelId?\nInput : ";
$chn = trim(fgets(STDIN));
echo "ClientID?\nInput : ";
$client = trim(fgets(STDIN));
echo "Token?\nInput : ";
$token = trim(fgets(STDIN));
echo "Jumlah Spin\nInput : ";
$jumlah = trim(fgets(STDIN));
echo "Jeda? 0-9999999999 (ex:0)\nInput : ";
$wait = trim(fgets(STDIN));
$execute = spin($uid, $chn, $client, $token, $jumlah, $wait);
print $execute;
print "DONE\n";
?>

