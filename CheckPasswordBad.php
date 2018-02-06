<?php

$password = 'Password123!';

if ($password == $_GET['password']) {
    return true;
} else {
    return false;
}
