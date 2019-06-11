
    <div id="main-wrapper">

    

        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Administrar Cuentas</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Cuentas</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
            <?php
            if (isset($_GET['creado'])) {
              $mensaje = $_GET['creado'];
                ?>
                <input type="text" id="mensajeCreado" value="<?= $mensaje?>" style="display:none;">
                <?php

            }
            ?>

            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Crear Cuentas</h4>
                                <form class="m-t-30" action="<?= base_url() ?>Cuentas_controller/crearusuario" method="post"  enctype="multipart/form-data">
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Nombre Completo*</label>
                                          <input type="text" class="form-control" value="" placeholder="Nombre" name="name" required>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label class="control-label">Puesto*</label>
                                          <select class="form-control custom-select" data-placeholder="Elegir tipo de permiso" tabindex="0" name="nivel" required>
                                            <option value="">Selecciona el tipo de puesto</option>
                                            <option value="1">Super usuario</option>
                                            <option value="2">Administrador</option>
                                            <option value="3">Inspector</option>
                                          </select>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="">Correo electrónico*</label>
                                          <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Correo" name="email" required>
                                      </div>
                                    </div>
                                    <div class="col-md-3">
                                      <div class="form-group">
                                          <label for="">Contraseña*</label>
                                          <?php
                                          $pass = substr(md5(uniqid()), 0, 6);

                                           ?>
                                          <input type="password" class="form-control" placeholder="Contraseña" name="pass" id="password" value="<?= $pass?>" required>
                                          <button type="button" class="btn waves-effect waves-light btn-info" onclick="mostrarContrasena()">Ver contraseña</button>
                                      </div>
                                    </div>
                                  </div>
                                    <button type="submit" class="btn btn-primary">Crear Usuario</button>
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


                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Cuentas</h4>
                                <div class="table-responsive">
                                      <table id="demo-foo-addrow" class="table m-t-30 no-wrap table-hover contact-list" data-page-size="10">
                                          <thead>
                                              <tr>
                                                  <th>Id</th>
                                                  <th>Nombre</th>
                                                  <th>Email</th>
                                                  <th>Telefono</th>
                                                  <th>Dirección</th>
                                                  <th>Puesto</th>
                                                  <th>Act</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <?php
                                                foreach ($consulta->result() as $fila) {
                                                  if ($fila->id != 1) {
                                                    // code...

                                              ?>
                                                <tr>
                                                    <td><?= $fila->id?></td>
                                                    <td>
                                                        <a href="<?= base_url() ?>Perfil_controller/Cuenta_perfil/<?= $fila->id?>"><img src="<?= base_url('uploads/users').'/'.$fila->img?>" alt="user" width="40" class="rounded-circle" /> <?= $fila->user?></a>
                                                    </td>
                                                    <td><?= $fila->email?></td>
                                                    <td><?= $fila->telefono?></td>
                                                    <td><?= $fila->direccion?></td>
                                                    <td>
                                                      <?php
                                                      switch ($fila->nivel) {
                                                        case 1:
                                                          echo "Super Usuario";
                                                          break;
                                                        case 2:
                                                          echo "Administrador";
                                                          break;
                                                        case 3:
                                                          echo "Inspector";
                                                          break;

                                                        default:
                                                          echo "default";
                                                          break;
                                                      }


                                                       ?>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn waves-effect waves-light btn-danger" data-toggle="modal" data-target=".bs-example-modal-lg<?= $fila->id?>">Eliminar</button>
                                                        <div class="modal fade bs-example-modal-lg<?= $fila->id?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                                          <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                              <div class="modal-header">
                                                                <h4 class="modal-title" id="myLargeModalLabel">Alerta...</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                              </div>
                                                              <div class="modal-body">
                                                                <h4>Espera un momento....</h4>
                                                                <p>Parece que estas a punto de eliminar a <?= $fila->user?>.</p>
                                                                <p>Si estas seguro de esto, entones adelante.</p>
                                                              </div>
                                                              <div class="modal-footer">
                                                                <button type="button" class="btn btn-success waves-effect text-left" data-dismiss="modal" onclick="window.location.href = '<?= base_url()."Cuentas_controller/eliminar/". $fila->id?>';">Eliminar</button>
                                                                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Cancelar</button>
                                                              </div>
                                                            </div>
                                                            <!-- /.modal-content -->
                                                          </div>
                                                          <!-- /.modal-dialog -->
                                                        </div>
                                                    </td>
                                                </tr>

                                              <?php
                                                  }
                                                }
                                              ?>
                                          </tbody>
                                      </table>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
