<?php

// the php variable start with dollar sign and the variable are case sensitive
// $name = "Md. Liton Hossain";
// $namE = "Md. Masud Rana"; // String

// only one special character can be used in php variable, it can be placed anywhere of variable, it could be in very first place or in middle or in the last part of the variable
// $_age = 31;
// $ag_e = 30;
// $age_ = 28;

// a php variable can not be started with number ( 0...9)
// $_4age = 25;

// number can be used in a php variable anywhere without the very first position
// $_age2 = 12;
// $number2_code = 15;

// $number1 = 1;
// $number2 = 2;

// if($number1 > $number2){
//     echo "the condition is true";
// }else{
//     echo "the condition is false";
// };




// because 2 is greater than 1

// aj rakhi ...



// constent vabiabel not changee abele 
// define("Name", "Masud Rana");
// var_dump(Name);



/*
Data types...............
integer
float
boolean
Null
string
array
object
resource

*/

// printf 

// $text ="MD Masud Rana";
// printf("the text is %s <br/>", $text);
// $firstName = "Masud";
// $lastName = "Rana";
// if change the deraction must use single cote '', 
// printf('My name is <br> %2$s %1$s', $lastName, $firstName);

// using one argument on variable

// printf('My name is <br> %1$s %1$s',$firstName);



// দশমিক এর পর কয়টা সংখ্যা দেখাবে সেটার জন্য %সংখ্যাf ব্যাবহার করা হয় । 
// $number= 15.2544;
// printf("the number is %.2f", $number);

// sprintf printf k return kore dey caile seta pore use kora jebe



// 

// $n1= 151.51444;
// $n2=20;
// printf("the number is %07.2f", $n1);



// php math operators



// php te duita variable ak sathe duclator kotha jay 
// $x= $y= 5;
// echo $y;

// printf("the number is %d", $y);











// php logical operators
// make even number
$num= 12;
// if ($num %2==0){
//     echo "$num is even number";

// }else{
//     echo "$num is not even number";
// }
// tarnary operator
// $isEven = $num %2==0? "is even number" : "is not even number";
// echo $isEven;




<?php

//$name = "Md. Liton Hossain";
//$designation = "CEO";
//$skill = "10 programming languages";
//
//$sentence = $name." is working as a ".$designation." in ASIAN IT INC. with his best talent (".$skill.")";
//
//echo $sentence;

//function multiply($num1,$num2){
//    return $num1*$num2;
//}
//
//$result = multiply(5,6);
//
//echo $result;

//$colors = array("Green","Red","Yellow");
$colors = ["Green","Red","Yellow","White","Black","Indigoo","Blue"];
//echo $colors[1];

//foreach ($colors as $color) {
//    echo $color."<br>";
//}

//// Associative Array
//$skills = ["liton"=>"kotlin,TypeScript,Javascript,PHP,Python,Java,MySQL,MongoDB,HTML,CSS","masud"=>"Javascript,HTML,CSS,PHP"];
//
//echo$skills["liton"];

//for($i=0; $i <= 10; $i++){
//    echo "The number is: ".$i."<br>";
//}

for($i=0; $i <= count($colors)-1; $i++){
    echo $colors[$i]."<br>";
}







<?php

// Associative Array
//সাধারন Array তে index নাম্বার দিয়ে element দেখতে হয় কিন্তু  Associative Array ব্যাবহার করলে আমরা element এর key সেট করতে পারি সেটি । এবং key দিয়ে আমরা element কে access করতে পারি ।

//$favColors= ["Masud"=>"red, green, blue", "Hasan"=>"black, white "];
//echo  $favColors["Masud"];




//$colors = ['red','green','blue'];

//for loop
//for ($i=0; $i< count($colors);$i++){
//    echo  " <br> $colors[$i]";
//};
//

//foreach loop
//foreach ($colors as $color){
//    echo  "{$color} <br>";
//}


//spaceship operator
//যদি সমান হয় তাহলে 0 print করবে ।
//print( 1 <=> 1);print("<br/>");

//যদি শেষের সংখ্যা বড় হয় তাহলে -1 print করবে ।
//print( 1 <=> 2);print("<br/>");

////যদি শেষের সংখ্যা ছোট হয় তাহলে 1 print করবে ।
//print( 2 <=> 1);print("<br/>");

//print( 5<=>4);


//Null Coalescing Operator
// যদি বাম পাসেরটা থাকে তাহলে সেটাই result দেখাবে আর যদি না থাকে তাহলে পরেরটা দেখাবে


//$result = $num ?? 50;
//echo  $result;



//function
//function multipaly($x,$y){
//     return $x*$y;
//
//}
//$result = multipaly(5,5);
//echo  "$result";
//



//PHP explode() Function
// স্টিং থেকে Array তে Convart করেতে explode() Function

//$colors= explode(',','red,greed,bule,white,black');
//print $colors[3];


