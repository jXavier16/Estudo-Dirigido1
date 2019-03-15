<?php

        //Converta uma temperatura digitada em Celsius para Fahrenheit. F = 9*C/5 + 32\\

        print "Temperatura em Celsius:" ;
        $calsius = fgets (STDIN) ;

        $fahrenheit = (9 * ($calsius / 5 )) + 32;

        print "Essa temperatura em Fahrenheit fica $fahrenheit °F." ;