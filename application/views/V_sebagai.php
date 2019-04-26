<!DOCTYPE html>
<html>

<head>
    <title>Bantu.in</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url("assets/css/pilihlogin.css")?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script type="text/javascript" src="<?= base_url("js/jquery.min.js")?>"></script>
    <title><?=$title?> Sebagai</title>

</head>

<body>
    <div class="container col-lg-9">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-4">
                <div class="card loginWith">
                    <h3 class="text-center py-2"><?=$title?> Sebagai : </h3>
                    <div class="card-body">
                        <form action="" autocomplete="off">
                            <div class="form-group">
                                <a href="<?= base_url('C_Customer/'.$tujuan)?>" style=" color : #fff;"><button
                                        type="button" class="btn btn-info btn-block ">
                                        Pelanggan
                                    </button></a>
                            </div> <!-- form-group// -->
                            <div class="form-group">
                                <a href="<?= base_url('C_Assistent/').$tujuan?>" style="color : #fff;"><button
                                        type="button" class="btn btn-info btn-block">Asisten
                                    </button></a>
                            </div> <!-- form-group// -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>