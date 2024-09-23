<?php
/*Проверка типа переменной с помощю if else*/

$variable = 3.14;
$type = null; // переменная для вывода типа $variable

if (is_bool($variable)) {
    $type = 'bool';
    } elseif (is_float($variable)) {
        $type = 'float';
    } elseif (is_int($variable)) {
        $type = 'int';
    } elseif (is_string($variable)) {
        $type = 'string';
    } elseif (is_null($variable)) {
        $type = 'null';
    } else {
        $type = 'other';
    };

echo "type is $type";
