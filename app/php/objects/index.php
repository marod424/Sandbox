<?php 

// class Person {
//     public $name;
//     public $job;

//     public function __construct($name, $job)
//     {
//         $this->name = $name;
//         $this->job = $job;
//     }

//     public function communicate($style = 'voice')
//     {
//         return 'communicating with ' . $style;
//     }
// }

// $p = new Person('John', 'Teacher');
// echo $p->communicate('telepathy');

// $person = new stdClass;
// $person->first = "John";
// $person->last = "Doe";
// $person->job = "Teacher";

// echo $person->first . ' ' . $person->last;

$person = array(
    'first' => 'John',
    'last'  => 'Doe'
);

// var_dump($person);
// var_dump((object)$person);

echo $person['first'];
$o = (object) $person;
echo $o->first;