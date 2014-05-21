<?php
	$nome = "Josef";
	if (($nome=="Ricardo")||($nome=="Rodrigo")){
		echo ("Ricardo ou Rodrigo");
	}
	else if ($nome=="Alberto") {
		echo "Alberto";
	}
	else {
	echo ("outro nome");
	}
	
	
	echo("<br /><br />");
	
	$total=5;
	$cont=0;
	while ($cont<=$total){
		echo ('<br />CONT  agora vale: '.$cont);
		++$cont;
		
		echo("<br /><br />");
		}
		
		/*
		$nomes[0] = "Ricardo";
		$nomes[1] = "Rodrigo";
		$nomes[2] = "Alberto";
		*/
		
		$nomes = array("Ricardo","Rodrigo","Alberto","Joseh","Maria");
		
		$x=0;
		while ($x < sizeof($nomes)){
			echo ("O nome da posicao $x eh $nomes[$x] <br />");
			++$x;
		}
		
		$coisasparafazer = array("Estudar Calculo II", "Estudar LogicaII", "Terminar curso PHP");
		$i=0;
		while ($i<sizeof($coisasparafazer)){
			echo ("Eu tenho que: $coisasparafazer[$i]<br />");
			++$i;
		
		}
		 
		 
	
	
	
	
	
	/*
	operadores de comparação
	(a==b)-->igual; 
	(a===b)-->identico;
	(a!=b)-->diferente(usar essa)
	(a<>b)-->diferente
	(a!==b)-->nao identico
	(a<b)-->menor que
	(a>b)-->maior que
	(a<=b)-->menor ou igual
	(a>=b)-->maior ou igual	
	
	operadores logicos
	$a and $b -->e
	$a && $b -->e
	$a or $b -->ou
	$a || $b -->ou
	$a xor $b --> ou exclusivo
	
	*/
?>

