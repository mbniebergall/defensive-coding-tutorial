<?php

$passwordFromLogin = 'Password123!';

$passwordHashFromDb = password_hash('Password123!', PASSWORD_DEFAULT);

$verify = password_verify($passwordFromLogin, $passwordHashFromDb);

return $verify;
