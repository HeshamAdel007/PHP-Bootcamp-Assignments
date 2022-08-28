//============================= 1
<?php
$username = "Elzero";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $username?>Courses">
    <title>Welcome To <?= $username?> Courses</title>
  </head>
  <body>
    <h1><?php echo $username; ?> Courses</h1>
    <p>Here In <?php echo $username ?> Courses We Provide Front-End And Back-End Courses</p>
    <hr>
    <div><?php echo $username ?> Courses Is The What You Need.</div>
    <footer>All Right Reserved To <?= $username ?> Courses</footer>
  </body>
</html>

<hr>
//============================= 2

<?php
$name = "elzero";
$$name = "Web";

echo '<br>';
echo $$name;
echo '<br>';
echo $elzero;
echo '<br>';
echo "${$name}";
echo '<br>';
echo "$elzero";
echo '<br>';
echo "${elzero}";
echo '<br>';
?>

<hr>
//============================= 3

<?php 
echo '<br>';
$a = 200;
$b = &$a;
$a = 100;

echo $b; // 100
echo '<br>';
?>

<hr>
//============================= 4
<?php
echo '<pre>';
print_r($_SERVER["SCRIPT_FILENAME"]);
echo '</pre>';
echo '<br>';
print_r($_SERVER["HTTP_HOST"]);
echo '<br>';
echo '<br>';
print_r($_SERVER["SystemRoot"]);
echo '<br>';
print_r($_SERVER["OPENSSL_CONF"]);
echo '<br>';
?>

<hr>
//============================= 5

/*
    1. $GLOBALS
    2. $_SERVER
    3. $_REQUEST
    4. $_POST
    5. $_GET
    6. $_FILES
    7. $_ENV
    8. $_COOKIE
    9. $_SESSION
    10.$php_errormsg 
*/
<br>
<hr>
//============================= 6
<?php
echo '<br>';
echo __LINE__;
echo '<br>';
echo __FILE__;
echo '<br>';
echo __DIR__;




