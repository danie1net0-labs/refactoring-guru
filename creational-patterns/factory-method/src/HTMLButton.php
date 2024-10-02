<?php

namespace Creational\FactoryMethod;

use Closure;

class HTMLButton implements Button
{
    public function render(): void
    {
        echo "Render HTMLButton" . PHP_EOL;
    }

    public function onClick(Closure $callback): void
    {
        $callback();
    }
}