<?php
require_once("data/Helper.php");
require_once("data/Conflict.php");

//namespace digunakan untuk mengelompokan kelas;

$data1 = new \Data\One\Conflict();
$data2 = new \Data\Two\Conflict();

echo Helper\APPLICATION;
Helper\helpMe();