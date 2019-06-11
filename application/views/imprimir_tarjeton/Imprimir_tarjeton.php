<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?= $title ?></title>

    <link rel="stylesheet" href="<?= base_url() ?>estilos/user/css/tarjeton.css">
  </head>
  <body onload="update_qrcode()">

    <form style="display:none;">
    <textarea name="msg" rows="10" cols="40"><?= $consulta->id ?></textarea><br>
    </form>



    <div class="imprimir printableArea">
      <div class="fondo">
        <img src="<?= base_url('uploads/system/Tarjeton-Limpio.jpeg') ?>" alt="">
      </div>

      <div class="elementos folio">
        <h2>Folio: <span class="id-folio" ><?= $consulta->id ?></span></h2>
      </div>

      <div class="elementos codigo">
        <div id="qr"></div>
      </div>

      <div class="elementos encabezado">
        <h2>TARJETÓN AMBULANTE</h2>
        <h2>AÑO <?= $consulta->vigencia ?></h2>
      </div>


      <div class="elementos datos">
        <h3>Propietario del comercio:</h3>
        <h3><span><?= $consulta->nombre ?></span></h3>

        <br>

        <h3>Giro:</h3>
        <h3><span><?= $consulta->giro ?></span></h3>

        <br>

        <h3>Descripción de producto a comercializar:</h3>
        <h3><span><?= $consulta->descripcion ?></span></h3>

        <br>

        <div class="derecha">
          <h3>Tipo de permiso: </h3>
          <h3><span><?= $consulta->tipo ?></span></h3>
        </div>

        <div class="derecha">
          <h3>Tipo de estructura:</h3>
          <h3><span><?= $consulta->estructura ?></span></h3>
        </div>

        <div style="clear:both;">
          <br>
        </div>

        <div class="derecha">
          <h3>Zona: </h3>
          <h3><span><?= $consulta->zona ?></span></h3>
        </div>

        <div class="derecha">
          <h3>Ubicación Asignada:</h3>
          <h3><span><?= $consulta->direccion ?></span></h3>
        </div>

        <div style="clear:both;">
          <br>
        </div>

        <div class="horario">
          <h3>Horario:</h3>
          <?php
          foreach ($hora->result() as $fila) {
          ?>
          <div class="derecha-fecha">
            <h4 class="fecha"><span><?= $fila->fecha ?>:</span></h4>
          </div>
          <?php
          if ($fila->horario == 1) {
            ?>
            <h4 class="cerrado"><?php if($fila->desde == "00:00" && $fila->hasta == "00:00"){echo "<span>Cerrado</span>";}else{ echo date_format(date_create($fila->desde), 'g:i A'); echo " - "; echo date_format(date_create($fila->hasta), 'g:i A');}  ?></h4>
            <?php
          }elseif ($fila->horario == 2) {
            ?>
            <h4 class="cerrado"><?php if($fila->desde == "00:00" && $fila->hasta == "00:00"){echo "<span>Cerrado</span>";}else{ echo date_format(date_create($fila->desde), 'g:i A'); echo " - "; echo date_format(date_create($fila->hasta), 'g:i A'); echo " / "; echo date_format(date_create($fila->desde2), 'g:i A'); echo " - "; echo date_format(date_create($fila->hasta2), 'g:i A');}  ?></h4>
            <?php
          }elseif ($fila->horario == 3) {
            ?>
            <h4 class="cerrado"><?php if($fila->desde == "00:00" && $fila->hasta == "00:00"){echo "<span>Cerrado</span>";}else{ echo date_format(date_create($fila->desde), 'g:i A'); echo " - "; echo date_format(date_create($fila->hasta), 'g:i A'); echo " / "; echo date_format(date_create($fila->desde2), 'g:i A'); echo " - "; echo date_format(date_create($fila->hasta2), 'g:i A'); echo " / "; echo date_format(date_create($fila->desde3), 'g:i A'); echo " - "; echo date_format(date_create($fila->hasta3), 'g:i A');}  ?></h4>
            <?php
          }

           ?>
          <?php
          }
          ?>
        </div>

        <br>

        <h3>Vigencia:</h3>
        <h3><span>31 de Diciembre del <?= $consulta->vigencia ?></span></h3>




      </div>




    </div>














<div class="elementos botones">
  <button id="print" class="btn btn-default btn-outline" type="button"> <span> Imprimir </span> </button>
  <button class="btn btn-default btn-outline" type="button" onClick="history.back()"> <span> Regresar</span> </button>

</div>




    <script src="<?= base_url() ?>estilos/user/js/jquery-2.1.0.js"></script>
    <script src="<?= base_url() ?>estilos/user/js/jquery.PrintArea.js"></script>
    <script src="<?= base_url() ?>estilos/user/js/qr.js"></script>

    <script>
      $(function() {
          $("#print").click(function() {
            document.getElementById('print').style.display = "none";
              var mode = 'iframe'; //popup
              var close = mode == "popup";
              var options = {
                  mode: mode,
                  popClose: close
              };
              $("div.printableArea").printArea(options);
              document.getElementById('print').style.display = "inline";
          });
      });
      </script>
  </body>
</html>
