<?php
    $dirName = __DIR__;
    $entity = $dirName . '/../Entity.php';

    if(file_exists($entity)){
        require_once($entity);
        echo "Модуль {$entity} подключен\n";
    }else{
        echo "ошибка в форматировании адреса";
    }

    abstract class Biological extends Entity
    {
    //разрешено чтение из вне, но запрещена запись во внешнем коде
    public protected(set) float $health = 100.0 {
        set(float $value) {
            $this->health = max(0.0, min(100.0, $value));
            if($this->health === 0.0)
            {
                echo "Объект с ID:{$this->id} умер.";
//                $this->handleDeath();
            }
        }
    }

    public function __construct(string $id, string $name){
        parent::__construct($id, $name);
    }
    public function changeHealth(float $delta): void
    {
        $this->health += $delta;

    }

    abstract protected function handleDeath(): void;

}