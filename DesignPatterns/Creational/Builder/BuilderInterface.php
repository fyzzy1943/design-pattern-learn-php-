<?php

namespace DesignPatterns\Creational\Builder;

/**
 * Interface 建造者
 * @package DesignPatterns\Creational\Builder
 */
interface BuilderInterface
{
    public function createVehicle();

    public function addWheel();

    public function addEngine();

    public function addDoors();

    public function getVehicle();
}