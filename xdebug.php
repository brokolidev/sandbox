<?php

phpinfo();

function isOfDrivingAge($age)
{
    return $age >= 16;
}

function notifyUserOfDriverStatus($name, $age)
{
    $message = isOfDrivingAge($age) ? 'You may drive.' : 'You may not drive';

    return "{$name}: {$message}";
}

$status = notifyUserOfDriverStatus('Jone Doe', 15);

