//============================= 1
<br>
<?php
Function greeting($name, $type=""){
    if($type == "Male"){
        return "Hello Mr $name<br>";
    }
    elseif($type == "Female"){
        return "Hello Miss $name<br>";
    }
    else{
        return "Hello $name<br>";
    }
}
echo greeting("Osama", "Male"); // Hello Mr Osama
echo greeting("Eman", "Female"); // Hello Miss Eman
echo greeting("Sameh"); // Hello Sameh
?>

<br>
<hr>
//============================= 2
<br>
<?php
function get_arguments(...$str){
    $all= "";
    foreach($str as $k):
        $all .= " ".$k;
    endforeach;
    return "<br>".$all;

}
// Needed Output
echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
echo get_arguments("I", "Love", "PHP"); // I Love PHP
?>
<br>
<hr>
//============================= 3
<br>
<?php 
function sum_all(...$nums){
    $all = 0;
    foreach($nums as $k):
        $k== 5 ? $k = "" : $k=$k;
        $k== 10 ? $k = 20 : $k=$k;
        $all = $all + (int) $k;
    endforeach;
    return "<br>".$all;
}
// Needed Output
echo sum_all(10, 12, 5, 6, 6, 10); // 64
echo sum_all(5, 10, 5, 10); // 40
?>

<br>
<hr>
//============================= 4
<br>
<?php
function multiply(...$nums){
    $all = 1;
    foreach($nums as $k){
        if(gettype($k)== "string"){
            $k = 1;
        }
        if(gettype($k)== "double"){
            $k = (int)$k;
        }
        $all = $all * $k;
    }
    return "<br>".$all;
}

// Needed Output
echo multiply(10, 20); // 200
echo multiply("A", 10, 30); // 300
echo multiply(100.5, 10, "B"); // 1000
?>

<br>
<hr>
//============================= 5
<br>
<?php
function check_status($a, $b, $c) {
    if(gettype($a) == "string" && gettype($b) == "integer" && gettype($c) == "boolean"){
    $out1 = "";
        if($c == true){
            $out1 .= "Hello $a, Your Age Is $b, You Are Available For Hire<br>";
        }else{
            $out1 .= "Hello $a, Your Age Is $b, You Are Not Available For Hire<br>";
        }
        return $out1;
    }
    if(gettype($a) == "integer" && gettype($b) == "string" && gettype($c) == "boolean"){
    $out2 = "";
        if($c == true){
            $out2.= "Hello $b, Your Age Is $a, You Are Available For Hire<br>";
        }else{
            $out2.= "Hello $b, Your Age Is $a, You Are Not Available For Hire<br>";
        }
        return $out2;
    }
    if(gettype($a) == "boolean" && gettype($b) == "integer" && gettype($c) == "string"){
    $out3 = "";
        if($a == true){
            $out3.= "Hello $c, Your Age Is $b, You Are Available For Hire<br>";
        }else{
            $out3.= "Hello $c, Your Age Is $b, You Are Not Available For Hire<br>";
        }
        return $out3;
    }
    if(gettype($a) == "boolean" && gettype($b) == "string" && gettype($c) == "integer"){
    $out4 ="";
        if($a == true){
            $out4.= "Hello $b, Your Age Is $c, You Are Available For Hire<br>";
        }else {
            $out4.= "Hello $b, Your Age Is $c, You Are Not Available For Hire<br>";
        }
        return $out4;
    }
}
echo check_status("Osama", 38, true);
echo check_status(38, "Osama", true);
echo check_status(true, 38, "Osama");
echo check_status(false, "Osama", 38);
?>

<br>
<hr>
//============================= 6
<br>
<?php
function calculate($num1, $num2, $type="add"){
    if($type == "add" || $type == "a"){
        return "<br>".($num1 + $num2);
    }
    if($type == "subtract" || $type == "s"){
        return "<br>".($num1 - $num2);
    }
    if($type == "multiply" || $type == "m"){
        return "<br>".($num1 * $num2);
    }
}

// Needed Output
echo calculate(10, 20); // 30
echo calculate(10, 20, "a"); // 30
echo calculate(10, 20, "s"); // -10
echo calculate(10, 20, "subtract"); // -10
echo calculate(10, 20, "multiply"); // 200
echo calculate(10, 20, "m"); // 200
?>

<br>
<hr>
//============================= 7
<br>
<?php
function calculat(int $num_one, int $num_two) {
    $num_two = (float) $num_two;
    echo "<br>";
  return $num_one +  $num_two;
}

echo calculat(20, 10); // 30
echo gettype(calculat(20, 10)); // Double
?>

<br>
<hr>
//============================= 8
<br>
<?php
$message = "Hello";
$$message = &$message;
echo "<br>";
echo $message;
$message = function($message){
    $$message = $message;
    return " $message";
    };
echo $Hello("Osama"); // Hello Osama
?>

<br>
<hr>
//============================= 9
<br>
<?php

// Anonymous Function 
$greet = function($name){
    return "$name";
};

//Arrow Function
$greet = fn($name) => "$name";
// Needed Output
echo $greet("Osama"); // Greetings

















