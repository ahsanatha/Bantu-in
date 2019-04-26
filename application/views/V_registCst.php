<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Account Customer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class=" container registAst col-md-7 py-3">		
		<div class="card">
			<header class="card-header">
    			<a href="<?= site_url('C_signinCst')?>" class="float-right btn btn-outline-info mt-1" id="btn_ast">Sign in</a>
	    		<h4 class="card-title mt-2">Create Account</h4>
			</header>
			<div class="card-body">
			<div class="row pb-2">
          <div class="col-md-12">
            <div class="wrap bg-white ">
                <div class="card">
                    <div class="card-body">
                        <form action="">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Nama </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Email </label>
                                <div class="col-sm-8">
                                    <input placeholder="Your Email" type="email" class="form-control">
                                </div>
							</div>
							<div class="form-group row">
                                <label class="col-sm-4 col-form-label">Password </label>
                                <div class="col-sm-8">
                                    <input placeholder="Password" type="password" class="form-control">
								</div>
							</div>
							<div class="form-group row">
                                <label class="col-sm-4 col-form-label">Re-Password </label>
                                <div class="col-sm-8">
                                    <input placeholder="Repeat your Password" type="password" class="form-control">
								</div>
							</div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Wilayah</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control">
                                </div>
							</div>
							<div class="form-group row">
                                <label class="col-sm-4 col-form-label">Instansi</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-2"><button class="btn btn-info" type="submit"> <a href="<?= site_url('#')?>">Sign Up</a></button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
          </div>
            </div> <!-- card-body end .// -->
		</div> <!-- card.// -->
	</div>	
</body>
</html>