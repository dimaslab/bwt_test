<?php
require_once('db.php');

$xml = simplexml_load_file("http://informer.gismeteo.ru/rss/34601.xml");

$cur_time=date('G');
$cur_date=date('d.m.Y');

switch($cur_time){
case  ($cur_time>=3 && $cur_time<9):
$tod=1;
break;
case  ($cur_time>=9 && $cur_time<15):
$tod=2;
break;
case  ($cur_time>=15 && $cur_time<21):
$tod=3;
break;
case  (($cur_time>=21  &&  $cur_time<23) ||
($cur_time>=0   && $cur_time<3)):
$tod=0;
break;




default: $tod=0;
}

foreach ($xml->REPORT->TOWN->FORECAST as $forecast ){
$xml_date=$forecast["day"].'.'.$forecast["month"].'.'.$forecast["year"];
if ($forecast["tod"] == $tod  && $cur_date == $xml_date){



mysql_query("UPDATE `weather`
SET `temperature_min` = '”. $forecast->TEMPERATURE['min'].”',
`temperature_max` = '”.$forecast->TEMPERATURE['max'].”',
`pressure_min` = '”. $forecast->PRESSURE['min'].”',
`pressure_max` = '”. $forecast->PRESSURE['max'].”',
`wind_min` = '”.$forecast->WIND['min'].”',
`wind_max` = '”. $forecast->WIND['max'].”',
`wind_dir` = '”. $forecast->WIND['direction'].”',
`relwet_min` = '”.$forecast->RELWET['min'].”',
`relwet_max` = '”.$forecast->RELWET['max'].”',
`cloudiness` = '”.$forecast->PHENOMENA['cloudiness'].”',
`precipitation` = '”. $forecast->PHENOMENA['precipitation'].”'
WHERE city_id = 34601
LIMIT 1");

break;   }
}