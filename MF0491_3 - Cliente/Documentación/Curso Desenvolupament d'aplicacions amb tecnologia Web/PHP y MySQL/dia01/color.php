<?php
	/*
		La arroba ignora el error que 
		pudiese haber
	*/
	$color = @$_GET['rgb'];

?><!DOCTYPE html>
<html>
<head>
<title>Color</title>
<meta charset="utf-8" />
<style>
  body {
	  background-color:#<?php echo $color; ?>;
  }
</style>
</head>
<body>
<h1>Color</h1>
<ul>
  <li><a href="color.php?rgb=f00">Rojo</a></li>
  <li><a href="color.php?rgb=0f0">Verde</a></li>
  <li><a href="color.php?rgb=00f">Azul</a></li>
  <li><a href="color.php?rgb=ff0">Amarillo</a></li>
  <li><a href="color.php?rgb=0ff">Cian</a></li>
  <li><a href="color.php?rgb=f0f">Magenta</a></li>
  <li><a href="color.php?rgb=fff">Blanco</a></li>
</ul>
</body>
</html>