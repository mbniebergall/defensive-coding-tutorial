<?php

echo '<pre>';

echo 'Decrypt each item:' . PHP_EOL . PHP_EOL;

$items = [
    strrev('confidential'),
    md5('password'),
    str_replace(['o', 'r', 'a', 'n', 'g', 'e'], ['p', 's', 'b', 'o', 'h', 'f'], 'orange'),
    base64_encode('hidden'),
    dechex(192) . '.' . dechex(168) . '.' . dechex(0) . '.' . dechex(1),
    decbin(127) . '.' . decbin(0) . '.' . decbin(0) . '.' . decbin(1),
    base64_encode(base64_encode(base64_encode('triple encoded'))),
    base64_encode(md5('password123')),
    password_hash('sailboat', PASSWORD_DEFAULT),
    password_hash('backdoor', PASSWORD_DEFAULT, ['cost' => 12]),
    '08-05-12-12-15 23-15-18-12-04', // HELLO WORLD
    '01000011 01010010 01011001 01010000 01010100 01001111', // CRYPTO in binary
    ord('S') . ord('u') . ord('n') . ord('s') . ord('h') . ord('i') . ord('n') . ord('e'),
    bin2hex('Florida'),
    hash('sha1', 'SHA1'),
    hash('md2', 'bad'),
    htmlentities(htmlentities('<?php')),
    md5('elephant'),
    hash('gost', 'casper'),
    password_hash('5f4dcc3b5aa765d61d8327deb882cf99', PASSWORD_DEFAULT, ['cost' => 8]),
    hash('sha512', 'dictionary')
];

foreach ($items as $key => $string) {
    echo ($key + 1) . '. ' . $string . "\r\n";
}
