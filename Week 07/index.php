//============================= 1
<br>
<?php

$num_two = 2.5;
$let_one = "o";
$let_two = "z";
$str = "El%er0";
$str = str_replace( ["%","0"], [$let_two, $let_one], $str);
echo $str; // Elzero
?>

<br>
<hr>
//============================= 2
<br>
<?php
$str = "Orezle";
echo ucfirst(strrev(lcfirst($str)));
// Elzero
?>
<br>
<hr>
//============================= 3
<br>

<?php 
$str = 'aAa';
$num = 3;
$char = "_";

echo str_repeat(strtolower($str.$char),$num);

// aaa_aaa_aaa_
?>

<br>
<hr>
//============================= 4
<br>

<?php
$str = "<div><b>Elzero</b></div>";
echo strip_tags($str, "<b>");
// <b>Elzero</b>
?>

<br>
<hr>
//============================= 5
<br>
<?php
$str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;

echo substr_count($str,$e,$four)."<br>";
echo substr_count($str,lcfirst($o),-$four);

// 1
// 2
?>

<br>
<hr>
//============================= 6
<br>
<?php
$chars = ["E", "l", "z", "e", "r", "o"];
echo implode("", $chars);

// Output
// "Elzero"
?>

<br>
<hr>
//============================= 7
<br>
<?php
$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];

$chars= implode($chars);
echo ucfirst(strtolower(str_replace([1, 2], ["", ""], $chars)));
// Output
// "Elzero"
















