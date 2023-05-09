//============================= 1
<br>
<?php
$index = 10;
for ($i=$index; $i>0; $i--){
    echo "<br>";
    echo $i;
}
// Needed Output
// 10
// 9
// 8
// 7
// 6
// 5
// 4
// 3
// 2

?>

<br>
<hr>
//============================= 2
<br>
<?php
$index = 0;
// by while loop
while($index < 20){
    $index += 2;
    echo "<br>";
    if($index === 0){
        continue;
    } else{
    echo $index;
    }
}

// by fo-while loop
// do {
//    echo ($index += 2) . '<br>';
// } while ($index < 20);

// by for loop
// for ($i = $index; $i<=20; $i+=2) {
//     if( $i=== 0){
//         continue;
//     }
//     echo "<br>";
//     echo $i;
// }
?>
<br>
<hr>
//============================= 3
<br>

<?php 
$num = 2;
while ($num < 520) {
  $num == 2 ? $num / $num : '' . "<br>";
  echo $num + 2 . "<br>";
  $num = ($num + 2) * 2;
}
?>

<br>
<hr>
//============================= 4
<br>

<?php
$start = 10;
$end = 0;
$stop = 3;
for($i = $start; $i >= $stop; $i--) {
    echo "<br>";
    if($i < $start) {
        echo "${end} ${i}";
    }
    else{
        echo $i;
    }
}
?>

<br>
<hr>
//============================= 5
<br>
<?php 
$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];

for($i = $start; $i < count($mix) - true;) {
    $i++;
    echo (is_int($mix[$i])? $mix[$i]: '');
}
?>

<br>
<hr>
//============================= 6
<br>
<?php
$money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];

    foreach($money as $k => $val) {
        echo "The Name Is $k And I Need $val Pound From Him"."<br>";
    }
?>

<br>
<hr>
//============================= 7
<br>
<?php
$mix = [1, 2, "A", "B", "C", 3, 4];
$num = 0;
$str = 0;
foreach($mix as $value) {
    if(gettype($value) == "integer") {
        echo "<br>".$value;
        $num++;
    }
    else{
        $str++;
    }
}
echo "<br>"."$num Numbers Printed";
echo "<br>"."$str Numbers Printed";
?>

<br>
<hr>
//============================= 8
<br>
<?php
$nums = [1, 13, 12, 20, 51, 17, 30];

for($i=0; $i<count($nums);$i++) {
    if($nums[$i]%2==0) {
    echo "<br>".$nums[$i]/2 ;
    }
}

?>

<br>
<hr>
//============================= 9
<br>
<?php
$help_num = 3;
$nums = [4, 5, 6, 1, 2, 3];
$names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];

for($i = 0; $i <count($names); $i++){
    if($names[$i] == "Sayed"){
        echo $names[$nums[$help_num]]. "<br>";
        echo $names[$nums[$help_num]+$nums[$help_num]];
    }
}

?>

<br>
<hr>
//============================= 10
<br>
<?php
$help_num = 4;
$nums = [2, 4, 5, 6, 10];

foreach($nums as $num) {
    echo $num .  " + " .  $nums[$help_num] . " = "
    .  $num + $nums[$help_num] . "<br>";
    $help_num--;

}

















