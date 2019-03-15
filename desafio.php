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


        print "Quantos metros quadrados você vai pintar?" ;
 
	    $metros = (float) fgets(STDIN);
	    $tinta_para_ser_usada = $metros / 6 ;
        $latas    = ceil($tinta_para_ser_usada / 18) ;
        $prec_lat = $latas * 80 ;
	    $galoes   = ceil($tinta_para_ser_usada / 3.6) ;
	    $prec_gal = ($galoes) * 25 ;
 
	    print "Preço da lata de 18 litros: R$80,00 \n" ; 
	    print "Preço do galão de 3,6 litros: R$25,00 \n" ;
 
	    print "Opção 1: somente em latas. \n Opção 2: comprar apenas em galões \n Opção 3: misturar latas e galões, de forma que o preço seja o menor. \n" ;
	    $opc = fgets(STDIN) ;

 
	    switch ($opc){
        case 1:

            print "Você comprará $latas lata(s) de tinta no preço de $prec_lat reais \n" ;
        
	    break;
    
        case 2:

            print "Você comprará $galoes galão(es) de tinta no preço de $prec_gal reais \n" ;        
    
        break ;
   
        case 3:

            $a1 = $latas%18 ;

            $a2 = ceil($a1/3.6) ;

            $a3 = ($latas*80)+($a2*25) ;

            $a4 = ($a3)-($a3*0.10) ;
    
        print "Você comprará $latas lata(s) e $a2 galão(es) de tinta no preço de: $a4 reais \n" ;
        
        break ; 
}