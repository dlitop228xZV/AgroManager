<?php
$dir = __DIR__;
$entity = $dir . '/Entity.php';
$Biological = $dir . '/Biologicals/Biological.php';
$feedable   = $dir . '/Contracts/FeedableInterface.php';
$cowFile    = $dir . '/Biologicals/Animals/Cow.php';

if (file_exists($entity)) {
    require_once $entity;
    echo "Файл '" . $entity . "' подключен";
}

if (file_exists($Biological)) {
    require_once $Biological;
    echo "Файл '" . $Biological . "' подключен";
}

if (file_exists($feedable)) {
    require_once $feedable;
    echo "Файл '" . $feedable . "' подключен";
}

if (file_exists($cowFile)) {
    require_once $cowFile;
    echo "Файл '" . $cowFile . "' подключен";
}

$cow = new Cow('1','cow-1', 250);
$cow->feed(10.0);
print_r($cow);