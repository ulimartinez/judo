<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div class="container" id="bordered">
        <div class="row">
        	<div class="col-md-7 col-md-offset-2">
        		<div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sign Up</h3>
                    </div>
                    <div class="panel-body">
                        <form action="index.php" role="form" method="post">
                            <fieldset>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon" id="user-addon">Username</span>
											<input type="text" class="form-control" placeholder="Username" aria-describedby="user-addon" name="username">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon" id="pass-addon">Password</span>
											<input type="password" class="form-control" placeholder="Password" aria-describedby="pass-addon" name="password">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon" id="pass2-addon">Confirm Password</span>
											<input type="password" class="form-control" placeholder="Password" aria-describedby="pass2-addon" name="password2">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon" id="mail-addon">email</span>
											<input type="email" class="form-control" placeholder="email@example.com" aria-describedby="mail-addon" name="email">
										</div>
									</div>

									<!-- Change this to a button or input when using this as a form -->
									<input type="submit" name="submit" class="btn btn-lg btn-success btn-block" value="Enter" />

								</fieldset>
                        </form>
                    </div>
                </div>
        	</div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="js/jquery-1.11.3.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


</body>

</html>
