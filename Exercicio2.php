<?php

Print "Há quantos dias você usa o sistem:";

$dias_usando  = (int)fgets (STDIN);
$horas_usando = ceil ($dias_usando/24);
$minutos_usando = ceil ($dias_usando/60)
