<?php
print "Quantos cigarros você fuma por dia?\n";
$cigarros_por_dia=(int)fgets(STDIN);

print "\nQuantos anos você fuma?\n";
$anos_fumados=(int)fgets(STDIN);

$cigarros_fumados=$cigarros_por_dia*365*$anos_fumados;
$minutos_perdidos=$cigarros_fumados*10;
$horas_perdidas=$minutos_perdidos/60;
$dias_perdido= round($horas_perdidas/24);

print "\nVocê perdeu $dias_perdido dias de vida\n";


