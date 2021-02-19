<?php

//NOTE: this application generates different pins on every refresh
//Php code to generate airtime recharge cards. 
function generate_airtime_pin($length) {
    
    //for statement to generate the pins
    for($i=0; $i < $length; $i ++) {
        //assign the random to a variable
        $pin = mt_rand(1,10000000000000);
    }
    
    //print out the generated pins
    echo $pin;
}

//Initialising the amount of pins to be generated to 200
$limit = 200;

//initializing the starting amount of pins to be generated
$number = 1;
echo ("<h3>The generated pins are: </h3><br>");
//conditional while statement to loop from zero to the set limit 
while($number <= $limit){
    echo $number++;
    echo (". ");
    echo(generate_airtime_pin(14));
    echo (" <br>");
}

?>