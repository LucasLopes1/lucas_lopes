
<?php
	
 	include("header.php");
?>

<body>
	<div  class="container-fluid">
   <?php include("formBusca.php");?> 
   
   <div id="table">
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
           
		</tr>
		<?php
			include("listaDePoke.php");
		?>
	</table>
</div>
</div>
</body>

 <?php include ("footer.php");?>
</html>