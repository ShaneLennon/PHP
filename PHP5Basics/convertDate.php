<?php

        function convertDate($date,$locale,$length){

    
        $monthNames = array("en" => array("full" => array(1=> 'January','Febuary','March','April','May','June',
        'July','August','September','October','November','December'),

        "short" =>array(1=> 'Jan','Feb','Mar','Apr','May','Jun',
        'Jul','Aug','Sep','Oct','Nov','Dec')),

        "es" => array("full" => array(1=> 'Enero','Febrero','Marzo','Abril','Mayo','Junio',
        'Julio','Agosto','Septiembre','Octubre','Noviembre','Deciembre'),

        "short" =>array(1=> 'Ene','Feb','Mar','Abr','May','Jun',
        'Jul','Ago','Sep','Oct','Nov','Dec')),

        );
        
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
       
        // foreach($age as $x => $x_value) {
        //     echo "Key=" . $x . ", Value=" . $x_value;
        //     echo "<br>";
        // }

        foreach($monthNames as $x => $x_value) {
            // echo "Key=" . $x . ", Value=" . $x_value;
            // echo "<br>";
            foreach($x_value as $y => $y_value) {
                // echo "Key=" . $y . ", Value=" . $y_value;
                // echo "<br>";
                foreach($y_value as $z => $z_value) {
                    //echo "Key=" . $z . ", Value=" . $z_value;
                    echo $x . " " . $y . " " . $z. " ". $z_value;
                    echo "<br>";
                }
            }
        }

        $exploded = explode("-",$date);

        $day = $exploded[0];
        echo $day;
        echo "<br>";
        $month = substr($exploded[1],1);
        echo $month;
        echo "<br>";
        $year = $exploded[2];
        echo $year;
        echo "<br>";

        $month = $monthNames[$locale][$length][$month];
        echo $month;
        echo "<br>";

        $date = $day . " " . $month . " " . $year;
        return $date;
    
        
    }

    echo convertDate("02-07-1984","en","full");
?>