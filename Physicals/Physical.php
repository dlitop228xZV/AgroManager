<?php

namespace Physicals;

abstract class Physical
{
    protected float $wear;

    public function __construct(float $wear = 0.0)
    {
        $this->setWear($wear);
    }

    public function getWear(): float
    {
        return $this->wear;
    }

    public function setWear(float $wear): void
    {
        if ($wear < 0.0 || $wear > 100.0) {
            throw new \InvalidArgumentException(
                "От 0 до 100%%"
            );
        }
        $this->wear = $wear;
    }

    public function getResidualResource(): float
    {
        return 100.0 - $this->wear;
    }

}