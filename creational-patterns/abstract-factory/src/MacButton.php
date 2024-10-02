<?php

namespace Creational\AbstractFactory;

class MacButton implements Button
{
    public function render(): void
    {
        echo "Render Mac button" . PHP_EOL;
    }
}