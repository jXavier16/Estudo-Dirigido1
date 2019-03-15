<?php

        //Escreva um programa que pergunte a quantidade de km percorridos por um carro alugado pelo usuário, assim como a quantidade de dias pelos quais o carro foi alugado. Calcule o preço a pagar, sabendo que o carro custa R$ 60,00 por dia e R$ 0,15 por km rodado\\


        print "Dias de aluguel do carro:" ;
        $dias = fgets (STDIN) ;

        print "Km rodados:" ;
        $km_rodados = fgets (STDIN) ;

        $preco_total = ($dias * 60.00) + ($km_rodados * 0.15) ;

        print "Total a pagar: $preco_total reais." ;