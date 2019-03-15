<?php 
  print "Coloque os km que você andou com o carro:\n";
  $km_rodados = (int)fgets (STDIN);
  print "\n";
  print "Coloque os dias que você andou com o carro:\n";
  $dias_rodados = (int)fgets (STDIN);
  print "\n";
  $total =(($dias_rodados*60)+$km_rodados*0.15);
  print "Você irá gastar R$$total,00";
  print "\n\n";
