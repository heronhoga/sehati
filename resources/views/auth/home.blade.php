<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SEHATi!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="/css/styles.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <script>AOS.init();</script>

    <header class="bg-hero-codecyan pt-4 pb-4 pb-md-0">
        <nav class="navbar navbar-expand-lg">
            <div class="container-xxl g-codecyan">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto my-3 my-lg-0">
                        <li class="nav-item me-5">
                            <a class="nav-link active" aria-current="page" href="/home">Hi, {{session('user_data.username')}}</a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link" href="/profile">Profile</a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal" id="logoutbutton">Logout</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <section class="mt-5 mb-5 mb-md-0 welcome" data-aos="flip-left"  data-aos-duration="1000">
            <div class="container-xxl g-codecyan overflow-hidden">
                <div class="row justify-content-between align-items-center gx-5 gy-5">
                        <div class="text-center textWelcome">
                            <h1 class="display-1 fw-bold lh-base"><span class="text-accent-codecyan">SEHATi</span>
                            </h1>
                            <h4 class="display-1 fw-bold lh-base">Your Life Companion</h4>
                        </div>
                </div>
            </div>
            </div>

        </section>
    </header>


    <main class="main-codecyan">

        <section id="about" class="bg-white py-5">
            <div class="container-xxl g-codecyan overflow-hidden py-5">
                <div class="row justify-content-between align-items-center gap-5 my-4">

                    <div class="col-md-5 order-1 order-md-0">
                        <div class="row gap-5">
                            <div class="col-12">
                                <div class="bg-white px-4 py-4 rounded-5 border">
                                    <div class="row align-items-center">
                                        
                                            <img src="assets/logoSEHATI.png" class="logoSEHATI" alt="SEHATi">
                                        
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="text-center text-md-start" data-aos="zoom-out-right" data-aos-duration="1000">
                            <h4 class="fw-bold text-danger">Apa itu SEHATi?</h4>
                            <h1 class="display-2 fw-bold">Tentang Kami</h1>
                        </div>
                        <p class="mt-5 lh-lg aboutus" data-aos="zoom-in" data-aos-duration="1000">SEHATi merupakan aplikasi media informasi pola hidup sehat yang dikembangkan dengan platform web. Situs web SEHATi memungkinkan pengguna untuk mengakses berbagai informasi yang berkaitan dengan pola hidup sehat yakni meliputi rekomendasi makanan sehat hingga tempat atau lapangan yang bisa digunakan untuk berolahraga di sekitar domisili pengguna situs web SEHATi.</p>


                        <a class="mt-4 btn btn-accent-codecyan btn-lg" href="#portfolio" role="button">Eksplor sekarang!  
                                </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="portfolio" class="bg-odd-codecyan py-5">
            <div class="container-xxl g-codecyan overflow-hidden py-5">
                <div class="text-center text-md-start" data-aos="zoom-out-left" data-aos-duration="1000">
                    <h4 class="fw-bold text-success">Rekomendasi untuk menunjang pola hidup sehat</h4>
                    <h1 class="display-2 fw-bold">Jaga sehatmu!</h1>
                </div>
                <div class="row justify-content-between gx-5 gy-5 my-4">
                    <div class="col-md-4">
                        <a href="">
                        <div class="bg-green-codecyan anim-codecyan rounded-5 overflow-hidden">
                            <div class="p-5 pb-3">
                                <h1 class="fw-bold text-light">Healthy foods</h1>
                                <p class="fs-4 text-light">Rekomendasi makanan-makanan sehat
                                    untuk kamu
                                </p>
                            </div>
                            <div class="ms-5"><img class="img-fluid w-100 category" src="assets/healthyfoods.png" /></div>
                        </a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <a href="">
                        <div class="bg-blue-codecyan anim-codecyan rounded-5 overflow-hidden">
                            <div class="p-5 pb-3">
                                <h1 class="fw-bold text-light">Sport spots</h1>
                                <p class="fs-4 text-light">Rekomendasi tempat latihan dan olahraga untuk kamu
                                </p>
                            </div>
                            <div class="ms-5"><img class="img-fluid w-100 category" src="assets/sportspots.png" /></div>
                        </div>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="">
                        <div class="bg-yellow-codecyan anim-codecyan rounded-5 overflow-hidden">
                            <div class="p-5 pb-3">
                                <h1 class="fw-bold text-light">Exercises    </h1>
                                <p class="fs-4 text-light">Rekomendasi olahraga favorit dari teman-teman SEHATi</p>
                            </div>
                            <div class="ms-5"><img class="img-fluid w-100 category" src="assets/exercises.png" /></div>
                        </div>
                        </a>
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

    <!--MODAL-->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">LOGOUT</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Apakah anda yakin ingin keluar?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
            <form action="/logout" method="get">
            <button type="submit" class="btn btn-primary">Iya</button>
            </form>
        </div>
        </div>
    </div>
    </div>

    @if(session('message'))
    <script>
        // Wait for the page to load completely
        document.addEventListener('DOMContentLoaded', function () {
            // Use SweetAlert to display the message
            Swal.fire({
                title: '{{ session('message') }}',
                icon: 'success',
            });
        });
    </script>
@endif



    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
        
</body>

</html>
