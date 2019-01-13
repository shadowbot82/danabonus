<?php include_once"vendor/autoload.php";
const STATE_PROCESSING=0;
const STATE_COMPLETED=1;
const STATE_EXPIRED=2;
$command=new\Commando\Command();
$client=new\Guzzle\Http\Client();
$command->option("sign")->aka("s");
$command->option("token")->aka("t");
$command->option("uuid")->aka("u");
$command->option("tk")->aka("tk");
$command->option("offset")->aka("o");
$sign=$command["sign"];
$token=$command["token"];
$uuid=$command["uuid"];
$tk=$command["tk"];
$offset=$command["offset"];
$validate=true;foreach(["sign"=>$sign,"token"=>$token,"uuid"=>$uuid,"tk"=>$tk,"offset"=>$offset]as$field=>$value){
if(is_null($value)){
$validate=false;
echo"Bot Yogo Video ".$field."";
}}if($validate){
echo"Code by Shadow Bot"."";
echo"Mình nhận code dạo web, tool, nhúng, ...."."";
echo"SĐT: 0326622911"."";
echo"FB: fb.com/tien.nguyhiem"."";
echo"Code Invite: 181716975"."";
$offset=(int)$offset;
echo"Bắt đầu chạy từ ID ".$offset."";
for($i=$offset;true;$i++){
$date=new DateTime();
echo"Thời gian: ".$date->format("H:i:s d/m/Y")."";
$state=STATE_PROCESSING;
while($state==STATE_PROCESSING){
   $request=$client->post("https://api.yogopro.com/api/reward/watchVideo",["Accept-Language"=>"en-US","User-Agent"=>"User-Agent: Mozilla/5.0 (Linux; U; Android 7.1.2; en-us; Redmi 5 Plus Build/N2G47H) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30","Content-Type"=>"application/x-www-form-urlencoded","Accept-Encoding"=>"application/gzip"],http_build_query(["OSVersion"=>"25","content_id"=>$i,"isemu"=>"2","lang"=>"en-US","market"=>"googleplay","phoneBrand"=>"xiaomi","pushType"=>"xiaomi","sign"=>$sign,"time"=>microtime(),"tk"=>$tk,"token"=>$token,"uuid"=>$uuid,"version"=>"9","versionName"=>"1.3.6","wifi"=>"1"]));try{$response=$request->send();$rawResponse=$response->getBody(true);$result=json_decode($rawResponse,true);if(isset($result["code"])){switch($result["code"]){case 0:$state=STATE_PROCESSING;$message=".";break;case 4104:$state=STATE_COMPLETED;$message="Đã xem xong video"."
";break;case 4005:$state=STATE_EXPIRED;$message=" Đã đạt giới hạn xem video trong ngày"."
";break;case 1005:$state=STATE_EXPIRED;$message=" Sai Token CMNR"."
";break;default:$state=STATE_COMPLETED;}echo$message."
";}else{echo"Có lỗi xảy ra."."
";die();}}catch(\Exception$exception){$state=STATE_COMPLETED;}}if($state==STATE_EXPIRED){echo"ID cuối ".$i."
";break;}}echo"Xong. Mai vào mà chạy tiếp!";}
?>
