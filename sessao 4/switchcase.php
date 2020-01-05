<?php

$diaDaSemana = date("w");

switch($diaDaSemana){

	case 0: 
	echo "Domingo";
	break;

	case 1: 
	echo "Segunda-feira";
	break;

	case 2: 
	echo "Terça-feira";
	break;

	case 3: 
	echo "Quarta-feira";
	break;

	case 4: 
	echo "Quinta-feira";
	break;

	case 5: 
	echo "Sexta-feira";
	break;

	case 6: 
	echo "Sabado";
	break;


	default:
	echo "Data Invalida";
	break;

}

//cada switch tem o seu case e seu break; sem o break continua testando as demais condições


//no caso do switch eu ja sei o que vai acontecer. Se igual vai executar. Diferente do if que ainda testa a condição e se verdadeira executa;



?>