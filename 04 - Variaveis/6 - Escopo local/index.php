<?php

    $x = 10;

    echo "$x global <br>";
    function teste() {

        $x = 5;

        echo "$x local <br>";
    }
    
    teste();

    function testando() {
        
        $x= 15;
        echo "$x local dois <br>";
    }

    testando();
    teste();

    echo "$x global <br>";

?>