<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SEHATi!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="/css/login.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> 
</head>

<body>
    <script>AOS.init();</script>

    <header class="pt-4 pb-4 pb-md-0">
        <nav class="navbar navbar-expand-lg">
            <div class="container-xxl g-codecyan">
                <img style="max-width: 10%; max-height: 10%;" src="assets/logoSEHATI.png" class="logoSEHATI" alt="SEHATi">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto my-3 my-lg-0">
                        <!-- <li class="nav-item me-5" style="max-width: 10%;"><img src="assets/logoSEHATI.png" class="logoSEHATI" alt="SEHATi"></li> -->
                        <li class="nav-item me-5">
                            <a class="nav-link" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link active" href="/login">Login</a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link" href="{{route('register')}}">Register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <main class="bg-hero-codecyan">
        <section class="py-5">
            <div class="container-xxl g-codecyan overflow-hidden py-5">
                <div class="row justify-content-center align-items-center gap-5 my-4">
                    <div class="col-md-6">
                        <!-- Form Login -->
                        <div class="text-left" data-aos="zoom-out-right" data-aos-duration="1000">
                            <form class="mt-4" action="/login" method="post">
                                @csrf
                                @method('post')
                                <h4 class="fw-bold text-blue mb-5 mt-1 text-center">Login</h4>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input
                                        type="email"
                                        class="form-control"
                                        placeholder="Masukkan email"
                                        name="email"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input
                                        type="password"
                                        class="form-control"
                                        placeholder="Masukkan password"
                                        name="password"
                                    />
                                </div>
                                <div class="text-center mt-3 mb-3">
                                    <button type="submit" class="btn btn-accent-codecyan btn-lg mt-3">Login</button>
                                </div>
                                <p class="mt-5 text-center">Belum punya akun? <a href="/register">Daftar disini</a></p>
                            </form>
                        </div>
                        <!-- Akhir Form Login -->
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer id="contact" class="bg-white">
        <div class="py-2">
            <div class="row justify-content-between gy-5">
                <div class="col-md-6">TECHNOLOGY EUPHORIA 2023
                    <img class="techpo" src="assets/techpo.png" alt="Technology Euphoria 2023">
                    <span style="font-weight: 700;">&#169; Tim Wong Sepele</span>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
</body>

</html>
