<?php

include("header.php");
$select_r= $_POST["select"];
$ataque_r= $_POST["ataque"];
$defesa_r= $_POST["defesa"];
$especial_r= $_POST["especial"];

$consulta = "SELECT * FROM mytable WHERE Type_1='$select_r'";

$executar_consulta = $conexao->query($consulta);		

	
	
 ?>
 

 <table class="table table-striped">
		<tr>
			<th>Nome</th>
            <th>Nivel de Evolução</th>
            <th>Tipo</th>
            <th>Clima</th>
            <th>Ataque</th>
            <th>Defesa</th>
            <th>Ataque Especial</th>
            <th>Total</th>
            <th></th>
		</tr>
		<?php
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
			if($ataque_r<=$ataque  && $defesa_r<=$defesa && $especial_r<=$especialAtaque){			
	echo "<tr><td><a href=verPoke.php?id=$id/>$nome </a></td>
    		<td>$evolucao</td>
            <td>$tipo</td>
            <td>$clima</td>
            <td>$ataque</td>
            <td>$defesa</td>
            <td>$especialAtaque</td>
            <td>$total</td>
            
			
		</tr>";}
		}
		?>
	</table></div>