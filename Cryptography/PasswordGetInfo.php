<?php

echo '<pre>';

$hash = password_hash('password', PASSWORD_DEFAULT);

echo $hash . PHP_EOL;

print_r(password_get_info($hash));
