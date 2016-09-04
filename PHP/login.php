<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<link href="../bootstrap/css/bootstrap.css"
      rel="stylesheet" type="text/css">

      <script src="./bootstrap/js/bootstrap.js"></script>

	<title>Login</title>
</head>
<body>

 <div class="container" style="margin-top: 200px">
		<div class="row">
			<div class="col-sm-6  col-md-4 col-md-offset-4 ">
				<div class="panel panel-primary">
					<div class="panel-heading" >
						<strong class="center-block">Inicio de sesión</strong>
					</div>
					<div class="panel-body">
						<form role="form" action="process.php" method="POST"  >
							<fieldset>
								<div class="row">
									<div class="center-block">
										<img class="profile-img"
											src="" alt="">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-10  col-md-offset-1">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-user"></i>
												</span> 
												<input class="form-control" placeholder="Username" id="user" name="user" type="text" required autofocus>
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-lock"></i>
												</span>
												<input class="form-control" placeholder="Password" id="pass" name="pass" type="password" value=""  required autofocus >
											</div>
										</div>
										<div class="form-group">
											<input type="submit" class="btn btn-lg btn-primary btn-block" value="Sign in" id="btn">
										</div>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
					<div class="panel-footer ">
						Don't have an account! <a href="#" onClick=""> Sign Up Here </a>
					</div>
                </div>
			</div>
		</div>

	</div>

</body>
</html>