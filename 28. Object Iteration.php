<?php
require_once("data/Data.php");

$data = new Data();

foreach ($data as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}
