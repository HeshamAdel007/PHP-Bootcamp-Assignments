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
    1. die
    2. endswitch
    3. include
    4. function
    5. echo
    6. require_once
    7. catch
    8. trait
    9. try
    10. implements
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




/* Link
  ** https://www.php.net/manual/en/reserved.keywords.php
  ** https://www.php.net/manual/en/reserved.variables.php
  ** https://devbunch.com/2020/07/09/why-php-is-called-a-loosely-typed-language/
  ** https://www.php.net/manual/en/language.references.whatare.php
  ** https://www.toptal.com/php/objects-references-php-memory#:~:text=In%20PHP%2C%20references%20are%20not,numbers%20indicating%20a%20memory%20location.
*/