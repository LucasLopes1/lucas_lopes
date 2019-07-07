<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<meta name="viewport" content="width=device-width">


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Poke Lista</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="script.js"></script>
</head>

 <?php include("conexao.php");?>

 	<nav class="navbar navbar-inverse" style="margin: 0 0 0 0 ;">
<div class="container-fluid">
	<div class="navbar-header">
      <a class="navbar-brand" href="index.php"><img id="poke" src="img/pokebola.png"></a>
    </div>
<ul class="nav navbar-nav">
	
	
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">
    
    <?php include("formFiltro.php");?></a></li>
    
    
    
</ul>
</div>
</nav>
</div>