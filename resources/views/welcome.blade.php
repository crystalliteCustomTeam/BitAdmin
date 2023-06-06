<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>BITSWITS ADMIN</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">BITSWITS.co</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<section>
    <div class="container">
        <div class="wrap mt-5 mb-5">
            <div class="card">
                <div class="card-header">
                    <h3>Login</h3>
                </div>
                <div class="card-body">
                    <form action="/login-process" class="form" method="post">
                        @csrf
                        <div class="form-group">
                            <lable for="useremail">Email</lable>
                            <input type="email" id="useremail" name="useremail" required class="form-control">
                        </div>
                        <div class="form-group mt-2">
                            <lable for="userpassword">Password</lable>
                            <input type="password" id="userpassword" name="userpassword" required class="form-control">
                        </div>
                        <div class="form-group mt-2">
                            <input type="submit"  class="btn btn-success" value="Login">
                            @if (session()->has('status'))
                                <div class="alert alert-danger mt-2">
                                    {{ session('status') }}
                                </div>
                            @endif
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <p>Powered By Bitswits.co </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Optional JavaScript; choose one of the two! -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>
