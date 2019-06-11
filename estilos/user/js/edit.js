function editarComerciante(){
  document.getElementById("enviarEdicion1").style.display = "inline";
  document.getElementById("cancelarEdicion1").style.display = "inline";
  document.getElementById("editarComerciante1").style.display = "none";
  document.getElementById("imprimir").style.display = "none";

  document.getElementById("mapa").style.display = "inline";


  $( "#SelectID" )
  .change(function () {
    var str = "";
    $( "#SelectID" ).each(function() {
      str += $( this ).val();
    });
    str2 = str;
    console.log(str);

    switch (str) {
      case "Zona 1":
      document.getElementById("mapas").style.display = "flex";
      document.getElementById("map_10_1").style.width = "100%";
      document.getElementById("map_10_1").style.height = "100%";
      document.getElementById("map_10_2").style.display = "none";
      document.getElementById("map_10_3").style.display = "none";
      document.getElementById("map_10_4").style.display = "none";
      document.getElementById("map_10_5").style.display = "none";
      document.getElementById("map_10_6").style.display = "none";

        break;
        case "Zona 2":
        document.getElementById("mapas").style.display = "flex";
        document.getElementById("map_10_1").style.display = "none";
        document.getElementById("map_10_2").style.width = "100%";
        document.getElementById("map_10_2").style.height = "100%";
        document.getElementById("map_10_3").style.display = "none";
        document.getElementById("map_10_4").style.display = "none";
        document.getElementById("map_10_5").style.display = "none";
        document.getElementById("map_10_6").style.display = "none";


        break;
        case "Zona 3":
        document.getElementById("mapas").style.display = "flex";
        document.getElementById("map_10_1").style.display = "none";
        document.getElementById("map_10_2").style.display = "none";
        document.getElementById("map_10_3").style.width = "100%";
        document.getElementById("map_10_3").style.height = "100%";
        document.getElementById("map_10_4").style.display = "none";
        document.getElementById("map_10_5").style.display = "none";
        document.getElementById("map_10_6").style.display = "none";

        break;
        case "Zona 4":
        document.getElementById("mapas").style.display = "flex";
        document.getElementById("map_10_1").style.display = "none";
        document.getElementById("map_10_2").style.display = "none";
        document.getElementById("map_10_3").style.display = "none";
        document.getElementById("map_10_4").style.width = "100%";
        document.getElementById("map_10_4").style.height = "100%";
        document.getElementById("map_10_5").style.display = "none";
        document.getElementById("map_10_6").style.display = "none";

        break;
        case "Zona 5":
        document.getElementById("mapas").style.display = "flex";
        document.getElementById("map_10_1").style.display = "none";
        document.getElementById("map_10_2").style.display = "none";
        document.getElementById("map_10_3").style.display = "none";
        document.getElementById("map_10_4").style.display = "none";
        document.getElementById("map_10_5").style.width = "100%";
        document.getElementById("map_10_5").style.height = "100%";
        document.getElementById("map_10_6").style.display = "none";

          break;
          case "Zona 6":
          document.getElementById("mapas").style.display = "flex";
          document.getElementById("map_10_1").style.display = "none";
          document.getElementById("map_10_2").style.display = "none";
          document.getElementById("map_10_3").style.display = "none";
          document.getElementById("map_10_4").style.display = "none";
          document.getElementById("map_10_5").style.display = "none";
          document.getElementById("map_10_6").style.width = "100%";
          document.getElementById("map_10_6").style.height = "100%";

            break;
      default:
      document.getElementById("mapas").style.display = "none";
      document.getElementById("map_10_1").style.display = "none";
      document.getElementById("map_10_2").style.display = "none";
      document.getElementById("map_10_3").style.display = "none";
      document.getElementById("map_10_4").style.display = "none";
      document.getElementById("map_10_5").style.display = "none";
      document.getElementById("map_10_6").style.display = "none";
      break;
    }

  })
  .change();

  val_map = str2;






  document.getElementById("file").style.display = "inline";
  document.getElementById("file2").style.display = "inline";
  document.getElementById("file3").style.display = "inline";
  document.getElementById("file4").style.display = "inline";
  document.getElementById("file5").style.display = "inline";
  document.getElementById("file6").style.display = "inline";

  document.getElementById('horario-MTN').style.display = "flex";
  document.getElementById('horario-MTN-edit').style.display = "flex";

  document.getElementById('horario1-0').style.display = "flex";
  document.getElementById('horario1-1').style.display = "flex";
  document.getElementById('horario1-2').style.display = "flex";
  document.getElementById('horario1-3').style.display = "flex";
  document.getElementById('horario1-4').style.display = "flex";
  document.getElementById('horario1-5').style.display = "flex";
  document.getElementById('horario1-6').style.display = "flex";

  document.getElementById('horario3-0').style.display = "flex";
  document.getElementById('horario3-1').style.display = "flex";
  document.getElementById('horario3-2').style.display = "flex";
  document.getElementById('horario3-3').style.display = "flex";
  document.getElementById('horario3-4').style.display = "flex";
  document.getElementById('horario3-5').style.display = "flex";
  document.getElementById('horario3-6').style.display = "flex";

  document.getElementById('horario4-0').style.display = "flex";
  document.getElementById('horario4-1').style.display = "flex";
  document.getElementById('horario4-2').style.display = "flex";
  document.getElementById('horario4-3').style.display = "flex";
  document.getElementById('horario4-4').style.display = "flex";
  document.getElementById('horario4-5').style.display = "flex";
  document.getElementById('horario4-6').style.display = "flex";


  document.getElementById('horario2-0').style.display = "none";
  document.getElementById('horario2-1').style.display = "none";
  document.getElementById('horario2-2').style.display = "none";
  document.getElementById('horario2-3').style.display = "none";
  document.getElementById('horario2-4').style.display = "none";
  document.getElementById('horario2-5').style.display = "none";
  document.getElementById('horario2-6').style.display = "none";

  document.getElementById('tarjeton').style.display = "none";
  document.getElementById('sindicato').style.display = "none";
  document.getElementById('switch').style.display = "flex";
  document.getElementById('switch2').style.display = "flex";

  document.getElementById('nombre').disabled=false;
  document.getElementById('nombre_segundo').disabled=false;
  document.getElementById('correo').disabled=false;
  document.getElementById('tel').disabled=false;
  document.getElementById('cel').disabled=false;
  document.getElementById('curp').disabled=false;
  document.getElementById('genero').disabled=false;
  document.getElementById('giro').disabled=false;
  document.getElementById('descripcion').disabled=false;
  document.getElementById('tipo').disabled=false;
  document.getElementById('etiquetas').disabled=false;
  document.getElementById('checkboxLunes').disabled=false;
  document.getElementById('checkboxMartes').disabled=false;
  document.getElementById('checkboxMiercoles').disabled=false;
  document.getElementById('checkboxJueves').disabled=false;
  document.getElementById('checkboxViernes').disabled=false;
  document.getElementById('checkboxSabado').disabled=false;
  document.getElementById('checkboxDomingo').disabled=false;
  document.getElementById('direccion').disabled=false;
  document.getElementById('SelectID').disabled=false;
  document.getElementById('coords').disabled=false;
  document.getElementById('example-number-input').disabled=false;
  document.getElementById('estructura').disabled=false;
  document.getElementById('estado').style.display = "flex";
  document.getElementById('comentario').disabled=false;



}

function cancelarEdicion(){
  document.getElementById("enviarEdicion1").style.display = "none";
  document.getElementById("cancelarEdicion1").style.display = "none";
  document.getElementById("editarComerciante1").style.display = "inline";
  document.getElementById("imprimir").style.display = "inline";

  document.getElementById('horario-MTN').style.display = "none";
  document.getElementById('horario-MTN-edit').style.display = "none";

  document.getElementById('tarde').style.display = "none";
  document.getElementById('noche').style.display = "none";

  document.getElementById('horario1-0').style.display = "none";
  document.getElementById('horario1-1').style.display = "none";
  document.getElementById('horario1-2').style.display = "none";
  document.getElementById('horario1-3').style.display = "none";
  document.getElementById('horario1-4').style.display = "none";
  document.getElementById('horario1-5').style.display = "none";
  document.getElementById('horario1-6').style.display = "none";

  document.getElementById('horario3-0').style.display = "none";
  document.getElementById('horario3-1').style.display = "none";
  document.getElementById('horario3-2').style.display = "none";
  document.getElementById('horario3-3').style.display = "none";
  document.getElementById('horario3-4').style.display = "none";
  document.getElementById('horario3-5').style.display = "none";
  document.getElementById('horario3-6').style.display = "none";

  document.getElementById('horario4-0').style.display = "none";
  document.getElementById('horario4-1').style.display = "none";
  document.getElementById('horario4-2').style.display = "none";
  document.getElementById('horario4-3').style.display = "none";
  document.getElementById('horario4-4').style.display = "none";
  document.getElementById('horario4-5').style.display = "none";
  document.getElementById('horario4-6').style.display = "none";


  document.getElementById('horario2-0').style.display = "block";
  document.getElementById('horario2-1').style.display = "block";
  document.getElementById('horario2-2').style.display = "block";
  document.getElementById('horario2-3').style.display = "block";
  document.getElementById('horario2-4').style.display = "block";
  document.getElementById('horario2-5').style.display = "block";
  document.getElementById('horario2-6').style.display = "block";

  document.getElementById("mapa").style.display = "none";
  document.getElementById("file").style.display = "none";
  document.getElementById("file2").style.display = "none";
  document.getElementById("file3").style.display = "none";
  document.getElementById("file4").style.display = "none";
  document.getElementById("file5").style.display = "none";
  document.getElementById("file6").style.display = "none";

  document.getElementById('tarjeton').style.display = "flex";
  document.getElementById('sindicato').style.display = "flex";
  document.getElementById('switch').style.display = "none";
  document.getElementById('switch2').style.display = "none";

  document.getElementById('nombre').disabled=true;
  document.getElementById('nombre_segundo').disabled=true;
  document.getElementById('correo').disabled=true;
  document.getElementById('tel').disabled=true;
  document.getElementById('cel').disabled=true;
  document.getElementById('curp').disabled=true;
  document.getElementById('genero').disabled=true;
  document.getElementById('giro').disabled=true;
  document.getElementById('descripcion').disabled=true;
  document.getElementById('tipo').disabled=true;
  document.getElementById('etiquetas').disabled=true;
  document.getElementById('checkboxLunes').disabled=true;
  document.getElementById('checkboxMartes').disabled=true;
  document.getElementById('checkboxMiercoles').disabled=true;
  document.getElementById('checkboxJueves').disabled=true;
  document.getElementById('checkboxViernes').disabled=true;
  document.getElementById('checkboxSabado').disabled=true;
  document.getElementById('checkboxDomingo').disabled=true;
  document.getElementById('direccion').disabled=true;
  document.getElementById('SelectID').disabled=true;
  document.getElementById('coords').disabled=true;
  document.getElementById('example-number-input').disabled=true;
  document.getElementById('estructura').disabled=true;
  document.getElementById('estado').style.display = "none";
  document.getElementById('comentario').disabled=true;
}

function enviarEdicion(){

  var archivo = document.getElementById("nombre_archivo1").value;

  extensiones_permitidas = new Array( ".jpg", ".png", "");
  mierror = "";

      //recupero la extensión de este nombre de archivo
      extension = (archivo.substring(archivo.lastIndexOf("."))).toLowerCase();
      //alert (extension);
      //compruebo si la extensión está entre las permitidas
      permitida = false;
      for (var i = 0; i < extensiones_permitidas.length; i++) {
         if (extensiones_permitidas[i] == extension) {
         permitida = true;
         break;
         }
      }
      if (!permitida) {
         mierror = "Comprueba la extensión de la foto del comerciante a subir. \nSólo se pueden subir archivos con extensiones: " + extensiones_permitidas.join();
        }else{
          //submito!
         document.edicionCorrecta.submit();
         return 1;
        }
   //si estoy aqui es que no se ha podido submitir
   alert (mierror);
   return 0;





}
