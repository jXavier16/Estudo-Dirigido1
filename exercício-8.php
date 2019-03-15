<?php

        //Escreva um programa para calcular a redução do tempo de vida de um fumante. Pergunte a quantidade de cigarros fumados por dia e quantos anos ele já fumou. Considere que um fumante perde 10 minutos de vida a cada cigarro, calcule quantos dias de vida um fumante perderá. Exiba o total de dias.\\

        print "Quantos anos você fuma ?" ;
        $anos = fgets (STDIN) ;

        print "Quantos cigarros você fuma por dia ?" ;
        $cigarros = fgets (STDIN) ;

        $anos = ($anos * 365) ;
        $minutos_dias = ($cigarros * 10) / 24 ;
        $total_dias = $anos + $minutos_dias ;

        print "Vocêperdeu $total_dias dias de vida." ;
    