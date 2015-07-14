<?php
require 'TablePrinter.php';

class Greeting
{
    public function greet($name) { return "Hello, $name!"; }
}

class LessFormalGreeting
{
    public function greet($name) { return "Sup, $name!"; }
}

class PirateGreeting
{
    public function greet($name) { return "Welcome aboard, me matey $name!"; }
}

function greet($greeting, $name = 'Someone')
{
    return $greeting->greet($name);
}

$p = new TablePrinter(array('Object', 'Result'));
$p->addRow("Greeting", greet(new Greeting()));
$p->addRow("LessFormalGreeting", greet(new LessFormalGreeting()));
$p->addRow("PirateGreeting", greet(new PirateGreeting()));

$p->output();