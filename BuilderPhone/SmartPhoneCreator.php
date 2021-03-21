<?php

// Director
class SmartPhoneCreator
{
    public function buildPhone(SmartPhoneBuilder $builder)
    {
        $builder->addCPU();
        $builder->addGPU();
        $builder->addRAM();
        $builder->addSensors();
        $builder->addCamera();
        $builder->addCase();

        return $builder->getProduct();
    }
}