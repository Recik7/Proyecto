<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Monlai</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css" />
    <link rel="icon" href="img/favicon.ico">
    <!--<link rel="stylesheet" href="css/jquery.hislide.min.css" />-->
</head>
<body>
<?php
    require_once('navbar.html')
?>
          
<main role="main" class="col-12 col-md-9 ml-sm-auto col-lg-10 px-4">

<hr>

<div class="row">
<div class="col-12 col-sm-6 col-md-6 col-lg-4 col-md-6">
    <div class="card" style="width: 18rem;height: 20rem; margin-bottom: 20px">
        <img src="img/1.jpg" class="card-img-top" style="margin: 5px; width: 96%; height: 60%">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
</div>
<div class="col-12 col-sm-6 col-md-6 col-lg-4 col-md-6">
    <div class="card" style="width: 18rem;height: 20rem; margin-bottom: 20px">
        <img src="img/1.jpg" class="card-img-top" style="margin: 5px; width: 96%; height: 60%">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
</div>
<div class="col-12 col-sm-6 col-md-6 col-lg-4 col-md-6">
    <div class="card" style="width: 18rem;height: 20rem; margin-bottom: 20px">
        <img src="img/1.jpg" class="card-img-top" style="margin: 5px; width: 96%; height: 60%">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
</div>
<div class="col-12 col-sm-6 col-md-6 col-lg-4 col-md-6">
    <div class="card" style="width: 18rem;height: 20rem; margin-bottom: 20px">
        <img src="img/promo1.jpg" class="card-img-top" style="margin: 5px; width: 96%; height: 60%">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
</div>
<div class="col-12 col-sm-6 col-md-6 col-lg-4 col-md-6">
    <div class="card" style="width: 18rem;height: 20rem; margin-bottom: 20px">
        <img src="img/promo1.jpg" class="card-img-top" style="margin: 5px; width: 96%; height: 60%">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
</div>
<div class="col-12 col-sm-6 col-md-6 col-lg-4 col-md-6">
    <div class="card" style="width: 18rem;height: 20rem; margin-bottom: 20px">
        <img src="img/1.jpg" class="card-img-top" style="margin: 5px; width: 96%; height: 60%">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
</div>



      </div>


  </div>
  </main> 
</div>
 




<div class="modal fade" id="modal-sesion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Iniciar sesion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4>Correo</h4>
        <input placeholder="Caratula" id="caratula" type="text" class="form-control">
        <h4>Contraseña</h4>
        <input placeholder="Titulo" id="titulo" type="text" class="form-control">
        <select placeholder="Categoria" id="categoria" class="form-control">
          <option>Seleccione una categoria</option>
        </select>
        <label>Principal <input type="checkbox" id="principal"></label>
        <label>Ultima Hora <input type="checkbox" id="ultima-hora"></label>
      </div>
      <div class="modal-footer">
        <button id="btn-guardar" type="button" class="btn btn-primary">Guardar noticia</button>
      </div>
    </div>
  </div>
</div>
        
      <!--  <div class="col-10">-->
        
   <!-- </div>
    </div>
    </div>-->

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.hislide.js" ></script> 
</body>
</html>