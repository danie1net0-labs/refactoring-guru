<?php

use Creational\FactoryMethod\{Platform, WebDialog, WindowsDialog};

require __DIR__ . '/../../vendor/autoload.php';

try {
    $platform = getPlatform(Platform::cases());
} catch (InvalidArgumentException $exception) {
    die($exception->getMessage());
}

$dialog = match ($platform) {
    'web' => new WebDialog(),
    'windows' => new WindowsDialog(),
};

$dialog->render();