<?php

print "Qual a distância q você irá percorrer: ";
$dist_perc = (int) fgets(STDIN);
print "\n";

print "Qual a velocidade média q você irá viajar:";
$vel_perc = (int) fgets (STDIN);
print "\n";

$tempo_perc = $dist_perc/$vel_perc;

print "Sua viagem levará em média $tempo_perc horas.\n\n";
