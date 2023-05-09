//============================= 1
<br>
<?php

date_default_timezone_set("Asia/Riyadh");
echo date_default_timezone_get() . "<br>";
echo date("D, d M m y - h:i:s A") . "<br>";
echo date("l, d F m Y - h:i:s A") . "<br>";

?>

<br>
<hr>
//============================= 2
<br>
<?php
date_default_timezone_set("Africa/Cairo");

echo date_default_timezone_get() . "<br>";

$date = "2005-10-02";
$d = date_create($date);
$new_date2 = date_modify($d, "+15 hour +15 Minutes  +15 Seconds");
echo date_format($new_date2, "Y, F ,l 'dS' H:i:s") . "<br>";

?>
<br>
<hr>
//============================= 3
<br>

<?php
date_default_timezone_set("Africa/Cairo");

$date = "1990-10-01";
$old_date = strtotime($date);
$t = time();
$diff = ($t - $old_date);


$diff_day =  $diff / 60 / 60 / 24;
$diff_years = $diff / 60 / 60 / 24 / 365;

echo "From Epoch Time Till 1990-10-01 Is Approximately " . round($diff_day, 1)   . " Days <br>";
echo "From Epoch Time Till 1990-10-01 Is Approximately " . round($diff_years, 1)   . " Years <br>";
?>

<br>
<hr>
//============================= 4
<br>

<?php
date_default_timezone_set("Africa/Cairo");

$date = "1990-10-01";

$reg = date_create($date);
$now = date_create("now");

$diff = date_diff($reg, $now);

echo '<pre>';
print_r($diff);
echo '</pre>';

echo "From Epoch Time Till 1990-10-01 Is Approximately " . $diff->days  . " Days";
echo "<br>";
echo "From Epoch Time Till 1990-10-01 Is Approximately " . $diff->y   . " Years";
?>

<br>
<hr>
//============================= 5
<br>
<?php
echo time() . "<br>";

$d = getdate();
echo $d[0];

echo "<br>";

echo date("U");
echo "<br>";
echo strtotime("now");
?>

<br>
<hr>