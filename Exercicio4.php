<?php

print "Coloque o preço de sua mercadoria: ";
$mercadoria =(int) fgets(STDIN);
print "\n";

print "Coloque o desconto de sua mercadoria: ";
$desconto = (int)fgets(STDIN);
print "\n";


$mer_desconto = $mercadoria*($desconto/100);
print "\n";

$final = $mercadoria - $mer_desconto;
print "O valor da mercadoria com o desconto será: $final \n";

print "O valor de deconto será: $mer_desconto\n ";
print "\n";