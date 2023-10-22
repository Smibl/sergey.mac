<?php

function printTodos(array $Todos)
{
    foreach ($Todos as $todo)
    {
        printMessage(formatTodo($todo));
    }
}
function formatTodo($todo)
{
    $status = formatStatus($todo["completed"]);
    return "$status $todo[id]. $todo[name]";
}
function formatStatus($status)
{
    return $status ? "[X]" : "[ ]";
}