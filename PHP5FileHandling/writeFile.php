<!DOCTYPE html>
<html>
<body>
    <!-- <?php phpinfo(); ?> -->
<?php

$myfile2 = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "I came to bring the pain \n <br>";
fwrite($myfile2, $txt);

$txt = "Hardcore to the brain \n <br>";
fwrite($myfile2,$txt);

$txt = "Let's go inside my Astral Plane";
fwrite($myfile2,$txt);
fclose($myfile2);

$myfile = fopen("newfile.txt", "r") or die("Unable to open file!"); 
echo fread($myfile,filesize("newfile.txt")) ."<br>";

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!"); 
$txt = "Mickey Mouse\n";
fwrite($myfile, $txt);
$txt = "Minnie Mouse\n";
fwrite($myfile, $txt);


$myfile = fopen("newfile.txt", "r") or die("Unable to open file!"); 
echo fread($myfile,filesize("newfile.txt")) ."<br>";

?>
</body>
</html>