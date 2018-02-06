<?php

error_reporting(-1);


echo '<pre>';

$password = '5uP3rsEcr#t!';

echo password_hash($password, PASSWORD_DEFAULT) . PHP_EOL;
echo password_hash($password, PASSWORD_DEFAULT) . PHP_EOL;
echo password_hash($password, PASSWORD_DEFAULT) . PHP_EOL;
echo password_hash($password, PASSWORD_DEFAULT) . PHP_EOL;
echo password_hash($password, PASSWORD_DEFAULT) . PHP_EOL;

echo PHP_EOL;

echo password_hash($password, PASSWORD_DEFAULT, ['cost' => 8]) . PHP_EOL;
echo password_hash($password, PASSWORD_DEFAULT, ['cost' => 8]) . PHP_EOL;
echo password_hash($password, PASSWORD_DEFAULT, ['cost' => 8]) . PHP_EOL;
echo password_hash($password, PASSWORD_DEFAULT, ['cost' => 8]) . PHP_EOL;
echo password_hash($password, PASSWORD_DEFAULT, ['cost' => 8]) . PHP_EOL;

echo PHP_EOL;

echo password_hash($password, PASSWORD_DEFAULT, ['cost' => 12]) . PHP_EOL;
echo password_hash($password, PASSWORD_DEFAULT, ['cost' => 12]) . PHP_EOL;
echo password_hash($password, PASSWORD_DEFAULT, ['cost' => 12]) . PHP_EOL;
echo password_hash($password, PASSWORD_DEFAULT, ['cost' => 12]) . PHP_EOL;
echo password_hash($password, PASSWORD_DEFAULT, ['cost' => 12]) . PHP_EOL;

echo PHP_EOL;

echo 'Different Algorithm:';
echo PHP_EOL;

echo password_hash($password, PASSWORD_BCRYPT) . PHP_EOL;
echo password_hash($password, PASSWORD_BCRYPT) . PHP_EOL;
echo password_hash($password, PASSWORD_BCRYPT) . PHP_EOL;
echo password_hash($password, PASSWORD_BCRYPT) . PHP_EOL;
echo password_hash($password, PASSWORD_BCRYPT) . PHP_EOL;

echo PHP_EOL;

