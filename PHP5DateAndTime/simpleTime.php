<!DOCTYPE html>
<html>
<body>

<?php
    date_default_timezone_set("Europe/Dublin");
    echo "The time in Dublin is " . date("H:i:s")."<br>";

    date_default_timezone_set("Australia/Melbourne");
    echo "The time in Melbourne is " . date("H:i:s")."<br>";

    $d=mktime(13,23,47,5,24,2018);
    echo "Created date is " . date("d-m-Y h:i:sa", $d)."<br>";

    $d=strtotime("11:20pm 25 May 2018");
    echo "Created date is " . date("d-m-Y h:i:sa",$d)."<br>";

    $d=strtotime("tomorrow")."<br>";
    echo "Tomorrows date is " . date("d-m-Y h:i:sa",$d)."<br>";

    $d=strtotime("next Monday");
    echo "Next Mondays date is " . date("d-m-Y h:i:sa",$d)."<br>";

    $d=strtotime("+5 Weeks");
    echo "Finish internship in 5 weeks " . date("d-m-Y h:i:sa",$d)."<br><br>";

    $startdate=strtotime("today");
    $enddate=strtotime("+6 weeks", $startdate);
    //echo date("M d", $startdate)."<br>";
    //echo date("M d", $enddate)."<br>";

        while ($startdate < $enddate){
            echo date("M d", $startdate) . "<br>";
            $startdate = strtotime("+1 week", $startdate);
        }

    $secondsInYear = 24*60*60*365;
    $secondsInDay = 24*60*60;
    echo "Seconds in Year ".$secondsInYear."<br>";
    $d3 = time();
    echo "Seconds since 1st January 1970 ".$d3."<br>";
    $yearsSince1970 = $d3/$secondsInYear;
    echo "Years since 1st January 1970 ".$yearsSince1970."<br>";

    $myBirthday=strtotime("4 September 1982");
    $years = ceil(($d3 - $myBirthday)/$secondsInYear);
    echo "I am ".$years." years old <br>";
    $days = ($d3 - $myBirthday)/$secondsInDay;
    echo "I am ".$days." days old <br>";

    $lastDay=strtotime("June 29 2018");
    $numDaysLeft=ceil(($lastDay-time())/60/60/24);
    echo "I have ".$numDaysLeft." days left.";



?>
</body
</html>