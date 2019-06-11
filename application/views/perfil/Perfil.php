
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Perfil</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Perfil</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"> <img src="<?= base_url('uploads/users').'/'.$consulta->img?>" class="rounded-circle" width="150" />
                                    <h4 class="card-title m-t-10"><?= $consulta->user ?></h4>
                                    <h6 class="card-subtitle">Rango tipo <?= $consulta->nivel ?></h6>
                                </center>
                            </div>
                            <div>
                                <hr> </div>
                            <div class="card-body"> <small class="text-muted">Dirección de correo electrónico </small>
                                <h6><?= $consulta->email ?></h6> <small class="text-muted p-t-30 db">Telefono</small>
                                <h6><?= $consulta->telefono ?></h6> <small class="text-muted p-t-30 db">Dirección</small>
                                <h6><?= $consulta->direccion ?></h6>
                                <div class="map-box">
                                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30242.407256677714!2d-91.81595441179472!3d18.650488347398063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85f107095727efc5%3A0x9d5f9130697691c5!2sCd+del+Carmen%2C+Camp.!5e0!3m2!1ses-419!2smx!4v1550332830799" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Tabs -->
                            <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-setting-tab" data-toggle="pill" href="#previous-month" role="tab" aria-controls="pills-setting" aria-selected="false">Ajuste</a>
                                </li>
                            </ul>
                            <!-- Tabs -->
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="previous-month" role="tabpanel" aria-labelledby="pills-setting-tab">
                                    <div class="card-body">
                                        <form class="form-horizontal form-material" action="<?= base_url() ?>Perfil_controller/setActualizar<?php if($id_user != $consulta->id){echo "/".$consulta->id;}  ?>" method="post" name="edicionCorrecta" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label class="col-md-12">Nombre Completo</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line" value="<?= $consulta->user ?>" name="nombre">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input type="email" placeholder="johnathan@admin.com" class="form-control form-control-line" name="email" id="example-email" value="<?= $consulta->email ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Contraseña</label>
                                                <div class="col-md-12">
                                                    <input type="password" value="<?= $consulta->pass ?>" class="form-control form-control-line" id="password" name="pass">
                                                </div>
                                                <div class="col-md-6 button-group">
                                                  <button type="button" class="btn waves-effect waves-light btn-info" onclick="mostrarContrasena()">Ver contraseña</button>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Telefono</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="123 456 7890" class="form-control form-control-line" value="<?= $consulta->telefono ?>" name="telefono">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                              <label class="col-md-12">Cambiar Foto</label>
                                              <div class="col-md-12">
                                                  <div class="custom-file">
                                                      <input type="file" class="form-control-file" name="perfil">
                                                  </div>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success">Actualizar Perfil</button>
                                                </div>
                                            </div>
                                        </form>
                                        <script>
                                            function mostrarContrasena(){
                                                var tipo = document.getElementById("password");
                                                if(tipo.type == "password"){
                                                    tipo.type = "text";
                                                }else{
                                                    tipo.type = "password";
                                                }
                                            }
                                          </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
