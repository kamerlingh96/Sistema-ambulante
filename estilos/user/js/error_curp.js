window.onload = function() {
  //funciones a ejecutar
  "use strict";

  var SweetAlert = function() {};

  //examples
  SweetAlert.prototype.init = function() {


  //Success Message

      swal("ERROR!", "La CURP ya esta registrada con otro usuario, verifique.", "error")




  },
  //init
  $.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert
}(window.jQuery),

//initializing
function($) {
    "use strict";
    $.SweetAlert.init()
}(window.jQuery);
