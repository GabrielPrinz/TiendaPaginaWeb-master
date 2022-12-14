<!DOCTYPE html>
<html lang="es">
<head>
    <title>Registro</title>
    <?php include './inc/link.php'; ?>
</head>
<body background="https://th.bing.com/th/id/R.1bd00dd4e6b384f6498698a52c39d7fc?rik=LFifWBZGEBvGOQ&riu=http%3a%2f%2fwww.educationquizzes.com%2fnature-matters%2fwp-content%2fuploads%2f2015%2f10%2fHalloween.jpg&ehk=BqpZ11InPbMV2IU23Zp6mrd2B%2fnSc7V2x0KNsbYHpaE%3d&risl=&pid=ImgRaw&r=0">
    <?php include './inc/navbar.php'; ?>
    <section id="form-registration">
        <div class="container">
            <div class="page-header">
              <h1><img src="https://s3.amazonaws.com/orion-eat-app-files/orioneat-prod%2FwQuduccfCyAoqssBe-logo-Tambo.png" alt="Logo" width="120" height="50"> <small class="tittles-pages-logo">REGISTRO</small></h1>
            </div>
            <p class="lead text-center">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident assumenda asperiores architecto nostrum blanditiis excepturi voluptatibus, velit ad enim. Aperiam voluptatum est, fugit quisquam libero distinctio nobis porro numquam minus.
            </p>
            <div class="row">
                <div class="col-sm-5 text-center">
                    <figure>
                      <img src="./assets/img/img-registration.png" alt="store" class="img-responsive">
                    </figure>
                </div>
                <div class="col-sm-7">
                    <div id="container-form">
                       <p class="text-center lead">Registro de Clientes</p>
                       <br><br>
                       <form class="FormCatElec" action="process/regclien.php" role="form" method="POST" data-form="save">
                          <div class="container-fluid">
                            <div class="row">
                              <div class="col-xs-12">
                                <legend><i class="fa fa-user"></i> &nbsp; Datos personales</legend>
                              </div>
                              <div class="col-xs-12">
                                <div class="form-group label-floating">
                                  <label class="control-label"><i class="fa fa-address-card-o" aria-hidden="true"></i>&nbsp; Ingrese su n??mero de DNI</label>
                                  <input class="form-control" type="text" required name="clien-nit" pattern="[0-9]{1,15}" title="Ingrese su n??mero de DNI. Solamente n??meros" maxlength="15" >
                                </div>
                              </div>
                              <div class="col-xs-12 col-sm-6">
                                <div class="form-group label-floating">
                                  <label class="control-label"><i class="fa fa-user"></i>&nbsp; Ingrese sus nombres</label>
                                  <input class="form-control" type="text" required name="clien-fullname" title="Ingrese sus nombres (solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="50">
                                </div>
                              </div>
                              <div class="col-xs-12 col-sm-6">
                                <div class="form-group label-floating">
                                  <label class="control-label"><i class="fa fa-user"></i>&nbsp; Ingrese sus apellidos</label>
                                  <input class="form-control" type="text" required name="clien-lastname" title="Ingrese sus apellido (solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="50">
                                </div>
                              </div>
                              <div class="col-xs-12 col-sm-6">
                                <div class="form-group label-floating">
                                  <label class="control-label"><i class="fa fa-mobile"></i>&nbsp; Ingrese su n??mero telef??nico</label>
                                    <input class="form-control" type="tel" required name="clien-phone" maxlength="15" title="Ingrese su n??mero telef??nico. M??nimo 8 digitos m??ximo 15">
                                </div>
                              </div>
                              <div class="col-xs-12 col-sm-6">
                                <div class="form-group label-floating">
                                  <label class="control-label"><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp; Ingrese su Email</label>
                                    <input class="form-control" type="email" required name="clien-email" title="Ingrese la direcci??n de su Email" maxlength="50">
                                </div>
                              </div>
                              <div class="col-xs-12">
                                <div class="form-group label-floating">
                                  <label class="control-label"><i class="fa fa-home"></i>&nbsp; Ingrese su direcci??n</label>
                                  <input class="form-control" type="text" required name="clien-dir" title="Ingrese la direci??n en la reside actualmente" maxlength="100">
                                </div>
                              </div>
                              <div class="col-xs-12">
                                <legend><i class="fa fa-lock"></i> &nbsp; Datos de la cuenta</legend>
                              </div>
                              <div class="col-xs-12">
                                <div class="form-group label-floating">
                                  <label class="control-label"><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp; Ingrese su nombre de usuario</label>
                                    <input class="form-control" type="text" required name="clien-name" title="Ingrese su nombre. M??ximo 9 caracteres (solamente letras y numeros sin espacios)" pattern="[a-zA-Z0-9]{1,9}" maxlength="9">
                                </div>
                              </div>
                              <div class="col-xs-12 col-sm-6">
                                <div class="form-group label-floating">
                                  <label class="control-label"><i class="fa fa-lock"></i>&nbsp; Introduzca una contrase??a</label>
                                  <input class="form-control" type="password" required name="clien-pass" title="Defina una contrase??a para iniciar sesi??n">
                                </div>
                              </div>
                              <div class="col-xs-12 col-sm-6">
                                <div class="form-group label-floating">
                                    <label class="control-label"><i class="fa fa-lock"></i>&nbsp; Repita la contrase??a</label>
                                    <input class="form-control" type="password" required name="clien-pass2" title="Repita la contrase??a">
                                </div>
                              </div>
                            </div>
                          </div>
                          <p><button type="submit" class="btn btn-primary btn-block btn-raised" style="background-color: #9C408A; color: white;">Registrarse</button></p>
                        </form> 
                    </div> 
                </div>
            </div>
        </div>
    </section>
    <?php include './inc/footer.php'; ?>
</body>
</html>