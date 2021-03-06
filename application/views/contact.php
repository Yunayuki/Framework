<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
	 	<div class="container">
	 		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	 			<nav class="navbar navbar-default" role="navigation">
	 				<div class="container-fluid">
	 					<!-- Brand and toggle get grouped for better mobile display -->
	 					<div class="navbar-header">
	 						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
	 							<span class="sr-only">Toggle navigation</span>
	 							<span class="icon-bar"></span>
	 							<span class="icon-bar"></span>
	 							<span class="icon-bar"></span>
	 						</button>
	 						<a class="navbar-brand" href="#">BLOGAlvin</a>
	 					</div>
	 			
	 					<!-- Collect the nav links, forms, and other content for toggling -->
	 					<div class="collapse navbar-collapse navbar-ex1-collapse">
	 						<ul class="nav navbar-nav">
	 							<li><a href="<?php echo site_url()?>/home">Home</a></li>
	 							<li><a href="<?php echo site_url()?>/about">About</a></li>
	 							<li class="active"><a href="<?php echo site_url()?>/contact">Contact</a></li>
	 						</ul>
	 						<ul class="nav navbar-nav navbar-right">
	 							<li class="dropdown">
	 								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrator <b class="caret"></b></a>
	 								<ul class="dropdown-menu">
	 									<li><a href="#">Action</a></li>
	 									<li><a href="#">Another action</a></li>
	 									<li><a href="#">Something else here</a></li>
	 									<li><a href="#">Separated link</a></li>
	 								</ul>
	 							</li>
	 						</ul>
	 					</div><!-- /.navbar-collapse -->
	 				</div>
	 			</nav>
	 			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
						<div class="form-group">
							<label for="textareaNama" class="col-sm-2 control-label">Nama:</label>
							<div class="col-sm-10">
								<textarea name="Nama" id="textareaNama" class="form-control" rows="1" required="required"></textarea>
							</div>
						</div>

						<div class="form-group">
							<label for="textareaEmail" class="col-sm-2 control-label">Email:</label>
							<div class="col-sm-10">
								<textarea name="Email" id="textareaEmail" class="form-control" rows="1" required="required"></textarea>
							</div>
						</div>

						<div class="form-group">
							<label for="textareaPesan" class="col-sm-2 control-label">Pesan:</label>
							<div class="col-sm-10">
								<textarea name="Pesan" id="textareaPesan" class="form-control" rows="3" required="required"></textarea>
							</div>
						</div>
						<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
							<button type="button" class="btn btn-success">Submit</button>
						</div>
					</div>
	 		</div>
	 	</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url()?>js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>