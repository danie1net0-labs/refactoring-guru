<?php

namespace Creational\FactoryMethod;

use Closure;

interface Button
{
    public function render(): void;

    public function onClick(Closure $callback): void;
}