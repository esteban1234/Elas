<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>
	
  <article class="encabezado">
  <article class="encabezadouno">
    <div class="dentro">
      <li>Contsrución</li>
      <li>Renta de maquinarias</li>
      <li>Diseño</li>
    </div>
  </article>

  <article class="encabezadodos">
    <figure class="logo pull-left" style="margin-left: 6%;">
      <img src="../img/logo.png" alt="ELAS CONSTRUCTORA DEL MAYAB" class="img-responsive">
    </figure>


    <div class="contendatos pull-right">
      <article class="contentel">
        <article class="iconot pull-left">
          <i class="fa fa-phone fa-5x" aria-hidden="true"></i>
        </article>
        <article class="textot pull-right">
          <p class="negrita">Teléfono</p>
          <p>999-10-10-102</p>
        </article>
      </article>

      <article class="contenofi">
        <article class="icono pull-left">
          <i class="fa fa-home fa-5x" aria-hidden="true"></i>
        </article>
        <article class="texto pull-right">
          <p class="negrita">Oficina</p>
          <p>C.3 #235 entre 32 y 36 Col. Campestre, Mérida, Yucatán. C.P.97120</p>
        </article>
      </article>

      <article class="contenofi">
        <article class="icono pull-left">
          <i class="fa fa-clock-o fa-5x" aria-hidden="true"></i>
        </article>
        <article class="texto pull-right">
          <p class="negrita">Horario</p>
          <p>Lun - Vie 9am - 6pm</p>
        </article>
      </article>
    </div>

  </article>
</article>

<article class="menu">
  <ul>
    <li><a href="../index.php">INICIO</a></li>
    <li><a href="nosotros.php">QUIENES SOMOS</a></li>
    <li><a href="servicios.php">SERVICIOS</a></li>
    <li class="select"><a href="contacto.php">CONTACTO</a></li>
  </ul>
</article>

<div class="mapa">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.5476717826127!2d-89.61691898561354!3d21.010761386008127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5676babcff192b%3A0xb2f700e1910ec7ca!2sCalle+3+235%2C+Campestre%2C+97120+M%C3%A9rida%2C+Yuc.!5e0!3m2!1ses-419!2smx!4v1490657306551" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<div class="formulario">
  <div class="col-md-12">
      <div class="form-area">  
          <form role="form">
          <br style="clear:both">
                      <h3 style="margin-bottom: 25px; text-align: center;">Formulario de contacto</h3>
              <div class="form-group">
              <input type="text" class="form-control" id="name" name="name" placeholder="Nombre(s)" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Teléfono" required>
            </div>
            <!-- <div class="form-group">
              <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
            </div> -->
                      <div class="form-group">
                      <textarea class="form-control" type="textarea" id="message" placeholder="Mensaje" maxlength="140" rows="7"></textarea>
                          <span class="help-block"><p id="characterLeft" class="help-block ">Has alcanzado el límite</p></span>                    
                      </div>
              
          <button type="button" id="submit" name="submit" class="btn btn-warning pull-right">Enviar</button>
          </form>
      </div>
  </div>

</div>



<a class="go-top" href="#">Subir</a>
<?php include 'pie.php' ?>

<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/arriba.js"></script>
<script src="../js/contacto.js"></script>
</body>
</html>