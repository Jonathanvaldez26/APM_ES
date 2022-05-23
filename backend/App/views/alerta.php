<?php
//ProPayPal es vital para declarar si es demo o prueba las transacciones

//define('ProPayPal', 0); // El cero simboliza entorno de Prueba
//define('ProPayPal', 1); // El 1 simboliza entorno de producción

define('ProPayPal', 1);
if(ProPayPal){
    define("PayPalClientId", "Ae7iAzaEaKgh5NE3Rfje0CE8IxygK_LsSBI3e-cNt9koRh5atWuEyxMlx9h0wx9gpCTy2ujNOvWVBQHc");
    define("PayPalSecret", "EFXQs5GYe4ENz75i8xxyXL2APrURl0syLSo-yNkba3I0UNrq7ujRW7A04CjQsx-Kz4KZScaWwlR75szV");
    define("PayPalBaseUrl", "https://registro.dualdisorderswaddmexico2022.com/Registro/");
    define("PayPalENV", "production");
} else {
    define("PayPalClientId", "Ae7iAzaEaKgh5NE3Rfje0CE8IxygK_LsSBI3e-cNt9koRh5atWuEyxMlx9h0wx9gpCTy2ujNOvWVBQHc");
    define("PayPalSecret", "EFXQs5GYe4ENz75i8xxyXL2APrURl0syLSo-yNkba3I0UNrq7ujRW7A04CjQsx-Kz4KZScaWwlR75szV");
    define("PayPalBaseUrl", "https://registro.dualdisorderswaddmexico2022.com/Registro/");
    define("PayPalENV", "sandbox");
}

$productName = "Congreso Mundial de Patología Dual";
$currency = "USD";
$productPrice = $amount_pay;
$productId = 1;
$orderNumber = 1;
?>

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
                                                        <h5 class="font-weight-bolder mb-0">¡Gracias por completar su formulario de registro!</h5>

                                                        <div class="multisteps-form__content">
                                                            <br>
                                                            <p class="mb-0 text-sm">
                                                                Estimado: <?php echo $name; ?>
                                                            </p>
                                                            <br>
                                                            <p>
                                                                Método de pago: <?php echo $pay; ?>
                                                            </p>
                                                            <div id="card_pay" <?php echo $estilo; ?>>
                                                                    <p class="mb-0 text-sm">
                                                                        Imprima este formato para su depósito en cualquier banco
                                                                    </p>
                                                                    <p class="mb-0 text-sm">
                                                                        a)  Número de cuenta: <strong> <?php echo $account_number; ?></strong>
                                                                    </p>
                                                                    <p class="mb-0 text-sm">
                                                                        b) Banco: <strong> <?php echo $bank; ?></strong>
                                                                    </p>
                                                                    <p class="mb-0 text-sm">
                                                                        c) Nombre: <strong> <?php echo $name_association; ?></strong>
                                                                    </p>
                                                                    <p class="mb-0 text-sm">
                                                                        d) Dirección: <strong> <?php echo $address; ?></strong>
                                                                    </p>
                                                                    <p class="mb-0 text-sm">
                                                                        e) Código SWIFT: <strong> <?php echo $swift; ?></strong>
                                                                    </p>
                                                            </div>
                                                                <br>
                                                                <p class="mb-0 text-sm">
                                                                    Referencia:<strong> <?php echo $reference; ?></strong>
                                                                </p>
                                                                <p class="mb-0 text-sm">
                                                                    Modalidad: <strong> <?php echo $modality; ?></strong>
                                                                </p>
                                                                <p class="mb-0 text-sm">
                                                                    Monto a pagar:<strong> <?php echo $amount; ?></strong>
                                                                </p>
                                                                <p class="mb-0 text-sm">
                                                                    Tiempo límite de pago: <strong> <?php echo $date_pay; ?></strong>
                                                                </p>
                                                                <br>
                                                                <p class="mb-0 text-sm">
                                                                    <b><?php echo $message_pay; ?><b>
                                                                </p>

                                                            <p class="mb-0 text-sm">

                                                                Recuerde que su lugar en el congreso no se confirmará hasta que se reciba el pago completo
                                                                y se le haya enviado un correo electrónico de confirmación. Las reservas incompletas se
                                                                cancelarán después de la fecha límite de pago indicada anteriormente.
                                                                Si tiene alguna consulta o no recibe su código de confirmación dentro de los dos días hábiles
                                                                posteriores a la realización de su pago, envíe su recibo bancario por correo electrónico a
                                                                dualdisorders@grupolahe.com
                                                                </p>
                                                            <br>

                                                            <div id="paypal-button-container"></div>
                                                            <div id="paypal-button" <?php echo $estilo_boton; ?>></div>
                                                            <script src="https://www.paypalobjects.com/api/checkout.js"></script>
                                                            <script>
                                                                paypal.Button.render({
                                                                    env: '<?php echo PayPalENV; ?>',
                                                                    client: {
                                                                        <?php if(ProPayPal) { ?>
                                                                        production: '<?php echo PayPalClientId; ?>'
                                                                        <?php } else { ?>
                                                                        sandbox: '<?php echo PayPalClientId; ?>'
                                                                        <?php } ?>
                                                                    },
                                                                    payment: function (data, actions) {
                                                                        return actions.payment.create({
                                                                            transactions: [{
                                                                                amount: {
                                                                                    total: '<?php echo $productPrice; ?>',
                                                                                    currency: '<?php echo $currency; ?>'
                                                                                }
                                                                            }]
                                                                        });
                                                                    },
                                                                    onAuthorize: function (data, actions) {
                                                                        return actions.payment.execute()
                                                                            .then(function ()
                                                                            {
                                                                                                                                                              window.location = "<?php echo PayPalBaseUrl; ?>SuccessPay?paymentID="+data.paymentID+"&payerID="+data.payerID+"&token="+data.paymentToken+"&pid=<?php echo $productId; ?>"+"&name=<?php echo $name; ?>"+"&email=<?php echo $email; ?>"+"&pay=<?php echo $amount; ?>";

                                                                            });
                                                                    }
                                                                }, '#paypal-button');
                                                            </script>

                                                            <div class="button-row d-flex mt-4">
                                                                <a href="<?php echo ($regreso) ? $regreso : '/'?>" class="btn btn-sm btn bg-gradient-info ms-auto mb-0 js-btn-next" type="button" title="Next">Regresar al Sitio</a>
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