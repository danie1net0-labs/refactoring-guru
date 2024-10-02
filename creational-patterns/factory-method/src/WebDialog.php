<?php

namespace Creational\FactoryMethod;

class WebDialog extends Dialog
{

    public function createButton(): Button
    {
        return new HtmlButton();
    }
}