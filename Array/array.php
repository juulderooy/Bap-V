<?php

$teachers = array('ingrid', 'jelle', 'joey');

// echo $teachers[1];

//maak van jelle ed

//$teachers[1] = 'ed';

//var_dump($teachers);
//print_r($teachers);

// for ($i=0; $i <3; $i++) {
//
// echo '<p>' . $teachers[$i] . '</p>';
//
// }

// $teachers[] = 'theo';
array_push($teachers, 'theo' , 'hugo' , 'paul');

foreach ($teachers as $one_teacher) {
    echo '<p>' . $one_teacher . '</p>';
}

//associative array

$subject = array('ingrid' => 'bap' , 'joey' => 'pro' , 'jelle' => 'fro');

//echo $subject['ingrid']

foreach($subject as $teachers => $subject) {

  echo $teachers . ' teaches ' . $subject . '<br>';
}

?>
