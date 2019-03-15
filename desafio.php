<?php

        /*(DESAFIO) Faça um Programa para uma loja de tintas. O programa deverá pedir o tamanho em metros
        quadrados da área a ser pintada. Considere que a cobertura da tinta é de 1 litro para cada 6 metros
        quadrados e que a tinta é vendida em latas de 18 litros, que custam R$ 80,00 ou em galões de 3,6 litros,
        que custam R$ 25,00. Informe ao usuário as quantidades de tinta a serem compradas e os respectivos
        preços em 3 situações:
        a. comprar apenas latas de 18 litros;
        b. comprar apenas galões de 3,6 litros;
        c. misturar latas e galões, de forma que o preço seja o menor. Acrescente 10% de folga e sempre
        arredonde os valores para cima, isto é, considere latas cheias.*/


        print "Digite o tamanho em metros quadrados da área a ser pintada:" ;
        
        $areapintada = fgets(STDIN) ;
        $area_folga = $areapintada+(($areapintada*10)/100) ;
        $quantidade_lata = ceil($area_folga/108) ;  
        $preco_lata = $quantidade_lata*80 ; 
        
        print "Você precisará de $quantidade_lata lata(s) de 18L. \n" ;
        print "O preço será de " .'R$' ."$preco_lata. \n" ;
        print "\n" ;
        print "ou \n" ;
        print "\n" ;
        
        $quantidade_galao = ceil($area_folga/21.6) ;
        $preco_galao = $quantidade_galao*25 ;
        
        print "Você precisará de $quantidade_galao galão(ões) de 3,6L. \n" ;
        print "O preço será de R$ $preco_galao. \n" ;
        print "\n" ;
        print "ou \n" ;
        print "\n" ;
        
        $quantidade_galao2 = $quantidade_galao ;
        $quantidade_lata2 = 0 ;
    
        while ($quantidade_galao2 >= 5) {
        
        $quantidade_lata2 = $quantidade_lata2 + 1 ;
        $quantidade_galao2 = $quantidade_galao2 - 5 ;
        }
      
        $total_a_pagar = ($quantidade_galao2*25)+($quantidade_lata2*80) ;
        
        print "Você precisará de $quantidade_galao2 galão(ões) e $quantidade_lata2 lata(s) de tinta. \n" ;
        print "O total a pagar será de " .'R$' ."$total_a_pagar" ;
