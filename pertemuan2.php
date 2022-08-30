<?php
    function greeting($nama,$thlahir,$usia){
        echo ('<h3>Hi, '.$nama.' !</h3>');
        echo ('You was born in '.$thlahir);
        echo ('<br>Now you are '.$usia.' years old');

    }

    greeting('Salsa',2002,20);
    greeting('Beta',2000,22);
    greeting('Gina',1998,24);

?>