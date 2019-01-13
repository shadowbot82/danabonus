<?php date_default_timezone_set("Asia/Jakarta");@system("clear");$t="
";$r="

";$biru="[1;34m";$turkis="[1;36m";$ijo="[92m";$putih="[1;37m";$pink="[1;35m";$red="[1;31m";$kuning="[1;33m";require"config.php";$header="X-User-Id: $uid
X-Raw-User-Id: $raw_uid
X-User-Name: $user_name
X-Invite-Code: $invite_code
X-TimeZone: WIB
X-Net-Type: WiFi
X-Resolution: 1080*1920
X-Own-Mac: $own_mac
X-Installer-App: com.android.vending
X-App-Name: Baca+Plus
X-Os-Api: 24
X-Location: 0.0%2C0.0
X-Operator-Desc: TELKOMSEL+%2851010%29
X-Update-Version-code: 0
X-Google-AD-ID: 9de19880-a117-4531-88f3-21e021dcf955
X-APP-VERSION: 30308
X-Channel: GooglePlay
X-Android-Id: $android_id
X-Device-Type: $device_type
X-Google-AD-Status: false
X-Init-Channel: GooglePlay
X-Dpi: 480
X-Device-Platform: android
X-Web-User-Agent: Mozilla%2F5.0+%28Linux%3B+Android+7.0%3B+Mi-4c+Build%2FNRD90M%3B+wv%29+AppleWebKit%2F537.36+%28KHTML%2C+like+Gecko%29+Version%2F4.0+Chrome%2F59.0.3071.125+Mobile+Safari%2F537.36
X-Os-Version: 7.0
X-App-Package-Id: com.jakarta.baca.lite
X-Requested-With: com.jakarta.baca.lite";$ua="User-Agent: Mozilla/5.0 (Linux; Android 7.0; Mi-4c Build/NRD90M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/59.0.3071.125 Mobile Safari/537.36";$id=[2,4,10005,20001,20004,10001,10002,10006,];function absen($header){$head=array();$head[]=$header;$curl=curl_init();curl_setopt_array($curl,array(CURLOPT_RETURNTRANSFER=>true,CURLOPT_URL=>"http://baca.co.id/api/v1/action/reward/1?newsId=0",CURLOPT_TIMEOUT=>30,CURLOPT_POST=>true,CURLOPT_POSTFIELDS=>"",CURLOPT_HTTPHEADER=>$head,CURLOPT_SSL_VERIFYPEER=>true,));$result=curl_exec($curl);curl_close($curl);return$result;}function news($header){$head=array();$head[]=$header;$curl=curl_init();curl_setopt_array($curl,array(CURLOPT_RETURNTRANSFER=>true,CURLOPT_URL=>"http://baca.co.id/api/v1/action/reward/3?newsId=".rand(10000000,99999999),CURLOPT_TIMEOUT=>30,CURLOPT_POST=>true,CURLOPT_POSTFIELDS=>"",CURLOPT_HTTPHEADER=>$head,CURLOPT_SSL_VERIFYPEER=>true,));$result=curl_exec($curl);curl_close($curl);return$result;}function login($header){$head=array();$head[]=$header;$curl=curl_init();curl_setopt_array($curl,array(CURLOPT_RETURNTRANSFER=>true,CURLOPT_URL=>"http://baca.co.id/api/v1/action/user/status",CURLOPT_TIMEOUT=>30,CURLOPT_HTTPHEADER=>$head,CURLOPT_SSL_VERIFYPEER=>true,));$result=curl_exec($curl);curl_close($curl);return$result;}function day_reward($header){$head=array();$head[]=$header;$curl=curl_init();curl_setopt_array($curl,array(CURLOPT_RETURNTRANSFER=>true,CURLOPT_URL=>"http://baca.co.id/api/v1/action/reward/2?newsId=0",CURLOPT_TIMEOUT=>30,CURLOPT_POST=>true,CURLOPT_POSTFIELDS=>"",CURLOPT_HTTPHEADER=>$head,CURLOPT_SSL_VERIFYPEER=>true,));$result=curl_exec($curl);curl_close($curl);return$result;}function loading(){for($i=0;$i<5;$i++){echo".";sleep(1);}}function invite($header){$head=array();$head[]=$header;$curl=curl_init();curl_setopt_array($curl,array(CURLOPT_RETURNTRANSFER=>true,CURLOPT_URL=>"http://baca.co.id/api/v1/action/code/F9NAmmRD7x",CURLOPT_TIMEOUT=>30,CURLOPT_POST=>true,CURLOPT_POSTFIELDS=>"",CURLOPT_HTTPHEADER=>$head,CURLOPT_SSL_VERIFYPEER=>true,));$result=curl_exec($curl);curl_close($curl);$js=json_decode($result,true);if($js["Effect"]["Error"]==0){echo".";}else{echo",";}}
?>
