<?php

namespace Creational\FactoryMethod;

use Closure;

class WindowsButton implements Button
{

    public function render(): void
    {
        echo "Render WindowsButton" . PHP_EOL;
    }

    public function onClick(Closure $callback): void
    {
        $callback();
    }
}