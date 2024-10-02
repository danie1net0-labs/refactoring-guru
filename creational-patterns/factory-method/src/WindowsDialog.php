<?php

namespace Creational\FactoryMethod;

class WindowsDialog extends Dialog
{

    public function createButton(): Button
    {
        return new WindowsButton();
    }
}