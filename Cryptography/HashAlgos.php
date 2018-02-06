<?php

print_r(hash_algos());

foreach (hash_algos() as $algorithm) {
    echo $algorithm . ' ' . hash($algorithm, 'plaintext') . PHP_EOL;
}
