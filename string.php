<?php

$string = "hello bangladesh";
$string_pos = "I love high level programming language";
$string_replace = "Dear {name}, you have selected for {designation} in ASIAN IT INC.";

//echo strlen($string);
//echo str_word_count($string);
//echo strrev($string);
//echo strpos($string_pos,"level");

$one = str_replace("{name}","MD. MASUD RANA", $string_replace);
$two = str_replace("{designation}","UI/UX Developer", $one);

//echo $two;




//string length

$some_text="the name of our country is bangladesh it is became independent in 1971, dhaka it is capital ";
//echo  strlen($some_text);
//word count
  echo  strpos($some_text,"1971");