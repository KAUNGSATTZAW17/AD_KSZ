<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.css'/>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
    <div class= "contanier">
        <div id="registerbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Register New Account</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
                        </div>  
                        <div class="panel-body" >
								<form action="registerdata.php" method="post" id="editform" class="form-horizontal" role="form">
										
										<div class="form-group">
											<label for="firstname" class="col-md-3 control-label">First Name</label>
											<div class="col-md-9">
												<input type="text" class="form-control" name="firstname" placeholder="First Name">
											</div>
										</div>

										<div class="form-group">
											<label for="lastname" class="col-md-3 control-label">Last Name</label>
											<div class="col-md-9">
												<input type="text" class="form-control" name="lastname" placeholder="Last Name">
											</div>
										</div>

										<div class="form-group">
											<label for="dateofbirth" class="col-md-3 control-label">Date of Birth</label>
											<div class="col-md-9">
												<input type="date" class="form-control" name="dateofbirth" placeholder="YYYY/MM/DD">
											</div>
										</div>

										<div class="form-group">
											<label for="postalcode" class="col-md-3 control-label">Postal Code</label>
											<div class="col-md-9">
												<input type="text" class="form-control" name="postalcode" placeholder="">
											</div>
										</div>

										<div class="form-group">
											<label for="postaladdress" class="col-md-3 control-label">Postal Address</label>
											<div class="col-md-9">
												<input type="text" class="form-control" name="postaladdress" placeholder="">
											</div>
										</div>

										<div class="form-group">
											<label for="email" class="col-md-3 control-label">Email</label>
											<div class="col-md-9">
												<input type="text" class="form-control" name="email" placeholder="Email Address">
											</div>
										</div>

										<div class="form-group">
											<label for="password" class="col-md-3 control-label">Password</label>
											<div class="col-md-9">
												<input type="password" class="form-control" name="password" placeholder="Password">
											</div>
										</div>
										
										<div class="form-group">
											<label for="status" class="col-md-3 control-label">Admin?</label>
											<div class="col-md-9 form-check">
												<input type="checkbox" name= "status" class="form-check-input" id="exampleCheck1" value="1">
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-offset-3 col-sm-9 controls">
                                            <button type="submit" class="btn btn-success">
                                            &nbsp&nbsp  Register  &nbsp&nbsp</button>
                                        </div>
								</form>
                         </div>
                    </div>    
         </div> 
    </div>    
</body>
</html>