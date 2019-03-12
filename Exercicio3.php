<?php

print"Insira o seu salário: ";
$salario = fgets(STDIN);
print"\n\n";

print"Insira a porcentagem do aumento de seu salário: ";
$porcent = fgets(STDIN);
print"\n\n";

$novosalario = ceil($salario*$porcent);
print"\n\n";

print "O seu novo salário será $novosalario.";
print"\n\n";