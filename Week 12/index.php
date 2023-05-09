//============================= 1
<br>
<?php
setcookie("site[layout]", "boxed", strtotime("+2 month +5 days"));
setcookie("site[font]", "Swat", strtotime("+2 month +5 days"));
setcookie("site[color]", "blue", strtotime("+2 month +5 days"));
?>

<br>
<hr>
//============================= 2
<br>
<?php
if (isset($_COOKIE['site'])) {
   echo "<pre>";
   print_r($_COOKIE);
   echo "</pre>";
   echo "<br>";

   echo "Your Color Is " . $_COOKIE['site']['color'] . " And Your Font Is " . $_COOKIE['site']['font'];
}
?>
<br>
<hr>
//============================= 3
<br>

<?php
setcookie("site[layout]", "boxed", time() - 1);
?>

<br>
<hr>
//============================= 4
<br>

<?php
setcookie("site[font]", "Swat",);
setcookie("site[color]", "blue",);

?>

<br>
<hr>