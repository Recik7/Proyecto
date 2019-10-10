<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>perfil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css" />
    <link rel="stylesheet" href="css/all.css">
    <link rel="icon" href="img/favicon.ico">
</head>
<body>
<?php
    require_once('navbar.html')
?>
             
      <main role="main" class="col-12 col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="conteiner">
          <div class="row">
            <div class="col-12">
              <div class="banner">
                <div class="bg" style="background-image:url(img/banner.jpg)">
                  <div class="redes"><i class="fab fa-facebook-square"></i><i class="fab fa-twitter-square"></i><i class="fas fa-paperclip"></i></div>
                </div>
                
              </div>
            </div>  
          </div>          
                <div class="imagen-cover">
                  <div class="imagen">
                  <figure style="text-align: center"><img class="img-thumbnail" src="img/kfc.png" ></figure>
                  </div>
              </div>
              <div class="descripcion">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae labore, libero iusto non quasi quam consequuntur quidem iure placeat assumenda. Eaque, sequi dignissimos. Accusamus iure voluptatum rerum nihil repudiandae odio ducimus ex omnis earum optio molestiae, quasi, asperiores sint dignissimos sit nisi? Magnam rerum ratione distinctio soluta eaque at labore.</div>
            
              <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link" href="perfil.php">Promociones</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="perfil-productos.php">Productos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="perfil-sucursales.php">Sucursales</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="perfil-contactos.php">Contactos</a>
                </li>
              </ul>
            <br>
   
              <hr>
            <div class="conteiner">
            <h3 style="text-align: center; margin:20px">Promociones</h3>
            <div class="row justify-content-around">
              <div class="col-5"><img src="img/promo1.jpg"></div>
              <div class="col-5"><img src="img/promo2.jpg"></div>
            </div> 
            <button type="button" class="btn btn-primary centrado">Ver Mas</button>
              <hr>
            <h3 style="text-align: center; margin:20px">Productos</h3>
            <div class="row justify-content-around">
              <div class="col-5"><img src="img/promo1.jpg"></div>
              <div class="col-5"><img src="img/promo2.jpg"></div>
            </div>
            <button type="button" class="btn btn-primary centrado">Ver Mas</button>
          </div>
          
        </div>

              
              
        </div>
      </main> 
    </div>
               
              
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>       

</body>
</html>