<html>
<head>
    <title>LMB Contruction | WebPlus Multi-store Level [<?php echo date('m/d/Y'); ?>]</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <meta name="description" content="User login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta http-equiv="refresh" content="40">
    <link href="../images/logo.ico" rel="shortcut icon" type="image/x-icon" />
    
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body class="login-layout" oncontextmenu="return false">

	<div id="wrap">
		<div id="main" class="container login-form">
			<div class="text-center">
				<h1>
					<img src="../images/LMB_logo.png" width="175" draggable="false">
				</h1>
				<h5 id="id-company-text"><strong>Enterprise Resource Planning System</strong></h5>
				<h6>Please login below.</h6><br>

				<center>
					<form class="form-horizontal" role="form" method="post">
						<fieldset>
							<div class="form-group-md has-feedback">
								<div class="col-md-14">
									<input name="username" type="text" class="form-control input-box" placeholder="Username" autofocus/>
									<span class="glyphicon glyphicon-user form-control-feedback"></span>
								</div>
							</div>
							<div class="form-group-md has-feedback">
								<div class="col-md-14">
									<input name="password" type="password" class="form-control input-box" placeholder="Password"/>
									<span class="glyphicon glyphicon-lock form-control-feedback"></span>
								</div>
							</div><br>
							<div class="form-group-sm has-feedback">
								<div class="col-sm-14">
                                    <button type="button" class="btn btn-primary btn-sm pull-left" id="login">
										&nbsp;&nbsp;Login&nbsp;&nbsp;
										<!-- <span class="glyphicon glyphicon-log-in"></span> -->
									</button>
                                   
									<button type="reset" class="btn btn-default btn-sm pull-right">
										Clear all
										<!-- <span class="glyphicon glyphicon-repeat"></span> -->
									</button>
									
								</div>
							</div>
						</fieldset>
					</form>
					<?php if (isset($_GET["_error"])) { ?>
						<div id="login-msg" class="alert alert-danger alert-dismissable">
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Warning!</strong> Login Failed, Please check your account.
						</div>
					<?php } ?>
				</center>
			</div>
		</div>

		<div id="push"></div>
	</div>

	<?php include_once '../layout/footer.php'; ?>
    <script type="text/javascript" src="../js/login.js"></script>
</body>
</html>