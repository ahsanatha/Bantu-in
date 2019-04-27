<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lelang</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Bantu.In</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nama</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../pages/dashboard.html">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="lelang.html">Lelang
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.html">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->

    <div class="container mt-4">

        <div class="row">

            <div class="col-lg-3">
                <br>
                <br>
                <br>
                <img src="http://placehold.it/100x90">
                <br>
                <h3>Kategori</h3>
                <div class="list-group">
                    <a href="#" class="list-group-item">Baby Sister</a>
                    <a href="#" class="list-group-item">Parent Caregivers</a>
                    <a href="#" class="list-group-item">Assisten Rumah Tangga</a>
                    <a href="#" class="list-group-item">Lainya</a>

                </div>

            </div>
            <div class="col-lg-9 mt-5">
                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Nama</a>
                            </h4>
                            <h5>$24.99</h5>
                            <p class="card-text">Deskripsi</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <form>
                        <div class="form-group">
                            <label for="lelang">Nilai Lelang</label>
                            <input type="nummber" class="form-control" id="inputlelang" placeholder="Masukan nominal">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>



</body>

</html>