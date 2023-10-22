<?php

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

$toodayTasks = [
    [
        "id" => 1,
        "name" => "Сходить в магазин",
        "completed" => false
    ],
    [
        "id" => 2,
        "name" => "Погулять с собакой",
        "completed" => true
    ],
    [
        "id" => 3,
        "name" => "Почитать книгу",
        "completed" => false
    ],
    [
        "id" => 4,
        "name" => "Убраться дома",
        "completed" => false
    ]
];

function printTodos($Todos)
{
    $result = "Что мне нужно сделать сегодня:\n";
    foreach ($Todos as $todo)
    {
        $status = $todo["completed"] ? "[X]" : "[ ]";
        $result = "$result $status $todo[id]. $todo[name]\n";
    }
    return $result;
}

echo printTodos($toodayTasks);