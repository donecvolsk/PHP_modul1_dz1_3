<?php
/*Проверка типа переменной с помощю switch case*/

$variable = [];
$type = null; // переменная для вывода типа $variable

switch (true) {
    case is_bool($variable):
        $type = 'bool';
        break;
    case is_float($variable):
        $type = 'float';
        break;
    case is_int($variable):
        $type = 'int';
        break;
        case is_string($variable):
            $type = 'string';
            break;        
    default:
    $type = 'other';
        break;
}

echo "type is $type";