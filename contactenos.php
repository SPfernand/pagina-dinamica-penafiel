<html>

<? 

include('head.php');
include('header.php');

?>

<body>



<br>
<div class="container">
<div class="row">


<div class="col-md-6">
<h2>Direcciones</h2>

<p>Telefono:785874897647</p>
<p>E-mail:correo@add.com</p>
</ul>

<form method="post" action="envia.php">
<div class="col-md-6">
<input class="form-control" type="texto" placeholder="Nombre" name="nombre"><br>
<input class="form-control" type="texto" placeholder="Apellido" name="apellido"><br>

</div>

<div class="col-md-6">
<input class="form-control" type="texto" placeholder="Telefono" name="telefono"><br>
<input class="form-control" type="texto" placeholder="Email" name="correo"><br>
</div>

</form>

</div>

<div class="col-md-6">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.793245186635!2d-78.4428824258734!3d-0.20313423539967176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d590dd3e2adf5d%3A0x611905e4102057e2!2sInstituci%C3%B3n%20Educativa%20Fiscal%20Cumbay%C3%A1!5e0!3m2!1ses!2sec!4v1714786200710!5m2!1ses!2sec" width="100%" height="450%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</div>
</div>


</body>
<br>
<?php include('footer.php');?>
</html>