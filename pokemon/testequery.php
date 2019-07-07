<body>
<?php
	$url= "https://www.pokemon.com/br/pokedex/shaymin";

	$dadosSite = file_get_contents($url);
	
	$var1= explode('<div class="profile-images">', $dadosSite);
  
  
	$var2 = explode('  <img src="https://assets.pokemon.com/assets/', $var1[1]);
	
	$img =  $var2[0];

	print $var2[0];
	include("conexao.php");
?>

<img src='<?php echo $img;?>'>
</body>

<nav class="navbar navbar-inverse" style="margin: 0 0 0 0 ;">
<div class="container-fluid">
	<div class="navbar-header">
      <a class="navbar-brand" href="index.php"><img src="img/pokebola.png"></a>
    </div>
<ul class="nav navbar-nav">
	<li class="active"><a class="config" href="index.php">Home </a></li>
	
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">
    
    <?php include("formFiltro.php");?></a></li>
    
    
    
</ul>

</div>
</nav>