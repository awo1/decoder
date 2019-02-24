<?php

$data = [
    '1' => 1,
    '2' => '',
    '3' => 'http://alfacasino.devmwl.com',
];

echo json_encode($data);
echo PHP_EOL;

echo mt_rand(10,99).base64_encode(json_encode($data));
echo PHP_EOL;
