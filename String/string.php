<?php

$str = 'This is some text, I will be using PHP string functions to change it.';
$str_lower = strtolower($str);
$str_ucwords = ucwords($str);
$str_lcfirst = lcfirst($str);
$str_replace = str_replace('PHP', 'HTML', $str);
$str_rev = strrev($str);
$str_upperCase = strtoupper($str);
$str_shuffle = str_shuffle($str);
$str_wordcount = str_word_count($str);
$str_charcount = strcspn($str, '.');
$str_PHPpos = strcspn($str, 'PHP');
$token = strtok($str, " ");

echo '<p><b> Use PHP string functions to get the following output. The text in bold is help information </b></p>';
echo '<p> $str = This is some text. I will be using PHP string functions to change it </p>';
echo '<b>Output: </b>';
echo '<p>' .  $str_lower . '</p>';
echo '<p>' .  $str_ucwords . '</p>';
echo '<p>' . $str_lcfirst . '</p>';
echo '<p>' .  $str_replace . '</p>';
echo '<p>' . $str_rev . '</p>';
echo '<p>' . $str_upperCase . '</p>';
echo '<p>' . $str_shuffle . '</p>';
echo '<b>The number of words in the string:</b>';
echo '<p>' . $str_wordcount . '</p>';
echo '<b>The number of characters in the string:</b>';
echo '<p>' . $str_charcount . '</p>';
echo '<b>The word PHP starts at position:</b>';
echo '<p>' . $str_PHPpos . '</p>';
echo '<b>Voeg minstens 1 andere string functie toe. Leg het gebruik ervan uit:</b>';
while ($token !== false)
{
    echo "$token<br>";
    $token = strtok(" ");
}