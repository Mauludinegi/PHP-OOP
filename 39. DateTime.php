<?php
$dateTime = new DateTime();
$dateTime->setDate(1990, 1, 20);
$dateTime->setTime(10, 10, 10, 0);

$dateTime->add(new DateInterval("P1Y"));

$minusOneMonth = new DateInterval("P1M");
$minusOneMonth->invert = true;
$dateTime->add($minusOneMonth);
var_dump($dateTime);

$now = new DateTime();
$now->setTimezone(new DateTimeZone("Asia/Jakarta"));
var_dump($now);

echo $now->format("Y-m-d H:i:s");

$date = DateTime::createFromFormat("Y-m-d H:i:s", "2022-10-10 10:10:10", new DateTimeZone("Asia/Jakarta"));
if ($date) {
    var_dump($date);
} else {
    echo "Format Salah" . PHP_EOL;
}
