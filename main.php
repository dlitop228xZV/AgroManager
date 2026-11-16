<?php
$dir = __DIR__;
$entity = $dir . '/Entity.php';
$BiologicalDir = $dir . '/Biologicals/Biological.php';

if (file_exists($entity)) {
    require_once $entity;
    echo "Файл '" . $entity . "' подключен";
}

if (file_exists($BiologicalDir)) {
    require_once $BiologicalDir;
    echo "Файл '" . $BiologicalDir . "' подключен";
}

$biological = new Biological("firstObject","Чувак");
print_r($biological);