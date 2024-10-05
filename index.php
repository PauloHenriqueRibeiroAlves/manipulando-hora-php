<?php
//para pegar a data atual
$date = new DateTime();

//para adicionar dois dias ao dia atual
$date->add( DateInterval::createFromDateString('2 days') );
//para diar dois dias é só substiruir o add pelo sub

//para pegar a data e hora de lgum lugar
//$date -> setTimezone( new DateTimeZone('America/Sao_Paulo') ); 

echo $date -> format('d/m/y H:i:s');


?>