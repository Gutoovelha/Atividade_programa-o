<?php

print "Coloque a temperatura em C (celsius): ";
$celsius = fgets (STDIN);
print "\n";

$far = (9*$celsius /5) + 32;  
print "A temperatura em Fahrenheit será: $far \n";