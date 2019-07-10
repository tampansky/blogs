<?php
# ShinChan - N45HT - N45HT.WEB.ID
# fb.com/angelia.put - fb.com/ShinChan.admin - fb.com/N45HTOfficial - fb.com/groups/N45HTOfficial
# shinchan0x1945@gmail.com

# your list.txt must a single directory with this exploiter #

echo "
       ____  __   _  _  ____   __   __ _  ____  __ _  _  _       
      (_  _)/ _\ ( \/ )(  _ \ / _\ (  ( \/ ___)(  / )( \/ )      
        )( /    \/ \/ \ ) __//    \/    /\___ \ )  (  )  /       
       (__)\_/\_/\_)(_/(__)  \_/\_/\_)__)(____/(__\_)(__/   
      Simple Bot Auto Views with Proxy - coded by Tampansky

  Thanks to :  Vinz joe - Xcyber - tnM3T30R - tn kuuhaku
                MR.B4H4 - And All Member PSCT AND RECT


";
echo "Input your proxy list: ";
$list = trim(fgets(STDIN));

$open = fopen("$list","r");
$size = filesize("$list");
$read = fread($open,$size);
$lists = explode("\r\n",$read);

$s = 0;
$f = 0;
$t = 0;

echo "\n";

foreach($lists as $proxy){

	echo "Checking $proxy => ";
	
	$chi = curl_init();
	curl_setopt($chi, CURLOPT_URL, "https://www.attackers-online-tersakiti.zone.id");
	curl_setopt($chi, CURLOPT_PROXY, $proxy);
	curl_setopt($chi, CURLOPT_HTTPPROXYTUNNEL, true);
	curl_setopt($chi, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($chi, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($chi, CURLOPT_HEADER, 1);
	curl_setopt($chi, CURLOPT_TIMEOUT, '10');
	$ie = curl_exec($chi);
	curl_close($chi);
	if(!$ie){
		echo "PROXY ERROR\n";
		$f = $f+1;
	}else{
		echo "OK\n";
		$s = $s+1;
	}
}
$t = $s+$f;
echo "\nSuccess : $s; Failed : $f; Total : $t;\n";
?>