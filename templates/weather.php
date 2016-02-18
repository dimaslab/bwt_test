<?php
$DB_host =  "localhost"; // имя сервера MySQL
$DB_user =  "root";    // имя пользователя MySQL
$DB_pass =  "";    // пароль на сервере MySQL
$DB_name =   "blog";     // имя  базы данных
/* Соединяемся с сервером MySQL */
$db=mysql_connect($DB_host,$DB_user,$DB_pass);

/* Выбираем  необходимую базу    данных */
mysql_select_db($DB_name, $db);

/*  Устанавливаем     кодировку */
mysql_query('SET  NAMES cp1251');

?>
<?php

$result = mysql_query("SELECT * FROM weather WHERE city_id=34601 LIMIT 1");

if(mysql_num_rows($result)  != 1){
    die('Такого  города нет в базе данных!');

}
else {
    $myrow = mysql_fetch_assoc($result);
}

$temp = round(($myrow['temperature_min'] + $myrow['temperature_max'])/2);
$myrow['temperature']  = ($temp > 0)? '+'.$temp:$temp;


switch  ($myrow['cloudiness']){
    case 0:
        switch  ($myrow['precipitation']){
            case 4: $myrow['style'] =  'rainy-cloudy';break;
            case 5: $myrow['style'] =  'rainy-cloudy';break;
            case 6: $myrow['style'] =  'snow';break;
            case 7: $myrow['style'] =  'snow';break;
            case 8: $myrow['style'] =  'thunderstorm';break;
            case 9: $myrow['style'] =  'clear';break;
            case 10: $myrow['style'] =  'clear';break;
        }
        break;
    case 1:
        switch  ($myrow['precipitation']){
            case 4: $myrow['style'] =  'rainy-cloudy';break;
            case 5: $myrow['style'] =  'rainy-cloudy';break;
            case 6: $myrow['style'] =  'snowly-cloudly';break;
            case 7: $myrow['style'] =  'snowly-cloudly';break;
            case 8: $myrow['style'] =  'thunderstorm-cloudly';break;
            case 9: $myrow['style'] =  'cloudy';break;
            case 10: $myrow['style'] =  'cloudy';break;
        }
        break;
    case 2:
        switch  ($myrow['precipitation']){
            case 4: $myrow['style'] =  'rainy-cloudy';break;
            case 5: $myrow['style'] =  'rainy-cloudy';break;
            case 6: $myrow['style'] =  'snowly-cloudly';break;
            case 7: $myrow['style'] =  'snowly-cloudly';break;
            case 8: $myrow['style'] =  'thunderstorm-cloudly';break;
            case 9: $myrow['style'] =  'cloudy';break;
            case 10: $myrow['style'] =  'cloudy';break;
        }
        break;
    case 3:
        switch  ($myrow['precipitation']){
            case 4: $myrow['style'] =  'rainy';break;
            case 5: $myrow['style'] =  'rainy';break;
            case 6: $myrow['style'] =  'snowly-cloudly';break;
            case 7: $myrow['style'] =  'snowly-cloudly';break;
            case 8: $myrow['style'] =  'thunderstorm-cloudly';break;
            case 9: $myrow['style'] =  'cloudy';break;
            case 10: $myrow['style'] =  'cloudy';break;
        }
        break;
}
?>
<div class="temperature">
    <div class="current-temperature <?=$myrow['style']?>">
      <span class="test"><?=$myrow['temperature']?>&deg;C</span>
</div>

<div class="choose-cur-temp choose-weather-in">
    <span id="current_city"><?=$myrow['city_name']?></span>
</div>
</div>

