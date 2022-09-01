//============================= 1
<br>
<?php
echo rand(10,20);
?>

<br>
<hr>
//============================= 2
<br>
<?php
$friends = ["Osama", "Ahmed", "Sayed", "Ibrahim"];
echo $friends[array_rand($friends)];
?>
<br>
<hr>
//============================= 3
<br>

<?php 
$num1 = 11.5; // 11
$num2 = 9.4898; // 9.5
$num3 = -7.5; // -7

echo round($num1, 0, PHP_ROUND_HALF_DOWN) . "<br>";
echo round($num2, 1) . "<br>";
echo round($num3, 0, PHP_ROUND_HALF_ODD) . "<br>";
?>

<br>
<hr>
//============================= 4
<br>
<?php
$fil_id = [];
foreach(filter_list() as $filter):
    $id = filter_id($filter);
    $fil_id[$id] =  $filter;
endforeach;

echo "<pre>";
print_r($fil_id);
echo "</pre>";

?>

<br>
<hr>
//============================= 5
<br>
<?php
$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

function url($url)
{
    return filter_var($url, FILTER_VALIDATE_URL) ? "Valid URL <br>" : "Not A Valid URL <br>";
}

echo url($url1);
echo url($url2);
echo url($url3);
echo url($url4);
?>

<br>
<hr>
//============================= 6
<br>
<?php
$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";


function urls($url) //FILTER_VALIDATE_URL
{
   $url = filter_var($url, FILTER_SANITIZE_URL);
   return $url . '<br>';
}

echo urls($url1);
echo urls($url2);
echo urls($url3);
echo urls($url4);











