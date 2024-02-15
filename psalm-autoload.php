<?php
declare(strict_types=1);

function maybeAutoload(string $path): void
{
    if (!is_file($path)) {
        return;
    }

    require_once $path;
}
maybeAutoload('/app/vendor/autoload.php');
maybeAutoload(getcwd() . '/vendor/autoload.php');
