<?php
// Builder Interface
interface SmartPhoneBuilder
{
    public function addCPU();
    public function addGPU();
    public function addRAM();
    public function addSensors();
    public function addCamera();
    public function addCase();
    public function getProduct();
}