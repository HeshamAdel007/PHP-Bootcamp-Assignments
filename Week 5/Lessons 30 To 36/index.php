//============================= 1
<br>
<?php
$a = 100;
$b = 200;
$c = 100;

// Check That:
// Variable "b" Larger Than Variable "a"
if ($b > $a) {
    echo "yes";
} elseif ($a == $c){ // Variable "a" Identical To Variable "c"
    echo "yes";
}elseif (($a + $c) === $b) { // Variable "a" Plus Variable "c" Identical To Variable "b"
    echo "ye3";
}
?>

<br>
<hr>
//============================= 2
<br>
<?php
// Test Case 1
$a = 100;
$b = 200;
$c = 300;
// A Is Not Larger Than B Or C
echo $a > $b ? "A Is Larger Than B" : "A Is Not Larger Than B Or C";
?>
<br>
<?php
// Test Case 2
$a = 200;
$b = 100;
$c = 300;
// A Is Larger Than B
echo $a > $b ? "A Is Larger Than B" : "";
?>
<br>
<?php
// Test Case 3
$a = 200;
$b = 200;
$c = 100;
// A Is Larger Than c
echo $a > $c ? "A Is Larger Than c" : "";
?>
<br>
<hr>
//============================= 3
<br>

<?php 
$admins = ["Osama", "Ahmed", "Sayed"];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['user'];
    echo "The Request Method Is Post And Username Is $name";
    if (in_array($name, $admins)) {
        echo "This Username $name Is Admin";
    }
}
?>
<form action="" method="POST">
  <input type="text" name="user">
  <input type="submit" value="Send">
</form>

<br>
<hr>
//============================= 4
<br>

<?php
$a = 30;
$b = 20;
$c = 10;

echo ($a + $b === $c) ? "A + B = C" : (($a + $c === $b) ? "A + C = B" : (($b + $c === $a) ? "B + C = A" : "The End"));
// Output
// "B + C = A"
// https://www.codementor.io/@sayantinideb/ternary-operator-in-php-how-to-use-the-php-ternary-operator-x0ubd3po6
// https://stackoverflow.com/questions/13162172/php-elseif-ternary-operators
?>

<br>
<hr>
//============================= 5
<br>
<?php 
 $name = "Osama";
$age = 40;
$country = "Egypt";
if (
    $age > 18
    &&gettype($name) === "string"
    &&$country === "Egypt"
    ) 
    echo "The Age Is Good To Go<br>The Name Is Good To Go<br>The Country Is Good To Go";
// Needed Output
// "The Age Is Good To Go"
// "The Name Is Good To Go"
// "The Country Is Good To Go"
?>

<br>
<hr>
//============================= 6
<br>
<?php
$genre = "Hack And Slash";

switch ($genre) {
    case 'RPG':
        echo "I Recommend Ys Games";
        break;
    case 'Hack And Slash':
         echo "I Recommend Castlevania Games";
        break;
    case 'FPS':
        echo "I Recommend Uncharted Games";
        break;
    case 'Platform':
        echo "I Recommend Megaman Games";
        break;
    case 'Puzzle':
        echo "I Recommend Megaman Games";
        break;
    
    default:
        echo "I Recommend Shadow Of Mordor And Shadow Of War";
        break;
}

// Needed Output
// "I Recommend Castlevania Games"
?>

<br>
<hr>
//============================= 7
<br>
<?php
$num_one = 23;
$num_two = 5;
$op = "*";

switch ($op) {
    case '+':
        echo $num_one + $num_two; // Output 28
        break;
    case '-':
         echo $num_one - $num_two;// Output 18
        break;
    case '*':
        echo $num_one * $num_two; // Output 115
        break;
    case '/':
        echo floor($num_one / $num_two) . '<br>';
        echo $num_one % $num_two;
        break;
    default:
        echo "Unknown Operation";
        break;
}

?>

<br>
<hr>
//============================= 8
<br>
<?php
$day = "Sat";
if ($day == "Sat" || "Sun" || "Mon") {
    echo "We Are Open All The Day";
} elseif ($day == "Tue" || "Wed") {
    echo "We Are Open From 08:12";
} elseif ($day == "Thu" || "Fri") {
    echo "We Are Closed";
} else {
    echo "Unknown Day";
}



















