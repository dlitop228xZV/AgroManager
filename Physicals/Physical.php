<?php

$dirName = __DIR__;
$entity = $dirName . '/../../Entity.php';

if(file_exists($entity)){
    require_once($entity);
    echo "Модуль {$entity} подключен\n";
}else{
    echo "ошибка в форматировании адреса";
}

$tractor = $dirName . '/Equipment/Tractor.php';

if(file_exists($tractor)){
    require_once($tractor);
    echo "Модуль {$tractor} подключен\n";
}else{
    echo "ошибка в форматировании адреса";
}


abstract class Physical extends Entity
{
    public protected(set) float $wear = 0.0{
        set (float $value) {
            if ($value < 0.0 || $value > 100.0) {
                throw new \OutOfRangeException(
                    "От 0 до 100%"
                );
            }
            $this->wear = $value;
        }
    }
    public function service(): Physical
    {
        $this->wear = 0.0;
        return $this;
    }

    abstract public function attachTo(Tractor $tractor): Physical;
}