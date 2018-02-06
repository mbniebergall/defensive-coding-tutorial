<?php

require_once 'RegularExpressions.php';

var_dump(preg_match(RegularExpressions::digits(), '12345'));
var_dump(preg_match(RegularExpressions::digits(6), '123456'));

var_dump(preg_match(RegularExpressions::date(), date('Y-m-d')));

var_dump(preg_match(RegularExpressions::alphaCaps(), 'US'));
var_dump(preg_match(RegularExpressions::alphanumeric(), 'abc123xyz'));
