<?php

namespace Creational\AbstractFactory;

class WindowsCheckbox implements Checkbox
{
    public function render(): void
    {
        echo "Render Windows checkbox" . PHP_EOL;
    }
}