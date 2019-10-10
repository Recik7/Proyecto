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
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">    
              <h2>Configuracion</h2>
            </div>
        <hr>
            <div>
                
                <div class="caja-config-1">
                  <div class="caja-config-2">
                    <p>Imagen de perfil</p>
                    <div class="row">
                        <div class="col-2">
                            <figure class="tw-avatar tw-avatar--size-100"><img class="img-thumbnail"  src="img/logo1.jpg"></figure>
                        </div>
                        <div class="col-9">
                                <form method="post" enctype="multipart/form-data"><br>
                                    <input value="subir" type=file size=60 name="file1"><br>
                                    <!--<input type=submit value="subir"><br>  -->
                                </form>
                        </div>
                    </div>
                  </div>
                    <div class="caja-config-2">
                        <p>Banner del perfil</p>
                      <div class="row">
                          <div class="col-2">
                              <figure class="tw-avatar tw-avatar--size-100"><img class="img-thumbnail"  src="img/logo1.jpg"></figure>
                          </div>
                          <div class="col-9">
                                  <form method="post" enctype="multipart/form-data"><br>
                                      <input value="subir" type=file size=60 name="file1"><br>
                                      <!--<input type=submit value="subir"><br>  -->
                                  </form>
                          </div>
                      </div>
                    </div>
                  <div class="caja-config-2">
                        <div class="row">
                            <div class="col-2">
                                <label for="">Nombre de la Empresa</label>
                            </div>
                            <div class="col-10">
                                <input type="text">
                            </div>
                        </div>
                    </div>
                 <div class="caja-config-2">
                     <div class="row">
                         <div class="col-2">
                             <label for="">Tipo de Compañia</label>
                         </div>
                         <div class="col-10">
                             <input type="text">
                         </div>
                     </div>
                 </div>
                 <div class="caja-config-2">
                        <div class="row">
                            <div class="col-2">
                                <label for="">Nombre de la Empresa</label>
                            </div>
                            <div class="col-10">
                                <input type="text">
                            </div>
                        </div>
                    </div>
                 <div class="caja-config-2">
                     <div class="row">
                         <div class="col-2">
                             <label for="">Tipo de Compañia</label>
                         </div>
                         <div class="col-10">
                             <input type="text">
                         </div>
                     </div>
                 </div>
                 <div class="caja-config-2">
                    <div class="row">
                        <div class="col-2">
                            <label for="">Direccion</label>
                        </div>
                        <div class="col-10">
                            <input type="text">
                            <p>(calle, barrio, ciudad y pais)</p>
                        </div>
                    </div>
                </div>
                



  </div>
  </main> 
</div>
 





        
      <!--  <div class="col-10">-->
        
   <!-- </div>
    </div>
    </div>-->

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>