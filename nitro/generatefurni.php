<?php

$pdo = new PDO('mysql:host=127.0.0.1;dbname=hubbe;charset=utf8mb4', 'root', 'uvV6wjL6WwDCdkqBRJbQ', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
]);

$items = $pdo->query('SELECT * FROM furniture');

$roomItems = '';
$wallItems = '';

foreach ($items as $item) {
    $xml = vsprintf('<furnitype id="%d" classname="%s"><revision>0</revision><xdim>%d</xdim><ydim>%d</ydim><name>%s</name><description></description><canstandon>%d</canstandon><cansiton>%d</cansiton><canlayon>%d</canlayon></furnitype>', [
        $item['sprite_id'],
        $item['item_name'],
        $item['width'],
        $item['stack_height'],
        $item['public_name'],
        $item['is_walkable'],
        $item['can_sit'],
        $item['can_lay'],
    ]);

    if ($item['type'] === 's') {
        $roomItems .= $xml;
    } else {
        $wallItems .= $xml;
    }
}

$xml = '<?xml version="1.0" encoding="UTF-8"?>
        <furnidata>
          <roomitemtypes>' . $roomItems . '</roomitemtypes>
          <wallitemtypes>' . $wallItems . '</wallitemtypes>
        </furnidata>';

file_put_contents('furnidata.xml', $xml);