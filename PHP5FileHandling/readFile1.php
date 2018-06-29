<!DOCTYPE html>
<html>
<body>

<?php
//echo readfile("webdictionary.txt");
$myfile = fopen("test.txt", "r") or die("Unable to open file!"); 
//echo fread($myfile,filesize("webdictionary.txt")) ."<br>";

//Output one line until end-of-file

while(!feof($myfile)){
    echo fgets($myfile) ."<br>";
}

$myfile = fopen("test.txt", "r") or die("Unable to open file!"); 
//Output one character until end-of-file
while(!feof($myfile)){
    echo fgetc($myfile);
}

fclose($myfile);
echo "<br>";

$myfile2 = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile2, $txt);

$txt = "Jane Doe\n";
fwrite($myfile2,$txt);
fclose($myfile2);


?>
</body>
</html>