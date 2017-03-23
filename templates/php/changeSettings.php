<?php
$settingButtons = array
(
	"light"=>"on",
	"pump"=>"on",
	"fan"=>"on"
);

foreach($settingButtons as $key => $val){
	$val = $_GET[$key];
	if($val!="")
		$settingButtons[$key]=$val;
}
$file = fopen("../../static/json/settings.json", "w") or die("can't open file");

$jsonSettings = json_encode($settingButtons);
echo $jsonFormat;
fwrite($file, $jsonSettings);
fclose($file);

?>
