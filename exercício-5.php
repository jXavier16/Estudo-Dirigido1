<?php

        //Calcule o tempo de uma viagem de carro. Pergunte a distância a percorrer e a velocidade média esperada para a viagem.\\

        print "Distância a ser percorrida:" ;
        $distancia = fgets (STDIN) ;

        print "Velocidade média:" ;
        $velocidade = fgets (STDIN) ;

        $tempo = $distancia / $velocidade ;

        print "O tempo de viagem estimado é de $tempo horas."