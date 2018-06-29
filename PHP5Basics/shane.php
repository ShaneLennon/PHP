<html>
	<head>
		<title>Hello</title>
	</head>

	<body>
		<h2>Hello World</h2>
		<ul>
			<?php			
				for ($i = 0; $i <= 10; $i ++) {
					echo "<li> Index Number: " . $i . "</li>";
				}
			?>
        </ul>
        <?php
            echo "My first PHP script!"
        ?>
        <br>
        <?php
        // This is a single-line comment

        # This is also a single-line comment

        /*
        This is a multiple-lines comment block
        that spans over multiple lines
        */
        
        // You can also use comments to leave out parts of a code line
        $x = 5 + 14 + 6;
        echo $x . "<br>"; 
       
        echo "Hello World!<br>";
        ECHO "Hello Shane<br>";
        Echo "Hello Big Dog!<br>";

        $color = "red";
        echo "My car is " . $color . "<br>";
        echo "My car is " . $COLOR . "<br>";
        echo "My car is " . $coLOR . "<br>";

        $txt = "I can't wait to go home!";
        $x = 5;
        $y = 10.5;

        echo $txt;
        echo "<br>";
        echo $x;
        echo "<br>";
        echo $y;
        echo "<br>";

        $txt = "W3Schools.com";
        echo "I love $txt!";
        echo "<br>";
        echo "I love " . $txt . "!";
        echo "<br>";
        $x = 21;
        $y = 14;
        $z = $x + $y;
        echo "x + y = " . $z;

        $x = 49; // global scope
        echo "<br>";

        function myTest() {
            // using x inside this function will generate an error
            myTest5();
            echo "<p>Variable x inside function is: $x</p>";
        }
        myTest();

        echo "<p>Variable x outside function is: $x";

        function myTest2(){
            $a = 28; // local scope
            echo "<p>Variable a inside function is: $a</p>";
        }
        myTest2();

        // using a outside the function will generate an error
        echo "<p>Variable a outside function is: $a</p>";

        $b = 56;
        $c = 63;

        function myTest3(){
            global $b, $c;
            $c = $c + $b;
        }

        myTest3();
        echo $c;
        echo "<br>";

        function myTest4()
        {
            $GLOBALS['c'] = $GLOBALS['c'] * $GLOBALS['b'];
        }

        myTest4();
        echo $c;
        echo "<br>";

        function myTest5()
        {
            static $x = 1;
            echo $x;
            echo "<br>";
            $x = $x * 7;
        }

            myTest5();
            myTest5();
            myTest5();
            myTest5();
            myTest5();
            myTest5();
            myTest5();

            echo "<h1>PHP is Fun!</h1>";
            echo "Hello world!<br>";
            echo "I'm about to learn PHP!<br>";
            echo "This ", "string ","was ", "made ", "with multiple parameters.";
                       
            $txt1 = "Learn PHP";
            $txt2 = "W3Schools.com";
            echo "<h2>" . $txt1 . "</h2>";
            echo "Study PHP at " . $txt2 . "<br>";
            echo $x . "<br>";
            echo $y . "<br>";
            echo $x + $y;

            print "<h2>I love PHP!</h2>";
            
            $x = "Hello world!";
            $y = 'Hello world!';

            echo $x;
            echo "<br>";
            echo $y;
            echo "<br>";
            $x = 5985;
            var_dump($x);
            echo "<br>";
            $x = 10.365;
            var_dump($x);
            echo "<br>";

            $cars = array("Volvo", "BMW", "Toyota");
            var_dump($cars);
            echo "<br>";
            echo $cars[0];
            echo "<br>";
            echo $cars[1];
            echo "<br>";
            echo $cars[2];
            echo "<br>";

            class Car {
                function Car(){
                    $this->model = "VW";
                    $this->year = "1998";
                    $this->color = "white";
                }
            }

            // create an object
            $herbie = new Car();

            // show object properties
            echo $herbie->model;
            echo " ";
            echo $herbie->year;
            echo " ";
            echo $herbie->color;
            echo "<br>";

            $x = "Hello world!";
            var_dump($x);
            echo "<br>";
            $x = null;
            var_dump($x);
            echo "<br>";

            echo strlen("I love hardcore!");
            echo "<br>";
            print strlen("Hello world!");
            echo "<br>";
            echo str_word_count("I came to bring the pain hardcore to the brain
            let's go inside my astral plain");

            echo "<br>";
            echo strrev("murder");
            echo "<br>";
            echo strpos("Shane Lennon", "o");
            echo "<br>";
            echo str_replace("shane", "colin", "shane lennon");
            echo "<br>";
            echo substr_count("egpjeswrdbovgjprwojvdnsowirgevheiwgf", "p");
            echo "<br>";
            //The constant below is case-insensetive
            define("GREETING", "Welcome to W3Schools.com!", true);
            echo greeting;

            function myTest6(){
                echo GREETING;
            }

            myTest6();
            echo "<br>";
            $x = 2;
            $y = 20;
            echo $x ** $y;
            echo "<br>";

            $x = 100;
            $y = 100;

            var_dump($x == $y); // returns true because values are equal
            echo "<br>";
            $y = "100";

            var_dump($x === $y); // returns false because types are not equal
            echo "<br>";

            $x = 50;
            var_dump($x != $y); // returns true because the values are not equal
            echo "<br>";
            
            $y = 50;
            var_dump($x <> $y); // returns false because the values are equal
            echo "<br>";

            $x = "40";
            var_dump($x !== $y); // returns true since they are not equal and are different types
            
            echo "<br>";
            $x = 10;
            echo ++$x;

            echo "<br>";
            echo $x++;
            echo "<br>";
            echo $x++;
            echo "<br>";
            echo --$x;
            echo "<br>";
            echo --$x;
            echo "<br>";

            $x = 100;  
            $y = 100;

            if ($x == 100 xor $y == 100) { // false since both $x and $y are true
                echo "Hello world!";
            }
            // true since both x and y are true
            if($x == 100 and $y == 100){ 
                echo "x = 100 and y = 100";
            }
            echo "<br>";
            $y = 80;

            // true since x is true but y is false
            if($x == 100 or y == 100){
                echo "x = 100 or y = 100";
            }

            echo "<br>";

            if($x != 90){
                echo "x is not equal to 90";
            }

            echo "<br>";
            
            $txt1 = "My";
            $txt2 = " name";
            $txt3 = " is";
            $txt4 = " Big";
            $txt5 = " Dog";

            echo $txt1 . $txt2 . $txt3 . $txt4 . $txt5;

            echo "<br>";

            $txt4 .= $txt5;
            echo $txt4;
            $txt4 .= $txt3;
            $txt4 .= $txt1;
            $txt4 .= $txt2;

            echo "<br>";
            echo $txt4;
            echo "<br>";

            $x = array("a" => "red", "b" => "green");  
            $y = array("c" => "blue", "d" => "yellow");  

            print_r($x + $y); // union of $x and $y
            echo "<br>";


            $x = array("a" => "Volvo","b" => "BMW","c" => "Toyota");
            $y = array("a" => "Volvo","b" => "BMW","c" => "Toyota", "d" => "Mitsubishi");
            print_r($x);
            echo "<br>";
            print_r($y);
            echo "<br>";

            print_r($x + $y); // union of $x and $y
            echo "<br>";
            var_dump($x === $y);
            echo "<br>";
            echo ($x === $y)? 'they are the same' : 'they are different'; 
            echo "<br>";
            echo($x != $y)? 'they are different' : 'they are the same';
            echo "<br>";

            $a = array(
                '1' => 12,
                '3' => 14,
                '6' => 11
            );
            $b = array(
                '1' => 12,
                '3' => 14,
                '6' => 11
            );
            $c = array(
                '3' => 14,
                '1' => 12,
                '6' => 11
            );
            $d = array(
                '1' => 11,
                '3' => 14,
                '6' => 11
            );
            
            echo($a == $b)? 'true' :'false';
            echo "<br>";
            echo($a === $b)? 'true' :'false';
            echo "<br>";
            echo($a == $c)? 'true' :'false';
            echo "<br>";
            echo($a === $c)? 'true' :'false';
            echo "<br>";
            echo($a == $d)? 'true' :'false';
            echo "<br>";
            echo($a === $d)? 'true' :'false';
            echo "<br>";

            echo date('l jS \of F Y h:i:s A');
            echo "<br>";

            $hour = date("H");

            if($hour < "10"){
                echo "Have a good morning!";
            }
            elseif($hour < "20"){
                echo "Have a good day!";
            }
            else{
                echo "Have a good night!";
            }
           
            echo "<br>";

            $favfilm = "something about Mary";
            
            switch($favfilm){
                case "good will hunting":
                    echo "Your favourite film is good will hunting!";
                    break;
                case "groundhog day":
                    echo "Your favourite film is groundhog day";
                    break;
                case "something about Mary":
                    echo "Your favourite is 'something about Mary' <br>";
                    break;
                default:
                echo "Your favorite color is neither red, blue, nor green!";
            }

            $x = 1;

            while($x <= 5){
                echo "The number is: " . $x . "<br>";
                $x++;
            }

            do {
                echo "The number is: " .$x . "<br>";
                $x--;
            }while ($x >= 0);

            $x = 9;

            do{ 
                echo "The number is: " .$x . "<br>";
                $x++;
            }while ($x < 9);

            for ($y = 0; $y <= 5; $y++){
                echo "I'm sick of numbers " . $y . "<br>";
            }

            $colors = array("red", "green", "blue", "yellow");

            foreach ($colors as $value){
                echo "$value " . "<br>";
            }

            function sayHello(){
                echo "Hello Shane! How are you today?? <br>";
            }

            function familyName($fname, $year = 2018){
                echo "My name is $fname Lennon. I was born in the year $year. <br>";
            }
            
            sayHello();
            familyName("Shane","1982");
            familyName("Colin");
            
            function product($x, $y){
                $z = $x*$y;
                return $z;
            }

            echo "7 * 13 = " .product(7,13) . "<br>";
            echo "14 * 17 = " .product(14,17) . "<br>";

            $cars = array("Mitsubishi", "Hyundai", "Ferarri","Toyota","Renault","Volvo","BMW");
            echo "I like " .$cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
            echo "<br>";
            
            $arrlength = count($cars);
            //echo $arrlength;

            for($x = 0; $x < $arrlength; $x++ ) {
                echo $cars[$x];
                echo "<br>";
            }
            
            $age = array("Shane"=>"35", "Colin"=>"33", "Paula"=>"62");
            echo "Shane is " . $age['Shane'] . " years old. <br>";
            echo "Colin is " . $age['Colin'] . " years old. <br>";
            echo "Paula is " . $age['Paula'] . " years old. <br>";

            foreach($age as $x =>$x_value){
                echo "Key=" . $x . ", Value=" . $x_value;
                echo "<br>";
            }
            
            sort($cars);
            $clength = count($cars);
            for($x = 0; $x < $clength; $x++){
                echo $cars[$x];
                echo "<br>";
            }

            $numbers = array(8,1,5,6,2,1,8,12,645,45,38,38,0,-12);
            sort($numbers);

            $numlength = count($numbers);
            for($x = 0; $x < $numlength; $x++){
                echo $numbers[$x] . " ";
                
            }

            rsort($cars);
            for($x = 0; $x < $clength; $x++){
                echo $cars[$x];
                echo "<br>";
            }

            rsort($numbers);
            for($x = 0; $x < $numlength; $x++){
                echo $numbers[$x] . " ";
                
            }
            echo "<br>";

            asort($age);
            foreach($age as $x =>$x_value){
                echo "Key=" . $x . ", Value=" . $x_value;
                echo "<br>";
            }

            ksort($age);
            foreach($age as $x =>$x_value){
                echo "Key=" . $x . ", Value=" . $x_value;
                echo "<br>";
            }

            arsort($age);
            foreach($age as $x =>$x_value){
                echo "Key=" . $x . ", Value=" . $x_value;
                echo "<br>";
            }

            krsort($age);
            foreach($age as $x =>$x_value){
                echo "Key=" . $x . ", Value=" . $x_value;
                echo "<br>";
            }

            print_r(array_change_key_case($age,CASE_UPPER));
            echo "<br>";

            $x = 75;
            $y = 30;

            function addition(){
                $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS[y];
            }

            addition();
            echo $z;
            echo "<br>";

            echo $_SERVER['PHP_SELF'];
            echo "<br>";
            
        ?>
            
            

	</body>
</html>

