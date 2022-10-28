<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio</title>
    <?php include './inc/link.php'; ?>
</head>

<body background="https://th.bing.com/th/id/R.1bd00dd4e6b384f6498698a52c39d7fc?rik=LFifWBZGEBvGOQ&riu=http%3a%2f%2fwww.educationquizzes.com%2fnature-matters%2fwp-content%2fuploads%2f2015%2f10%2fHalloween.jpg&ehk=BqpZ11InPbMV2IU23Zp6mrd2B%2fnSc7V2x0KNsbYHpaE%3d&risl=&pid=ImgRaw&r=0">
    <?php include './inc/navbar.php'; ?>
    
    <section id="slider-store" class="carousel slide" data-ride="carousel" style="padding: 0;">

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#slider-store" data-slide-to="0" class="active"></li>
            <li data-target="#slider-store" data-slide-to="1"></li>
            <li data-target="#slider-store" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="https://tofuu.getjusto.com/orioneat-local/resized2/fh4yYnyuuc9tBeCDv-x-1800.webp" alt="slider1">
                <div class="carousel-caption">
                    PROMOCION 1
                </div>
            </div>
            <div class="item">
                <img src="https://tofuu.getjusto.com/orioneat-local/resized2/Qew5bvo7TaweSJRqJ-x-1800.webp" alt="slider2">
                <div class="carousel-caption">
                    PROMOCION 2
                </div>
            </div>
            <div class="item">
                <img src="https://tofuu.getjusto.com/orioneat-prod-resized/eGKedyhXnyhQas2cZ-x-1800.webp" alt="slider3">
                <div class="carousel-caption">
                    PROMOCION 3
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#slider-store" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#slider-store" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </section>
    

    <section id="new-prod-index">    
         <div class="container">
            <div class="page-header">
                <h1>Lo mas visto <small>.....</small></h1>
            </div>
            <div class="row">
              	<?php
                  include 'library/configServer.php';
                  include 'library/consulSQL.php';
                  $consulta= ejecutarSQL::consultar("SELECT * FROM producto WHERE Stock > 0 AND Estado='Activo' ORDER BY id DESC LIMIT 7");
                  $totalproductos = mysqli_num_rows($consulta);
                  if($totalproductos>0){
                      while($fila=mysqli_fetch_array($consulta, MYSQLI_ASSOC)){
                ?>
                <div class="col-xs-12 col-sm-6 col-md-4">
                     <div class="thumbnail">
                       <img class="img-product" src="assets/img-products/<?php if($fila['Imagen']!="" && is_file("./assets/img-products/".$fila['Imagen'])){ echo $fila['Imagen']; }else{ echo "default.png"; } ?>">
                       <div class="caption">
                       		<h3><?php echo $fila['Marca']; ?></h3>
                            <p><?php echo $fila['NombreProd']; ?></p>
                            <?php if($fila['Descuento']>0): ?>
                             <p>
                             <?php
                             $pref=number_format($fila['Precio']-($fila['Precio']*($fila['Descuento']/100)), 2, '.', '');
                             echo $fila['Descuento']."% descuento: $".$pref; 
                             ?>
                             </p>
                             <?php else: ?>
                              <p>$<?php echo $fila['Precio']; ?></p>
                             <?php endif; ?>
                        <p class="text-center">
                            <a style="background-color: #9C408A; color: #FFD700;"href="infoProd.php?CodigoProd=<?php echo $fila['CodigoProd']; ?>" class="btn btn-primary btn-sm btn-raised btn-block"><i class="fa fa-plus"></i>&nbsp; Ver Producto</a>
                        </p>
                       </div>
                     </div>
                </div>     
                <?php
                     }   
                  }else{
                      echo '<h2>No hay productos registrados en la tienda</h2>';
                  }  
              	?>  
            </div>
         </div>
    </section>
    <section id="reg-info-index">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 text-center">
                   <article style="margin-top:5%;">
                        <p><img src="https://s3.amazonaws.com/orion-eat-app-files/orioneat-prod%2FwQuduccfCyAoqssBe-logo-Tambo.png" alt="Logo" width="120" height="50"></p>
                        <h3>Registrate</h3>
                        <p>Registrate como cliente de <span class="tittles-pages-logo"> TAMBO </span> en un sencillo formulario para poder completar tus pedidos</p>
                        <p><a href="registration.php" class="btn btn-info btn-raised color=red" style="background-color: #9C408A; color: white;">Registrarse</a></p> 
                        <iframe src="https://web.powerva.microsoft.com/environments/Default-28e5818e-59f8-44a7-94e2-e5b3d25e539d/bots/new_bot_104d8d35164943ee8e7e3f7abe091ce6/webchat" frameborder="0" style="width: 100%; height: 500px;"></iframe>
                   </article>
                   <div class="col-xs-12 col-sm-6">
                    <!-- <img src="assets/img/camisas.jpg" alt="Smart-TV" class="img-responsive" style="width: 70%; display: block; margin: 0 auto;"> -->
                </div>
            </div>
        </div>
    </section>
                </div>

                
            </div>
        </div>
    </section>

    <?php include './inc/footer.php'; ?>
</body>
</html>