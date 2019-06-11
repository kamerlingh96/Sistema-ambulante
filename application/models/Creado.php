<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Creado extends CI_Model {

        public function validar()
        {
                        if (true){?>
                                <script type="text/javascript" charset="utf-8">
                                        alert("Registro con exito");
                                </script> <?php
                        }

        }

        public function html($value='')
        {
                return "
                <html>
                <head>
                        <title> Hecho </title>
                </head>
                <body>
                  <h1>Nada</h1>
                </body>
                </html>";
        }

}

/* End of file file.php */
/* Location: ./application/models/file.php */
