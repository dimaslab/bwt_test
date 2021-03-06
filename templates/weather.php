<?php
$res = '';

function startElement($parser, $name, $attrs) {
    global $res;
    switch ($name) {
        case 'TOWN':
            $res .= '<h1>Погода в ';
            $res .= '<strong>'.mb_convert_encoding(
                    urldecode($attrs['SNAME']),
                    'UTF-8', 'windows-1251').'</strong></h1><br />';
            break;
        case 'FORECAST':
            $res .= 'Температура '.$attrs['DAY'].'.'.$attrs['MONTH'].'.'.
                $attrs['YEAR'].' в '.$attrs['HOUR'].'-00 будет от ';
            break;
        case 'TEMPERATURE':
            $res .= '<strong>'.$attrs['MIN'].'°</strong> до <strong>'.
                $attrs['MAX'].'°</strong><br />';
            break;
    }
}

function endElement($parser, $name) {}

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'http://informer.gismeteo.ua/xml/34601.xml');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$data = curl_exec($ch);

curl_close($ch);

$XMLparser = xml_parser_create();
xml_set_element_handler($XMLparser, 'startElement', 'endElement');
if (!xml_parse($XMLparser, $data)) {
    die('Ошибка обработки данных');
}
xml_parser_free($XMLparser);

?>
<div style='background-color: #dff0d8; padding: 15px; border-radius: 15px; width: 500px;  margin: 50px auto;' class='bs-callout bs-callout-info' align='center'>
<?=$res;?>
</div>
