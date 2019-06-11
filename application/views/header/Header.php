<!DOCTYPE html>
<html dir="ltr" lang="es">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>uploads/system/favicon.ico">
    <title><?= $title ?></title>
    <!-- Custom CSS -->
    <link href="<?= base_url() ?>estilos/dashboard/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>estilos/dashboard/assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= base_url() ?>estilos/dashboard/dist/css/style.min.css" rel="stylesheet">

    <link href="<?= base_url() ?>estilos/dashboard/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>estilos/dashboard/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css" rel="stylesheet">


    <link href="<?= base_url() ?>estilos/dashboard/assets/libs/jquery-steps/jquery.steps.css" rel="stylesheet">
    <link href="<?= base_url() ?>estilos/dashboard/assets/libs/jquery-steps/steps.css" rel="stylesheet">

    <link href="<?= base_url() ?>estilos/dashboard/assets/libs/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>estilos/user/css/bootstrap-tagsinput.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>estilos/user/css/tags.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>estilos/user/css/checkbox.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>estilos/user/css/sistema.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->


    <style>
    .google-maps {
    position: relative;
    height: 600px;
    overflow: hidden;
    padding: 30px;
    }
    .google-maps iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100% !important;
    height: 100% !important;
    }


    #map_10_1,#map_10_2,#map_10_3,#map_10_4,#map_10_5,#map_10_6 {
        width: 100%;
        height: 80%;
      }

      #map_2 {
          height: 500px;
        }

      .swal2-popup .swal2-styled.swal2-confirm{
            background-color: #4dabaf !important;
      }
    </style>
</head>
