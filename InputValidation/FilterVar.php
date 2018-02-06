<?php

var_dump(filter_var('a@example.com', FILTER_VALIDATE_EMAIL));
var_dump(filter_var('a@example.com BLARG!', FILTER_VALIDATE_EMAIL));

var_dump(filter_var(123, FILTER_VALIDATE_INT));
var_dump(filter_var('123', FILTER_VALIDATE_INT));
var_dump(filter_var(123.4, FILTER_VALIDATE_INT));
var_dump(filter_var(123.4, FILTER_VALIDATE_FLOAT));
var_dump(filter_var(123, FILTER_VALIDATE_FLOAT));
