<?php

namespace Creational\FactoryMethod;

abstract class Dialog
{
    public abstract function createButton(): Button;

    public function render(): void
    {
        $okButton = $this->createButton();

        $okButton->onClick(function (): void {
            echo "Register close action" . PHP_EOL;
        });

        $okButton->render();
    }
}

