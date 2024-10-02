<?php

namespace Creational\AbstractFactory;

class MacCheckbox implements Checkbox
{
    public function render(): void
    {
        echo "Render Mac checkbox" . PHP_EOL;
    }
}