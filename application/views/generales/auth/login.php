
<!doctype html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Maternidad Login</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/bootstrap.min.css">
	<!-- Google Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/login.css">
</head>

<body>
	<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
	<section class="fxt-template-animation fxt-template-layout11">
		<div class="container">
			<div class="row align-items-center justify-content-center">
            <a class="fxt-logo mb-4 text-center"><img width="150px" src="<?= base_url() ?>assets/images/tuyyologo.png" alt="Logo"></a>
				<div class="col-xl-6 col-lg-7 col-sm-12 col-12 fxt-bg-color">
					<div class="fxt-content">
						<div class="fxt-header mb-4">
							<h3 style="margin: 0;">Iniciar Sesión</h3>
						</div>
						<div class="fxt-form">
							<form method="POST">
								<div class="form-outline mb-3">
										<input type="text" id="usuario" class="form-control" name="usuario" placeholder="Usuario" required="required">
								</div>
								<div class="form-outline mb-3">
										<input id="password" type="password" class="form-control" name="password" placeholder="********" required="required">
								</div>
								<!--<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-3">
										<div class="fxt-checkbox-area">
											<div class="checkbox">
												<input id="checkbox1" type="checkbox">
												<label for="checkbox1">Keep me logged in</label>
											</div>
											<a href="forgot-password-11.html" class="switcher-text">Forgot Password</a>
										</div>
									</div>
								</div>-->
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <?php
                                        if(isset($message)){
                                        ?>
                                        <div class="alert alert-<?= $message["type"] ?> alert-dismissible fade show" role="alert">
                                        <?= $message["message"] ?>
                                        </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
								<div class="form-outline mb-4">
										<button type="submit" class="fxt-btn-fill">Ingresar</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>

</html>