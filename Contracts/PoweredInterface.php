<?php

interface PoweredInterface
{
    public function refuel(float $units): void;

    public function getPercentage(): float;
}