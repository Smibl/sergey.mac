<?php
/** @var array $toodayTasks */
require "./Todo/todos-data.php";
require "./Todo/todos-functions.php";
require "functions.php";

//function sum(...$numbers)
//{
//    var_dump($numbers);
//    $result = 0;
//    $finishLine = null;
//    foreach ($numbers as $number)
//    {
//        $finishLine = $finishLine . $result . '+' . $number;
//        $result += $number;
//        $finishLine = $finishLine . "=" . $result . "\n";
//    }
//    return $finishLine;
//}
//
//$values = [1,24,51,125];
//echo sum (...$values);

$title = "Что мне нужно сделать сегодня:";


printMessage($title);
printTodos($toodayTasks);