<?php

$dir = __DIR__;
$equipment = $dir . '/Equipment.php';

if (file_exists($equipment)) {
    require_once $equipment;
    echo "Файл '" . $equipment . "' подключен";
}

final class Tractor extends Equipment
{
    #[\Override]
    public function attachTo(Physical $physical): Tractor
    {
        $this->wear += 1.0;
        return $this;
    }

    #[\Override]
    public  function service(): Tractor
    {
        parent::service();
        $this->refuel(50.0);
        return $this;
    }
}