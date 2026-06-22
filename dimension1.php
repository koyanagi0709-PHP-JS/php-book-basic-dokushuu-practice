<?php
# 多次元配列について学習

$data1 = [
    ['X-1', 'Y-1', 'Z-1'],
    ['X-2', 'Y-2', 'Z-2'],
    ['X-3', 'Y-3', 'Z-3'],
];

print_r($data1);

print $data1[1][1].PHP_EOL;

$data2 = [-10 => '山田','鈴木'];
print_r($data2);