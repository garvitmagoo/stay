<?php 
$mysql_user='root';
$mysql_host='localhost';
$mysql_pass='';
$mysql_db='stay';
if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass)||!mysql_select_db($mysql_db)){
die(mysql_error());

}
$image=$_GET['cityname'];
$image = str_replace(' ', '', $image);
$jsonurl = "http://api.openweathermap.org/data/2.5/weather?q=".$image."&APPID=b0d0b99b48131efe2c12c1b1a70ce6e9";
$json = file_get_contents($jsonurl);

$weather = json_decode($json);
$kelvin = $weather->main->temp;
$celcius = $kelvin - 273.15;
if($celcius<30 && $celcius >10) {
	header("Location:rainyday.js-master/demo1.html?city=$image");
	}
if($celcius<=10) {
	header("Location:JSSnow/snow3d.html?city=$image");
	}
if($celcius<40 && $celcius >30) {
	header("Location:rainyday.js-master/demo5.html?city=$image");
	}


	?>