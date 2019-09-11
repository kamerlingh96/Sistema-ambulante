$( window ).on( "load", function() {
  $("#create_comerciante").submit(function (event){
    event.preventDefault();

    $.ajax({
      url:$("#create_comerciante").attr("action"),
      type:$("#create_comerciante").attr("method"),
      data:$("#create_comerciante").serialize(),
      success:function(respuesta){
        alert(respuesta+"...");
        if (respuesta == "Registro Guardado") {
          //window.location=base_url;
        }
      }
    });

  });
});
