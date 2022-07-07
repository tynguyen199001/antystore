<!DOCTYPE html>
<html lang="en">
<head>
    <title>ANTY-STORE LOGIN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://www.markuptag.com/bootstrap/5/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="login-form bg-light mt-4 p-4">
                <form action="{{route('login.loginAdmin')}}" method="post" class="row g-3">
                    @csrf
                    <h4>Welcome Back</h4>
                    <div class="col-12">
                        @if (Session::has('success'))
                            <div class="alert alert-danger">{{session::get('success')}}</div>
                        @endif
                        <label>Username</label>
                        <input type="text" name="email" class="form-control" placeholder="Username">
                            @if (Session::has('error_phone'))
                                <div class="alert alert-danger">{{session::get('error_phone')}}</div>
                            @endif
                    </div>
                    <div class="col-12">
                        <label>Password</label>
                        <input type="text" name="password" class="form-control" placeholder="Password">

                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" name="remember_me" type="checkbox" id="rememberMe">
                            <label class="form-check-label" for="rememberMe"> Remember me</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-dark float-end">Login</button>
                    </div>
                </form>
                <hr class="mt-4">
                <div class="col-12">
                    <p class="text-center mb-0">Have not account yet? <a href="#">Signup</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap JS -->
<script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>
</html>
