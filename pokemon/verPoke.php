<script src="script.js"></script>
<?php
		include("header.php");

	$id=$_GET['id'];
	
	
	
	$consulta = "SELECT * FROM mytable WHERE Row='$id'";
	

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
	$pokedexNun = utf8_encode($registro["Pokedex_Number"]);
	$geracao = utf8_encode($registro["Generation"]);
	$lendario = utf8_encode($registro["Legendary"]);	
		}
	?>
	
    
    <h1 align="center"><?php echo $nome; ?></h1>
  <div class="linha">  
   <?php
	$url= "https://www.pokemon.com/br/pokedex/".$nome;

	$dadosSite = file_get_contents($url);
	
	$var1= explode('<div class="profile-images">', $dadosSite);
  
  
	$var2 = explode(' </div>', $var1[1]);
	
	$img =  $var2[0];

	print $var2[0];
?>
</div>
<div class="linha">
    <h3>Tipo: <?php echo $tipo; ?></h3>
    <h3>Clima: <?php echo $clima; ?></h3>
    <h3>Evolução: <?php echo $evolucao; ?></h3>
    <h3>Geração: <?php echo $geracao; ?></h3>
	<table>
    	<tr>
        	<td>Ataque</td><td>Defesa</td><td>Especial</td>
        </tr>    	   
        <tr>
        	<td><?php echo $ataque; ?></td><td><?php echo $defesa; ?></td><td><?php echo $especialAtaque; ?></td>
        </tr>
     </table>
     <?php 
	 	if($lendario == 0 ){
			echo "";
			} else{
				"<h2> Lendário </h2>";
				} 
	 ?>       	     
     <div class="form-group">
			<button type="submit" class="btn btn-primary" onclick="Alerta()" >Editar</button>
		</div>
     </div>
     <?php include ("footer.php");?>