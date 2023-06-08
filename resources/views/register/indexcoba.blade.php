
<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.library')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="alpha">

    <div class="container">

        <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">

                <!-- Nested Row within Card Body -->

            {{-- Form Registrasi --}}
            <form action="/register" method="post">
                @csrf
                
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block">
                        <img src="{{ asset('img/cover.png') }}" class="" alt="" width="464" height="522">
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            {{-- Alert --}}
                            @if(session()->has('Success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('Success') }}
                                
                            </div>
                            @endif
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user">
                                {{-- Form Name --}}
                                <div class="form-group">
                                        <input type="text" name="name" class="form-control form-control-user rounded-pill @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                                        
                                        
                                        @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                </div>
                                

                                {{-- Form Email --}}
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user rounded-pill @error('email') is-invalid @enderror" id="email" placeholder="Email" required value="{{ old('email') }}">
                                
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                </div>
                                {{-- Form Password --}}
                                <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user rounded-pill @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                                        @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                <br>
                                <button class="btn btn-primary btn-user btn-block rounded-pill" type="submit">
                                    Register Account
                                </button>
                                <br>
                                <hr>
                                <br>
                                <br>

                            <div class="text-center">
                                <a class="small" href="login">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            </div>
            </div>
        </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>