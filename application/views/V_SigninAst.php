<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign in Asisten</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/loginast.css')?>">
</head>
<body>
    <div class="container" style="margin-top : 250px; margin-button : 25    0px; margin-right: 500px; margin-left: 500px;">
        <div class="col-sm-5">
            <div class="card">
                <div class="card-header text-center">Welcome Back</div>
                <div class="card-body">
                    <form class="col-sm-12 ">
                        <div class="form-label-group py-2">
                            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                        </div>
                        <div class="form-label-group py-3">
                            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required autofocus>
                        </div>
                        <button class="btn btn-lg btn-info btn-block" type="submit">Sign in</button>
                    </form>
                </div> 
            </div>
        </div>
    </div>
</body>
</html>