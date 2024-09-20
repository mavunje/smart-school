<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ env('APP_NAME') }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}">

    <style>
        .login-container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .login-box {
            width: 100%;
            max-width: 400px;
        }
    </style>

</head>

<body>

    <main>

        <div class="container-fluid login-container">

            <div class="login-box">
                <h1 class="text-center py-3 text-primary">SCHOOL MANAGEMENT SYSTEM</h1>
                <div class="card">
                    <div class="card-body">
                        <div class="pt-2 pb-2">
                            <h5 class="card-title text-center pb-0 fs-4">Login to Your Account </h5>
                            <p class="text-center small"><b>Enter your Email & password to login </b></p>
                        </div>

                        @include('message')
                        <p>Hello</p>
                        
                        <form class="row g-3" action="" method="POST">

                            {{ csrf_field() }}

                            <div class="col-12">
                                <label for="Email" class="form-label">Email</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                    <input type="text" name="email" class="form-control" id="youremail" required
                                        placeholder="Enter your email">
                                    <div class="invalid-feedback">Please enter your Email.</div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="yourPassword" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="yourPassword" required
                                    placeholder="Enter your password">
                                <div class="invalid-feedback">Please enter your password!</div>
                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="rememberMe">
                                    <label class="form-check-label" for="rememberMe">Remember me</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100" type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>

                <footer class="footer mt-3 text-center">
                    <div class="copyright">
                        &copy; Copyright <strong><span>Kaengesa Seminary</span></strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        Designed by <a href="">Kennedy Richard Sinkonde</a>
                    </div>
                </footer>
            </div>
        </div>

    </main>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/quill/quill.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
