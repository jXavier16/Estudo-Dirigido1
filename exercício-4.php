<?php

        //Solicite o preço de uma mercadoria e o percentual de desconto. Exiba o valor do desconto e o preço a pagar.\\

        print "Digite o valor da mercadoria:" ;
        $mercadoria = fgets (STDIN) ;

        print "Digite o valor do desconto:" ;
        $desconto = fgets (STDIN) ;

        $desconto_total = $mercadoria * ($desconto / 100) ;
        $valor_novo = ($mercadoria - $desconto_total) ;

        print "O valor da mercadoria com desconto fica $valor_novo reais." ;
        print "O desconto foi de $desconto_total reais." ;