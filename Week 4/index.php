//============================= 1
<?php

echo 10 / 20 / 15 % 3 * 190 * 10 * 400;
echo 10 / 20 % 15 + 3 * 190 % 10 * 400;
?>

<br>
<hr>
//============================= 2
<br>
<?php
$a = "10";

echo +$a;
echo gettype(+$a);
echo '<br>';

echo $a + 0;
echo gettype($a + 0);
echo '<br>';

echo (int) $a;
echo gettype((int) $a);
echo '<br>';

settype($a, 'integer'); // Set the type of a variable
echo $a;
echo gettype($a);
// https://www.php.net/manual/en/function.settype.php
echo '<br>';

echo intval($a); // Get the integer value of a variable
echo gettype(intval($a));
// https://www.php.net/manual/en/function.intval.php
echo '<br>';
?>
<br>
<hr>
//============================= 3
<br>
<?php
$a = 10;
$b = 20;
var_dump($a <=> $b);
echo '<br>';
var_dump(-($b - $a) / $a);
?>

<br>
<hr>
//============================= 4
<br>
<?php
$a = 10;
$b = 20;
$c = 15;

var_dump($a < $b); // True
echo '<br>';
var_dump($c >= $a); // True
echo '<br>';
var_dump($a <= $b); // True
echo '<br>';
var_dump($a != $b); // True
echo '<br>';
var_dump($a <> $c); // True
echo '<br>';
var_dump($a !== $c); // True
echo '<br>';
var_dump(gettype($a) == gettype($b)); // True
echo '<br>';
var_dump(gettype($a) === gettype($b)); // True
echo '<br>';
var_dump(gettype((float) $a) != gettype($b)); // True

?>

<br>
<hr>
//============================= 5
<br>
<?php
$points = 10;

$points++;
$points++;
$points++;
echo $points; // 13

echo '<br>';

$points--;
$points--;
$points--;
$points--;
$points--;
echo $points; // 8;

?>

<br>
<hr>
//============================= 6
<br>
<?php

$a = "Elzero";
$b = "Web";
$c = "School";

// Method One
$d = $a . " " . $b . " " . $c;

// Method Two
$d = "$a  $b  $c";

// Method Three
$d = "{$a}  {$b}  {$c}";

// Method Four
$d = sprintf("%s %s %s", $a, $b, $c); //Return a formatted string
// https://www.php.net/manual/en/function.sprintf.php

echo $d; // Elzero Web School

?>

<br>
<hr>
//============================= 7
<br>
<?php
$a = 10;
$b = 20;

echo (($a + $b) * ($a + $b) + $a * $a) * $a; // 10000

?>

<br>
<hr>
//============================= 8
<br>
<?php
// Code 1
$a1 = @$b1 or die("Custom Error");
echo $b1;
// Code 2
$f = @file("Not_A_File") or die("Custom Error");
echo $f;
// Code 3
(@ include("Not_A_File")) or die("Custom Error");