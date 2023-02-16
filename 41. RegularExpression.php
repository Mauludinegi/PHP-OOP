<?php
$matches = [];
$result = (bool)preg_match_all("/gie | din | pur/i", "Gie Purnama Mauludin", $matches);

$result = preg_replace("/anjing | bangsat/i", "***","Anjing lu, Bangsat kau!");

var_dump($result);
var_dump($matches);

$result = preg_split("/[\s,-]/", "Gie Purnama Mauludin,Business Man");
var_dump($result);