<!DOCTYPE html>
<html>
<head>
	<title>Bantu.in</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url("/css/pilihlogin.css")?>">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script type="text/javascript" src="<?= base_url("js/jquery.min.js")?>"></script>
	<title>Login Sebagai</title>

</head>
<body>
	<div class="container col-lg-9">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-4">
                <div class="card loginWith">
					<h3 class="text-center py-2">Please Sign In</h3>
                    <div class="card-body">
                        <form action="" autocomplete="off">
							<div class="form-group">
								<button type="button" class="btn btn-info btn-block "> <a href="<?= site_url('C_loginAs/pelanggan')?>" style="color : #fff;"> Pelanggan</a> </button>
							</div> 	<!-- form-group// --> 
							<div class="form-group">
								<button type="button" class="btn btn-info btn-block"> <a href="<?= site_url('C_loginAs/asisten')?>" style="color : #fff;">Asisten </a></button>
							</div> <!-- form-group// -->   
                        </form>
                    </div>
                </div>
            </div>
        </div>
	</div>
</body>
</html>