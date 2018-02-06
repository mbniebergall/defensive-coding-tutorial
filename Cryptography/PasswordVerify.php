<?php

$password = '5uP3rsEcr#t!';

$hashes = [
    password_hash($password, PASSWORD_DEFAULT),
    password_hash($password, PASSWORD_DEFAULT),
    password_hash($password, PASSWORD_DEFAULT, ['cost' => 8]),
    password_hash($password, PASSWORD_DEFAULT, ['cost' => 8]),
    password_hash($password, PASSWORD_DEFAULT, ['cost' => 12]),
    password_hash($password, PASSWORD_DEFAULT, ['cost' => 12]),
    password_hash($password . uniqid(), PASSWORD_DEFAULT),
    'for sure not a match',
    $password
];

foreach ($hashes as $hash) {
    echo (int) password_verify($password, $hash) . PHP_EOL;
}

