<?php

namespace Creational\AbstractFactory;

class WindowsFactory implements GUIFactory
{

    public function createButton(): Button
    {
        return new WindowsButton();
    }

    public function createCheckbox(): Checkbox
    {
        return new WindowsCheckbox();
    }
}