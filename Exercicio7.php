<?php 

  print "Quantos km você andou com o carro?";
  $km_rodados = fgets (STDIN);
  print "\n";

  print "Quantos dias você andou com o carro?";
  $dias_rodados = fgets (STDIN);
  print "\n";

  $total =(($dias_rodados*60)+$km_rodados*0.15);

  print "Você irá gastar R$$total,00";
  print "\n\n";

 
