<?php

namespace Physicals;

abstract class Physical
{
    public float $wear {
        set (float $value) {
            if ($value < 0.0 || $value > 100.0) {
                throw new \InvalidArgumentException(
                    "От 0 до 100%"
                );
            }
        }
    }

    public function __construct(float $wear = 0.0)
    {
        $this->wear = $wear;
    }
}