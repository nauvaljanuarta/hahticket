<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Purple_Theme" data-layout="Horizontal">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/logoticket.png" />

    <!-- Core Css -->
    <link rel="stylesheet" href="../assets/css/styles.css" />

    <title>Hahticket?!</title>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <img src="../assets/images/logos/loader.svg" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <div id="main-wrapper" class="p-0 bg-white">
        <div
            class="auth-login position-relative overflow-hidden d-flex align-items-center justify-content-center px-7 px-xxl-0 rounded-3 h-n20">
            <div class="auth-login-shape position-relative w-100">
                <div class="auth-login-wrapper card mb-0 container position-relative z-1 h-100 max-h-770"
                    data-simplebar>
                    <div class="card-body">
                        <a href="../dark/index.html" class="">
                            <img src="../assets/images/logos/hahkecil1.svg" class="dark-logo" alt="Logo-light"
                                style="width: 400px; height: auto;" />
                        </a>
                        <div class="row align-items-center justify-content-around pt-6 pb-5">
                            <div class="col-lg-6 col-xl-5 d-none d-lg-block">
                                <div class="text-center text-lg-start">
                                    <img src="../assets/images/backgrounds/login-security.png" alt=""
                                        class="img-fluid" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-5">
                                <h2 class="mb-6 fs-8 fw-bolder">Welcome to Hahticket?!</h2>
                                <p class="text-dark fs-4 mb-7">Your Event All Here!!</p>
                                <form method="POST" action="/login">
                                    @csrf
                                    <div class="mb-7">
                                        <label for="exampleInputEmail1"
                                            class="form-label text-dark fw-bold">Email</label>
                                        <input type="email" class="form-control py-6" name="email"
                                            id="exampleInputEmail1" aria-describedby="emailHelp" />
                                    </div>
                                    <div class="mb-9">
                                        <label for="exampleInputPassword1"
                                            class="form-label text-dark fw-bold">Password</label>
                                        <input type="password" class="form-control py-6" name="password"
                                            id="exampleInputPassword1" />
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-7 pb-1">
                                        <div class="form-check">
                                            <input class="form-check-input primary" type="checkbox" value=""
                                                id="flexCheckChecked" checked />
                                            <label class="form-check-label text-dark fs-3" for="flexCheckChecked">
                                                Remeber this Device
                                            </label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100 mb-7 rounded-pill">Sign
                                        In</button>
                                    <div class="d-flex align-items-center">
                                        <p class="fs-3 mb-0 fw-medium">New to Spike?</p>
                                        <a class="text-primary fw-bold ms-2 fs-3" href="/register">Create an account</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dark-transparent sidebartoggler"></div>
    </div>
    <!-- Import Js Files -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="../assets/js/theme/app.init.js"></script>
    <script src="../assets/js/theme/theme.js"></script>
    <script src="../assets/js/theme/app.min.js"></script>
    <script src="../assets/js/theme/sidebarmenu.js"></script>
    <script src="../assets/js/theme/feather.min.js"></script>

    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>
