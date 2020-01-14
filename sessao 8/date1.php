<?php
//timestamp / sempre no padrao ingles
//sempre no padrao do idioma do servidor

$ts =  strtotime("2001-09-11"); //aceita expressao, ex se eu escrever now pega de hoje
$ts = strtotime("now");//agora
$ts = strtotime("+1 week"); //proxima semana
echo date ("l, d/m/Y", $ts);

//01/01/1970 - marco zero do sistema de calendario dado o sistema unix



?>