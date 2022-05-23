
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
    <link rel="icon" type="image/vnd.microsoft.icon" href="/assets/img/angel.png">
    <title>
        VI Congreso Mundial de Patología Dual
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../../assets/css/soft-ui-dashboard.css?v=1.0.5" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-100">
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg  blur blur-rounded top-0  z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
        <div class="container-fluid">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 ">
                <img src="/assets/img/logos/apmn.png" style="width: 40px; height: 40px; margin-left: 5px; margin-right: 5px;">
                <img src="/assets/img/logos/waddn.png" style="width: 40px; height: 40px; margin-left: 5px; margin-right: 5px;">
                VI Congreso Mundial de Patología Dual
            </a>
            <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
                <ul class="navbar-nav navbar-nav-hover mx-auto">
                </ul>
                <ul class="navbar-nav d-lg-block d-none">
                    <li class="nav-item">
                        <a href="/Login/" class="btn btn-sm  bg-gradient-info  btn-round mb-0 me-1" onclick="smoothToPricing('pricing-soft-ui')">INICIAR SESIÓN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav

    <div class="page-header min-vh-75">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 col-lg-10 col-md-12 d-flex flex-column mx-auto">
                    <div class="card card-plain mt-7">
                        <div class="container-fluid py-0">
                            <div class="row">
                                <div class="col-12">
                                    <div class="multisteps-form">
                                        <!--form panels-->
                                        <div class="row">
                                            <div class="col-12 col-lg-12 m-auto"><div id="card_one" class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active" id="card_one"data-animation="FadeIn">
                                                        <h5 class="font-weight-bolder mb-0">¡Gracias por completar su pago a través del servicio electrónico PAYPAL!</h5>

                                                        <div class="multisteps-form__content">
                                                            <br>
                                                            <p class="mb-0 text-sm">
                                                                Estimado: <strong><?php echo $name; ?></strong> ¡Tu pago ha sido exitoso!
                                                            </p>
                                                            <div id="card_pay">
                                                                    <p class="mb-0 text-sm">
                                                                        Imprima este formato como comprobante de pago, tome una captura y regrese al sitio principal, inicie sesión con el correo electrónico que acaba de registrar y cargue este comprobante en formato PDF.
                                                                    </p>
                                                                    <hr>
                                                                    <h5 class="text-center"> COMPROBANTE DE PAGO ELECTRÓNICO PAYPAL</h5>
                                                                    <hr>
                                                                    <p class="mb-0 text-sm">
                                                                        a)  Nombre Completo: <strong> <?php echo $name; ?></strong>
                                                                    </p>
                                                                    <p class="mb-0 text-sm">
                                                                        a)  Correo Electrónico Registrado: <strong> <?php echo $email; ?></strong>
                                                                    </p>
                                                                    <p class="mb-0 text-sm">
                                                                        b)  Payment ID: <strong> <?php echo $paymentID; ?></strong>
                                                                    </p>
                                                                    <p class="mb-0 text-sm">
                                                                        c) Id de cliente Paypal: <strong> <?php echo $payerID; ?></strong>
                                                                    </p>
                                                                    <p class="mb-0 text-sm">
                                                                        c) Cantidad Pagada: <strong> <?php echo $pay; ?></strong>
                                                                    </p>
                                                                    <p class="mb-0 text-sm">
                                                                        d) Nombre del Congreso : <strong> "VI Congreso Mundial de Patología Dual"
                                                                        </strong>
                                                                    </p>
                                                                    <p class="mb-0 text-sm">
                                                                        d) Tipo de Pago : <strong> "Electrónico PAYPAL "
                                                                        </strong>
                                                                    </p>
                                                                <hr>

                                                            </div>
                                                            <p class="mb-0 text-sm">

                                                                ¡Agradecemos inmensamente su preferencia!
                                                                ¡Gracias de antemano! Y, por supuesto, si necesitas ayuda, ¡siempre puedes contar con nuestro equipo!
                                                                <br>
                                                                Espere instrucciones por parte del equipo - VI Congreso Mundial de Patología Dual.

                                                            </p>
                                                            <br>
                                                            <div class="button-row d-flex mt-4">
                                                                <a href="<?php echo ($regreso) ? $regreso : '/'?>" class="btn btn-sm btn bg-gradient-info ms-auto mb-0 js-btn-next" type="button" title="Next">Regresar al Sitio y Cargar mi Comprobante de Pago PAYPAL</a>
                                                            </div>
                                                        </div>

                                                    <?php $redireccion ?>
                                                    <?php
                                                    ob_start();
                                                    //header("refresh: 10; url = $regreso");
                                                    //header("url = $regreso");
                                                    ob_end_flush();
                                                    ?>
                                                    </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!--   Core JS Files   -->
<script src="../../assets/js/core/popper.min.js"></script>
<script src="../../assets/js/core/bootstrap.min.js"></script>
<script src="../../assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="../../assets/js/plugins/smooth-scrollbar.min.js"></script>
<!-- Kanban scripts -->
<script src="../../assets/js/plugins/dragula/dragula.min.js"></script>
<script src="../../assets/js/plugins/jkanban/jkanban.js"></script>
<script src="../../assets/js/plugins/chartjs.min.js"></script>
<script src="../../assets/js/plugins/threejs.js"></script>
<script src="../../assets/js/plugins/orbit-controls.js"></script>
</body>

</html>