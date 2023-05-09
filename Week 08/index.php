//============================= 1
<br>
<?php
$friends = [
  "AG" => "Ahmed Gamal",
  "OM" => "Osama Mohamed",
  "MG" => "Mahmoud Gamal",
  "AS" => "Ahmed Samy",
  "FA" => "Farid Ahmed",
  "SM" => "Sayed Mohamed"
];
echo "<pre>";
$friends = array_change_key_case($friends, CASE_LOWER);
print_r(array_chunk($friends, 2, true));
echo "</pre>";
?>

<br>
<hr>
//============================= 2
<br>
<?php
$codes = ["H", "C", "J"];
$means = ["HTML", "CSS", "JavaScript"];

echo "<pre>";
$NEW = array_combine($codes, $means);
print_r(array_change_key_case($NEW, CASE_LOWER));
echo "</pre>";
?>
<br>
<hr>
//============================= 3
<br>

<?php
$friends = [
"Ahmed Gamal" => "AG",
"Osama Mohamed" => "OM",
"Mahmoud Gamal" => "MG",
"Ahmed Samy" => "AS"
];
echo "<pre>";
$friends = array_flip($friends);
$friends = array_change_key_case($friends, CASE_LOWER);
$friends = array_reverse($friends);
print_r($friends);
echo "</pre>";
?>

<br>
<hr>
//============================= 4
<br>
<?php
$nums = [10, 20, 30];
//method
function summ($carry,$num){
    return $carry + $num;
}
$x = array_reduce($nums, "summ",0);
echo $x . '<br>';

// method 2
$x=array_sum($nums);
echo $x;
?>

<br>
<hr>
//============================= 5
<br>
<?php
$nums = [5, 10, 20, 5, 30, 40];

function filt($num){
return $num != 5;
}
$nums = array_filter($nums, "filt");
$x = array_sum($nums);
echo $x;
?>

<br>
<hr>
//============================= 6
<br>
<?php
$chars = ["A", "B", "C", "D", "E"];
$char = "@@";
$zero = 0;


echo "<pre>";
print_r(array_pad($chars, count($chars) * strlen($char), $char[$zero]));
echo "</pre>";
?>

<br>
<hr>
//============================= 7
<br>
<?php
$names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];

next($names);
next($names);
echo current($names) . "<br>"; // "Sayed"
end($names);
echo current($names) . "<br>"; // "Ali"
reset($names);
echo current($names) . "<br>"; // "Osama"
end($names);
prev($names);
echo current($names) . "<br>"; // "Mahmoud"
?>

<br>
<hr>
//============================= 8
<br>
<?php
$chars = ["A", "B", "C"];

array_push($chars, "D");
echo "<pre>";
print_r($chars);
echo "</pre>";
?>

<br>
<hr>
//============================= 9
<br>
<?php
$nums = [1, 2, 3, 4, 5, 6];

$nums = array_slice($nums, -6, -2);
$nums = array_slice($nums, -3);
echo "<pre>";
print_r($nums);
echo "</pre>";
?>

<br>
<hr>
//============================= 10
<br>
<?php
$mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
$nums = [4, 5, 6];


$merg = array_merge($mix, $nums);
natsort($merg);
$mix = array_slice($merg, 0, count($mix));

echo "<pre>";
print_r($mix);
echo "</pre>";
?>

<br>
<hr>
//============================= 11
<br>
<?php
$arr = ["A", "B", "C", "D", "E"];
$count = 0;
foreach($arr as $a){
$count++;
}
echo $count;

?>

<br>
<hr>
//============================= 12
<br>
<?php
$nums = [11, 2, 10, 7, 20, 50];
$sum = 0;
foreach($nums as $n):
$sum += $n;
endforeach;
echo $sum;

?>

<br>
<hr>
//============================= 13
<br>
<?php

$nums = [10, 100, -20, 50, 30];
function find_max($nums){
$max = $nums[0];
foreach($nums as $b){
  if($b > $max){
  $max = $b;
  }
}
return $max;
}
echo find_max($nums);


?>

<br>
<hr>
//============================= 14
<br>
<?php
$nums = [10, 100, -20, 50, 30];
function find_min($nums){
$min = $nums[0];
foreach($nums as $b){
  if($b < $min){
  $min = $b;
  }
}
return $min;
}
echo find_min($nums);

?>

<br>
<hr>
//============================= 15
<br>
<?php
$j=0;
$chars = ["o", "r", "e", "z", "l", "E"];
//method1
function rever($arr) {
  $len = 0;
  foreach ($arr as $chars) $len++;
  $result = '';
  for ($i = $len - true ; $i >= 0; $i--) { 
    $result .= $arr[$i];
  }
  return $result;
}
echo rever($chars);

?>

<br>
<hr>
//============================= 16
<br>
<?php
$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];

foreach($mix as $num):
  if(!is_int($num) || $num % 2 == 0 ):
    array_splice($mix, array_search($num, $mix), 1);
  endif;
endforeach;

echo '<pre>';
print_r($mix);
echo '</pre>';
?>

<br>
<hr>
//============================= 17
<br>
<?php
$nums = [1, 2, 3, 4, 5, 6];

for ($i=0; $i < count($nums) ; $i++) { 
  $rand = rand(0, count($nums) -1);
  [$nums[$i], $nums[$rand]] = [$nums[$rand], $nums[$i]];
}
echo '<pre>';
print_r($nums);
echo '</pre>';

?>

<br>
<hr>
//============================= 18
<br>
<?php
$title = "E&z\$r0 W\$b Sch00&";

echo str_replace(["&", "\$", "0"], ["l", "e", "o"], $title, $count);
echo '<br>';
echo $count;



