<?php 
 print "Quantos metros quadrados você vai pintar? 2";
 $metros = (float) fgets(STDIN);
 print "\n\n";

 $tinta_para_ser_usada = $metros/6;

 $latas    = ceil($tinta_para_ser_usada/18);
 $prec_lat = $latas*80;
 $galoes   = ceil($tinta_para_ser_usada/3.6);
 $prec_gal = ($galoes)*25;



 print "Preço da lata de 18 litros: R$80,00\n";
 print "Preço do galão de 3,6 litros: R$25,00\n";

 print "Opção 1: somente em latas. \nOpção 2: comprar apenas em galões \nOpção 3: misturar latas e galões, de forma que o preço seja o menor. \n";
 $opc = fgets(STDIN);

 switch ($opc){
    case 1:
        print "Vocẽ comprará $latas lata(s) de tinta no preço de $prec_lat\n";
        break;
    
    case 2:
        print "Vocẽ comprará $galoes galão(es) de tinta no preço de $prec_gal\n";
        break;
    
    case 3:
        $a1 = $latas%18;
        $a2 = ceil($a1/3.6);
        $a3 = ($latas*80)+($a2*25);
        $a4 = ($a3)-($a3*0.10);    
        print "Vocẽ comprará $latas lata(s) e $a2 galão(es) de tinta no preço de: R\$$a4\n";
        break;
}
?>