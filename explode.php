<?php

$string = "I love high level programming language";

//$explode = explode(" ",$string);

//for($i=0;$i <= count($explode)-1;$i++){
//    echo $explode[$i]."<br>";
//}

//foreach ($explode as $value) {
//    echo $value."<br>";
//}


$text = "the name Our country bangladesh";
$exp= explode(' ',$text);

foreach ($exp as $element){
    echo  $element."<br>";
}
