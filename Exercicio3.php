<?php
print"Insira o seu salário: ";
$salario = (int)fgets(STDIN);
print"\n";
print"Insira a porcentagem do aumento de seu salário: ";
$porcent = (int)fgets(STDIN);
print"\n";
$novosalario = ceil($salario*$porcent);
print "O seu novo salário será $novosalario.\n";
