<?php


use Creational\AbstractFactory\{Application, MacFactory, Platform, WindowsFactory};

require __DIR__ . '/../../vendor/autoload.php';

try {
    $platform = getPlatform(Platform::cases());
} catch (InvalidArgumentException $exception) {
    die($exception->getMessage());
}

$factory = match ($platform) {
    'mac' => new MacFactory(),
    'windows' => new WindowsFactory(),
};

$application = new Application($factory);

$application->createUI();
$application->render();