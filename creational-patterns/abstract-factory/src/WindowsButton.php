<?php

namespace Creational\AbstractFactory;

class WindowsButton implements Button
{
    public function render(): void
    {
        echo "Render Windows button" . PHP_EOL;
    }
}