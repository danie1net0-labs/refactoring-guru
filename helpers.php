<?php

function getPlatform(array $platforms): string
{
    $platforms = array_map(fn (BackedEnum $platform): string => $platform->value, $platforms);

    $arguments = array_map(function (string $argument) {
        $argument = explode('=', $argument);

        return $argument[0] === '--platform' ? $argument[1] : null;
    }, $_SERVER['argv']);

    $platform = array_filter($arguments);
    $platform = array_values($platform)[0];

    if (! in_array($platform, $platforms)) {
        throw new InvalidArgumentException('Invalid platform' . PHP_EOL);
    }

    return $platform;
}