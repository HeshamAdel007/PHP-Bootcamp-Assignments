//============================= 1
<br>
<?php
echo disk_total_space("C:") / 1024 / 1024 / 1024 / 1024 . "<br>";
echo disk_total_space("D:") / 1024 / 1024 / 1024 / 1024 . "<br>";
?>

<br>
<hr>
//============================= 2
<br>
<?php
echo filesize("C:\laragon\www\PHP Bootcamp\Week 10\film.mkv") / 1024 / 1024  . "<br>";
echo filesize("C:\laragon\www\PHP Bootcamp\Week 10\film.mkv") / 1024;
?>
<br>
<hr>
//============================= 3
<br>

<?php 
mkdir('Programming/Php', 0700, true);
// if (file_exists('Programming')) {
//    rmdir('Programming/Php') && rmdir('Programming');
// }
?>

<br>
<hr>
//============================= 4
<br>

<?php
function change_permissions ($filename) {
   if (is_file($filename)) {
      chmod($filename, 0700);
      clearstatcache();
      if (pathinfo($filename, PATHINFO_EXTENSION) == "txt") {
         echo "Permissions Changed";
      }
   } else {
      echo "This Is Directory";
   }
}

echo change_permissions("Elzero") . "<br>"; // This Is Directory And Only Files Allowed
echo change_permissions("Work.docx") . "<br>"; // File Extension Is Not Txt
echo change_permissions("Result.txt"); // Permissions Changed
?>

<br>
<hr>
//============================= 5
<br>
<?php
echo basename(__FILE__) . "<br>";
echo pathinfo(__FILE__, PATHINFO_BASENAME). "<br>";
echo basename(__FILE__, ".php"). "<br>";
echo pathinfo(__FILE__)['basename']. "<br>";
?>

<br>
<hr>
//============================= 6
<br>
<?php
$name = fopen("elzero.txt", "r");

// for ($i = 0; $i <= 1; $i++) {

//   echo fgets($name) . "<br>";
// }

// echo file_get_contents("elzero.txt", true, NULL, 0, 25). "<br>";

// echo fread(fopen("elzero.txt", "r"), 25) . "<br>";














