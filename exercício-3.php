<?php   

        //Faça um programa que calcule o aumento de um salário. Ele deve solicitar o valor do salário e a porcentagem do aumento. Exiba o valor do aumento e do novo salário.\\

        print "Digite seu salário:" ;
        $salario = fgets (STDIN) ;

        print "Digite a porcentagem do aumento:" ;
        $aumento = fgets (STDIN) ;
        
        $aumento_total = $aumento / 100 ;
        $salario_novo = $salario * $aumento_total ;

        print "O salário atual é $salario_novo reais." ;
        print "O aumento foi de $aumento_total reais." ;