<?php

//color
$hijau = "\33[0;32m";
$hijau1 = "\33[32;1m";
$hijau2 = "\e[1;32m";
$biru = "\33[0;36m";
$biru1 = "\33[36;1m";
$biru2 = "\e[1;34m";
$merah = "\33[31;1m";
$merah2 = "\e[1;31m";
$putih2 = "\33[37;1m";
$putih1 = "\e[1;37m";
$hitam = "\33[30;1m";
$kuning = "\33[33;1m";
$kuning1 = "\33[1;33m";
$kuning2 = "\e[1;33m";
$cyan = "\e[0;36m";
$cyan1 = "\e[1;36m";
$ungu = "\e[0;35m";
$ungu2 = "\e[1;35m";
$abu =	"\e[0;33m";
$abu1 = "\e[0;37m";
$abu2 = "\e[1;30m";
include('cfg.php');
system('clear');
sleep(2);
function Get($url, $ua){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_ENCODING, "");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$result = curl_exec($ch);
curl_close($ch);
return $result; 
}

function Post($url, $ua, $data){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
curl_setopt($ch, CURLOPT_COOKIEJAR, "./cookie/cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "./cookie/cookie.txt");
$result = curl_exec($ch);
curl_close($ch);
return $result; 
}

function strip(){
$merah2 = "\e[1;31m";
echo$merah2." ✦================================================✦ \n";
}


echo$merah2."â•”â•¦â•—".$putih2."â”¬ â”¬".$merah2."â•”â•—â•”â•¦â•—â•”â•â•—â•”â•â•—".$putih2."â”Œâ”¬â”â”Œâ”€â”\n";
echo$merah2."â•‘â•‘â•‘".$putih2."â””â”¬â”˜".$merah2."â• â•©â•—â•‘ â•‘  â• â•â•£ ".$putih2."â”‚â”‚â””â”€â”\n";
echo$merah2."â•© â•© ".$putih2."â”´ ".$merah2."â•šâ•â•â•© â•šâ•â•â•© â•©".$putih2."â”€â”´â”˜â””â”€â”˜\n";
strip();

echo$Watch = "
          
$ungu              𝘚𐊢ᏒƖⲢ𝚃 𝗕Ⲩ @𝚃𝘚Ս𝑵Ｄ𝞔Ꮢ𝞔~
                 
$hijau  ██╗    ██╗ █████╗  ██████╗████████╗██╗  ██╗
$hijau  ██║    ██║██╔══██╗██╔════╝╚══██╔══╝██║  ██║
$hijau  ██║ █╗ ██║███████║██║        ██║   ███████║
$hijau  ██║███╗██║██╔══██║██║        ██║   ██╔══██║
$hijau  ╚███╔███╔╝██║  ██║╚██████╗   ██║   ██║  ██║
$hijau   ╚══╝╚══╝ ╚═╝  ╚═╝ ╚═════╝   ╚═╝   ╚═╝  ╚═╝
                                           
$kuning  ██╗   ██╗██╗██████╗ ██╗ ██████╗            
$kuning  ██║   ██║██║██╔══██╗██║██╔═══██╗           
$kuning  ██║   ██║██║██║  ██║██║██║   ██║           
$kuning  ╚██╗ ██╔╝██║██║  ██║██║██║   ██║           
$kuning   ╚████╔╝ ██║██████╔╝██║╚██████╔╝           
$kuning    ╚═══╝  ╚═╝╚═════╝ ╚═╝ ╚═════╝"."\n";            

strip();

$url = "https://payup.video/tasks/video/";
$ua = ["user-agent: ".$useragent,
"cookie: ".$cookie, " accept: ".$accept];
$cfg = Get($url, $ua);

$one = explode('<span class="balance-numeric">',$cfg);
$two = explode('</span></a>',$one[1]);
$b = "$two[0]";

$one = explode('<rect ',$cfg);
$two = explode('/>',$one[2]);
$info = "$two[0]";

$one = explode('<rect x=',$cfg);
$two = explode('y="0" width="24" height="24"/>',$one[1]);
$x = "$two[0]";

$one = explode('<rect x="0" y=',$cfg);
$two = explode(' width="24" height="24"/>',$one[1]);
$y = "$two[0]";

echo$biru1."        𝑰𝑵𝑭𝑶   : ".$cyan1.$info."\n";
echo$biru1."        𝐁𝐀𝐋𝐀𝐍𝐂𝐄: ".$cyan1.$b." 𝑼𝑺𝑫\n";
strip();

//echo$putih1." ɪɴғᴏ ʙʏᴘᴀss x: ".$putih1.$x."\n";
//echo$putih1." ɪɴғᴏ ʙʏᴘᴀss ʏ: ".$putih1.$y."\n";
//strip();
while(true){
                                $url = "https://payup.video/tasks/control/get.php";
                                $ua = ["user-agent: ".$useragent,"cookie: ".$cookie,"x-requested-with: ".$with];
                                $data = "type=video";
                                $cfg = Post($url, $ua,$data);
                                $usr = json_decode($cfg);
$tmr = $usr->data->duration;
   $rewards = $usr->data->price;
      $id = $usr->data->id;
         $rep = $usr->data->rep;
            $exp = $usr->data->exp;
               $s_id = $usr->data->s_id;
                  $lm = $usr->data->limitHour;                     
for($x=$tmr;$x>0;$x--){echo "\r \r";
echo$hijau2." 𝐖𝐀𝐈𝐓𝐈𝐍𝐆 𝐏𝐑𝐎𝐆𝐑𝐄𝐒  ".$merah."[".$kuning2.$x.$merah."] ".$putih1."sᴄʀɪᴘᴛ ʙʏ ᴛsᴜɴᴅᴇʀᴇ◎[▪‿▪]◎"; 
echo "\r \r";
sleep(1)." \n";}
strip()."\n";

error_reporting(E_ERROR | E_PARSE);

                               $link = "https://payup.video/captcha/control/get.php";
                               $ua = ["user-agent: ".$useragent, "set-cookie:PHPSESSID=$s_id; path/captcha/control/get.php ", "accept: ".$accept11,"accept-language: ".$language, "content-type: ".$type, "origin: ".$origin, "referer: ".$referer];
                               $data = "s_id=$s_id&id=$id";
                               $cfg = Post($link, $ua, $data);                                   
"\n";           
                               $link = "https://payup.video/captcha/control/check.php";
                               $ua = ["user-agent: ".$useragent, "set-cookie:PHPSESSID=$s_id; path/captcha/control/check.php ", "accept: ".$accept11,"accept-language: ".$language, "content-type: ".$type, "origin: ".$origin, "referer: ".$referer];
                               $data = "s_id=$s_id&rep=$rep&exp=$exp";
                               $cfg = Post($link, $ua, $data);
                               $usr2 = json_decode($cfg);
                               $st1 = $usr2->status;
                               $dta = $usr2->data;
                               

$url = "https://api.sctg.xyz/in.php";
$ua = ["user-agent: ".$useragent, "content-type: ".$type];
$data = "key=$api&method=buxmoney&body=$dta";
$cfg = Post($url, $ua,$data);
$one = explode('OK|',$cfg)[1];

echo$hijau2."      𝐂𝐎𝐃𝐄  𝐁𝐘𝐏𝐀𝐒𝐒   : ".$kuning2.$one."\n";
strip();
sleep(3);

$url = "https://api.sctg.xyz/res.php?key=$api&id=$one&action=get";
$ua = ["user-agent: ".$useragent, "content-type: ".$type];
$cfg = Get($url, $ua);
$one = explode('OK|coordinate:x=',$cfg)[1];
$two = explode(',y=' ,$one)[0];

$one = explode(',y=' ,$cfg)[1];

echo$hijau2."      𝐁𝐘𝐏𝐀𝐒𝐒  𝐗      : ".$kuning2.$two."\n";
echo$hijau2."      𝐁𝐘𝐏𝐀𝐒𝐒  𝐘      : ".$kuning2.$one."\n";

$sw = "10";
for($x=$sw;$x>0;$x--){echo "\r \r";                   
echo$hijau2."     𝐁𝐘𝐏𝐀𝐒𝐒𝐈𝐍𝐆 ".$merah."[".$kuning2.$x.$merah."] ".$putih1."sᴄʀɪᴘᴛ ʙʏ ᴛsᴜɴᴅᴇʀᴇ◎[▪‿▪]◎";
echo "\r \r";
sleep(1)." \n";}
strip();
                               $link = "https://payup.video/captcha/control/check.php";
                               $ua = ["user-agent: ".$useragent, "set-cookie:PHPSESSID=$s_id; path/captcha/control/check.php ", "accept: ".$accept11,"accept-language: ".$language, "content-type: ".$type, "origin: ".$origin, "referer: ".$referer];
                               $data = "x=$two&y=$one&s_id=$s_id&rep=$rep&exp=$exp";
                               $cfg = Post($link, $ua, $data)."\n";
                                                                              
echo$hijau2."      𝐒𝐓𝐀𝐓𝐔𝐒         : ".$kuning2.$st1."\n";
echo$hijau2."      √𝐃𝐎𝐍𝐄, 𝐘𝐎𝐔 𝐆𝐄𝐓 : ".$kuning2."($)".$hijau2."$rewards 🤑\n";
echo$hijau2."      𝐋𝐈𝐌𝐈𝐓 /𝐉𝐀𝐌     : ".$kuning2.$lm."\n";
strip();

$url = "https://payup.video/tasks/video/";
$ua = ["user-agent: ".$useragent,
"cookie: ".$cookie, " accept: ".$accept];
$cfg = Get($url, $ua);
$one = explode('<span class="balance-numeric">',$cfg);
$two = explode('</span></a>',$one[1]);
$b = "$two[0]";

echo$biru1."      𝐔𝐏𝐃𝐀𝐓𝐄         : ".$cyan1.$b." 𝑼𝑺𝑫\n";

strip();

}
                                                                                                                                                                                                                                                           
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      