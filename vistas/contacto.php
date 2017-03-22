<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>
	<article class="contenedorpag">
			<header>
			<img src="../img/ambiensup.png" alt="AMBIENSUP ANALISTAS PROFESIONALES" class="img-responsive pull-left">

			<div class="col-md-7 pull-right menu">
				<ul class="nav nav-tabs">
					<li role="presentation"><a href="../index.php">Inicio</a></li>
					<li role="presentation"><a href="nosotros.php">Quienes Somos</a></li>
					<li role="presentation"><a href="servicios.php">Servicios</a></li>
					<li role="presentation" class="active"><a href="contacto.php">Contacto</a></li>
				</ul>
			</div>
		</header>

    <a class="go-top" href="#">Subir</a>

		<ul class="breadcrumb text-right submenu">
		  <li><a href="../index.php">Inicio</a> <span class="divider"></span></li>
		  <li class="active">Contacto</li>
		</ul>


		<section id="contact" class="content-section text-center">
        <div class="contact-section">
            <div class="container">
              <h2>Formulario de Contacto</h2>
              <p>Porfavor dejanos tus comentarios a traves de este formulario y nosotros no comunicaremos lo mas pronto posible.</p>
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <form class="form-horizontal">
                    <div class="form-group">
                      <label for="exampleInputName2">Nombre (s)</label>
                      <input type="text" class="form-control" id="exampleInputName2" placeholder="Escribe tu nombre">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail2">Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail2" placeholder="ejemplo@ejemplo.com">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputtel">Teléfono</label>
                      <input type="text" class="form-control" id="exampleInputtel" placeholder="Escribe tu Teléfono">
                    </div>
                    <div class="form-group ">
                      <label for="exampleInputText">Comentario</label>
                     <textarea  class="form-control" placeholder="Escribenos tu mensaje"></textarea> 
                    </div>
                    <button type="submit" class="btn btn-default">Enviar Mensaje</button>
                  </form>

                  <hr>
                    
                </div>
              </div>
            </div>
        </div>
      </section>






		<?php include 'pie.php' ?>
	</article>

	<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/arriba.js"></script>
</body>
</html>