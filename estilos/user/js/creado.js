window.onload = function() {
  //funciones a ejecutar
  "use strict";

  var SweetAlert = function() {};

  //examples
  SweetAlert.prototype.init = function() {


  //Success Message

  var x = $("#mensajeCreado").val();

  if (x == "creado") {
    swal("!Buen trabajo!", "Nuevo comerciante creado con éxito", "success")
  }else if (x == "curp") {
    swal("!ERROR!", "La CURP ya esta registrada con otro usuario, verifique.", "error")
  }else if (x == "email") {
    swal("!ERROR!", "El CORREO ya esta registrado con otro usuario, verifique.", "error")
  }else if (x == "actualizado") {
    swal("!Buen trabajo!", "Los datos se actualizaron correctamente.", "success")
  }else if (x == "cuenta_creada") {
    swal("!Buen trabajo!", "Nuevo usuario creado con exito!", "success")
  }else if (x == "cuenta_no_creada") {
    swal("!Algo salio mal!", "No se logro crear al usuario, verifique datos.", "error")
  }else if (x == "correo_existente") {
    swal("!ERROR!", "El CORREO ya esta registrado con otro usuario, verifique.", "error")
  }else if (x == "Cuenta_eliminada") {
    swal("!Cuenta Eliminada!", "La cuenta fue borrada correctamente.", "success")
  }else if (x == "Cuenta_no_eliminada") {
    swal("!ERROR!", "La cuenta no fue borrada correctamente.", "error")
  }else if (x == "comentario") {
    swal("!Reporte realizado!", "El reporte se realizo correctamente.", "success")
  }else if (x == "error_comentario") {
    swal("!ERROR!", "El reporte no se realizo correctamente.", "error")
  }else if (x == "Comentario_eliminado") {
    swal("!Reporte eliminado!", "El reporte se elimino correctamente.", "success")
  }else if (x == "Comentario_no_eliminado") {
    swal("!ERROR!", "El reporte no se elimino correctamente.", "error")
  }





  },
  //init
  $.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert
}(window.jQuery),

//initializing
function($) {
    "use strict";
    $.SweetAlert.init()
}(window.jQuery);
