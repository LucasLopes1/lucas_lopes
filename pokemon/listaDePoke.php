



<?php
		
		/*include("conexao.php");*/
		
		
		
$consulta = "SELECT * FROM mytable ORDER BY Name";



$executar_consulta = $conexao->query($consulta);		
while($registro = $executar_consulta->fetch_assoc()){
	$id = $registro["Row"];
	$nome = utf8_encode($registro["Name"]);
	$evolucao = utf8_encode($registro["Evolution_Stage"]);
	$tipo = utf8_encode($registro["Type_1"]);
	$clima = utf8_encode($registro["Weather_1"]);	
    $total = utf8_encode($registro["STAT_TOTAL"]);
    $ataque = utf8_encode($registro["ATK"]);
    $defesa = utf8_encode($registro["DEF"]);
    $especialAtaque = utf8_encode($registro["STA"]);				
	echo "<tr><td><a href=verPoke.php?id=$id/>$nome</a></td>
    		<td>$evolucao</td>
            <td>$tipo</td>
            <td>$clima</td>
            <td>$ataque</td>
            <td>$defesa</td>
            <td>$especialAtaque</td>
            <td>$total</td>
            
			
		</tr>";
	
	
	}?>