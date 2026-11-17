<?php

$dirName = __DIR__;
$physical = $dirName . '/../Physical.php';

if(file_exists($physical)){
    require_once($physical);
    echo "Модуль {$physical} подключен\n";
}else{
    echo "ошибка в форматировании адреса";
}

$dirName = __DIR__;
$powered = $dirName . '/../../Contracts/PoweredInterface.php';

if(file_exists($powered)){
    require_once($powered);
    echo "Модуль {$powered} подключен\n";
}else{
    echo "ошибка в форматировании адреса";
}
abstract class Equipment extends Physical implements PoweredInterface
{
    public protected(set) float $fuelLevel = 0.0{
        set(float $value){
            $this->fuelLevel = $value;
        }
    }

    public function getPercentage(): float
    {
        return $this->fuelLevel;
    }

    public function refuel(float $units): void
    {
        if($units <= 0.0) {
            throw new InvalidArgumentException("Значение может быть только положительным");
        }
    }

    #[\Override]
    //переопределение сигнатуры
    public  function service(): Equipment
    {
        parent::service();
        return $this;
    }
}