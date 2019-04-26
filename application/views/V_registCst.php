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
    <div class=" container registAst col-md-7" style="margin-top : 100px;">
        <?php echo $this->session->flashdata('message'); ?>
        <div class="card">
            <header class="card-header">
                <a href="<?= site_url('')?>" class="float-right btn btn-outline-info mt-1">Sign in</a>
                <h4 class="card-title mt-2">Create Account</h4>
            </header>
            <div class="card-body">
                <div class="row pb-2">
                    <div class="col-md-12">
                        <div class="wrap bg-white ">
                            <div class="card">
                                <div class="card-body">
                                    <form action="<?= base_url('C_Customer/regisCst') ?>" method="post">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Nama </label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" placeholder="Full Name"
                                                    name="nama">
                                                <?=form_error('nama','<small class="text-danger">','</small>');?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Email </label>
                                            <div class="col-sm-8">
                                                <input placeholder="Your Email" type="email" class="form-control"
                                                    name="email">
                                                <?=form_error('email','<small class="text-danger">','</small>');?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Password </label>
                                            <div class="col-sm-8">
                                                <input placeholder="Password" type="password" class="form-control"
                                                    name="password">
                                                <?=form_error('password','<small class="text-danger">','</small>');?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Re-Password </label>
                                            <div class="col-sm-8">
                                                <input placeholder="Repeat your Password" type="password"
                                                    class="form-control" name="password-re">
                                                <?=form_error('password-re','<small class="text-danger">','</small>');?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Provinsi</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" id="wilayah" name="wilayah">
                                                    <?php foreach($provinsi as $p){ ?>
                                                    <option value="<?=$p?>"><?=$p?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Instansi</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="instansi" class="form-control">
                                                <?=form_error('instansi','<small class="text-danger">','</small>');?>
                                            </div>

                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-md-2"><button class="btn btn-info" type="submit">Sign
                                                    Up</button></div>
                                        </div>
                                    </form>
                                </div>
                            </div> <!-- card-body end .// -->
                        </div> <!-- card.// -->
                    </div>
</body>

</html>