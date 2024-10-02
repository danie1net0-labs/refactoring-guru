<?php

namespace Creational\AbstractFactory;

class Application
{
    private Button $button;
    private Checkbox $checkbox;

    public function __construct(private readonly GUIFactory $factory)
    {
    }

    public function createUI(): void
    {
        $this->button = $this->factory->createButton();
        $this->checkbox = $this->factory->createCheckbox();
    }

    public function render(): void
    {
        $this->button->render();
        $this->checkbox->render();
    }
}