<?php   

        //Escreva um programa que leia um valor em metros e o exiba convertido em milímetros.\\

        print "Digite um número em metros:" ;
        $numero = fgets (STDIN) ;

        $milimetros = ( $numero * 1000 ) ;

        print "Esse número convertido fica em $milimetros milimetros." ;
