<?php

$password = 'password123';

$hashOld = password_hash($password, PASSWORD_DEFAULT, ['cost' => 8]);

$isNeedsRehash = password_needs_rehash($hashOld, PASSWORD_DEFAULT, ['cost' => 8]);

var_dump($isNeedsRehash);


