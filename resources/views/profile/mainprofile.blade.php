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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.min.js" integrity="sha512-7U4rRB8aGAHGVad3u2jiC7GA5/1YhQcQjxKeaVms/bT66i3LVBMRcBI9KwABNWnxOSwulkuSXxZLGuyfvo7V1A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 
</head>

<body>
    
    <script>AOS.init();</script>

    <header class="bg-hero-codecyan pt-4 pb-4 pb-md-0">
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
                        <li class="nav-item me-5">
                            <a class="nav-link active" aria-current="page" href="">Profile</a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link" href="/home">Home</a>
                        </li>
                        <li class="nav-item me-5">
                            <a id="logoutbutton" class="nav-link" href="/logout">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="main-codecyan">
        <section style="background-color: #68bfe549">
            <div class="container py-5">
    
                <div class="row">
                    <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                        <img src="{{asset('/storage/avatar/'.$user->profilepic)}}" id="avatarimg" alt="avatar"
                            class="img-fluid">
                        <h5 class="my-3">{{ $user->name }}</h5>
                        <p class="text-muted mb-4">{{$user->city}}</p>
                        </div>
                    </div>
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body p-0">
                        <ul class="list-group d-flex justify-content-between align-items-center p-3">Rekomendasi olahraga populer</ul>
                        <hr>

                        <div class="d-flex justify-content-center mb-2">
                            <button type="button" class="btn btn-outline-primary ms-1">Buat</button>
                            <button type="button" class="btn btn-outline-primary ms-1">Daftar rekomendasi saya</button>
                        </div>

                        <ul class="list-group list-group-flush rounded-3">
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <a class="mb-0">Mau cepat kurus? ini saran olahraga dari gw</a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <a class="mb-0">Mau cepat kurus? ini saran olahraga dari gw</a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <a class="mb-0">Mau cepat kurus? ini saran olahraga dari gw</a>
                            </li>
                            
                        </ul>
                        </div>
                    </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Nama</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$user->name}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Email</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$user->email}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Berat Badan</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$userHealthNow->weight}} KG</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Tinggi Badan</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$userHealthNow->height}} CM</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">BMI</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$userHealthNow->bmi}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <button class="btn btn-primary float-end mx-1">Perbarui data kesehatan</button>

                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        Perbarui data tinggi dan berat badan
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="staticBackdrop" 
                                        data-bs-backdrop="static" data-bs-keyboard="false" 
                                        tabindex="-1" aria-labelledby="staticBackdropLabel" 
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Perbarui tinggi dan berat badanmu!</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                
                                            <form method="post" action="/addhealth">
                                                @csrf
                                            <div class="mb-3">
                                                <label for="heightinput" class="form-label">Tinggi badan</label>
                                                <input type="number" class="form-control" id="heightinput" aria-describedby="heightinput" name="height">
                                                <div id="emailHelp" class="form-text">Mohon masukkan tinggi badan anda dalam satuan CM</div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="weightinput" class="form-label">Berat badan</label>
                                                <input type="number" class="form-control" id="weightinput" name="weight">
                                                <div id="emailHelp" class="form-text">Mohon masukkan berat badan anda dalam satuan KG</div>
                                            </div>
                
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                            </div>
                                        </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="row">
                                <div class="col-md-6">  
                                    <div class="card mb-4 mb-md-0">
                                        <div class="card-body">
                                            <p><span class="text-primary font-italic me-1">GRAFIK</span> Tinggi Badan </p>
                                            <!-- chart -->
                                            <canvas id="myChart1"></canvas>
                                            <script>
                                                    const labelsDate1 = {!! json_encode($labels) !!};
                                                    const bmiData = {!! json_encode($bmiData) !!};
                                                    const heightData = {!! json_encode($heightData) !!};
                                                    const weightData = {!! json_encode($weightData) !!};

                                                const labels1 = [labelsDate1[0], labelsDate1[1], labelsDate1[2],labelsDate1[3], labelsDate1[4]];
                                                const data1 = {
                                                    labels: labels1,
                                                    datasets: [{
                                                        data: [heightData[0], heightData[1], heightData[2], heightData[3], heightData[4]],
                                                        fill: false,
                                                        borderColor: 'rgb(75, 192, 192)',
                                                        tension: 0.1,
                                                        pointStyle: 'circle',
                                                        pointRadius: 10,
                                                        pointHoverRadius: 15
                                                    }]
                                                };
                                                const config = {
                                                    type: 'line',
                                                    data: data1,
                                                    options: {
                                                        responsive: true,
                                                        plugins: {
                                                            title: {
                                                                display: true,
                                                            },
                                                            legend: {
                                                                display: false
                                                            }
                                                        }
                                                    }
                                                };
                                                // Ini adalah bagian yang diperlukan untuk membuat grafik muncul
                                                const ctx = document.getElementById('myChart1').getContext('2d');
                                                new Chart(ctx, config);
                                            </script>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">  
                                    <div class="card mb-4 mb-md-0">
                                        <div class="card-body">
                                            <p><span class="text-primary font-italic me-1">GRAFIK</span> Berat Badan </p>
                                            <!-- chart -->
                                            <canvas id="myChart2"></canvas>
                                            <script>
                                                const labelsDate2 = {!! json_encode($labels) !!};
                                                const labels2 = [labelsDate2[0], labelsDate2[1], labelsDate2[2],labelsDate2[3], labelsDate2[4]];
                                                const data2 = {
                                                    
                                                    labels: labels2,
                                                    datasets: [{
                                                        data: [weightData[0], weightData[1], weightData[2], weightData[3], weightData[4]],
                                                        fill: false,
                                                        borderColor: 'rgb(75, 192, 192)',
                                                        tension: 0.1,
                                                        pointStyle: 'circle',
                                                        pointRadius: 10,
                                                        pointHoverRadius: 15
                                                    }]
                                                };
                                                const config2 = {
                                                    type: 'line',
                                                    data: data2,
                                                    options: {
                                                        responsive: true,
                                                        plugins: {
                                                            title: {
                                                                display: true,
                                                            },
                                                            legend: {
                                                                display: false
                                                            }
                                                        }
                                                    }
                                                };
                                                // Ini adalah bagian yang diperlukan untuk membuat grafik muncul
                                                const ctx2 = document.getElementById('myChart2').getContext('2d');
                                                new Chart(ctx2, config2);
                                            </script>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">  
                                    <div class="card mb-4 mb-md-0 mt-3">
                                        <div class="card-body">
                                            <p><span class="text-primary font-italic me-1">GRAFIK</span> BMI </p>
                                            <!-- chart -->
                                            <canvas id="myChart3"></canvas>
                                            <script>
                                                const labelsDate3 = {!! json_encode($labels) !!};
                                                const labels3 = [labelsDate3[0], labelsDate3[1], labelsDate3[2],labelsDate3[3], labelsDate3[4]];
                                                const data3 = {
                                                    labels: labels3,
                                                    datasets: [{
                                                        label: '',
                                                        data: [bmiData[0], bmiData[1], bmiData[2], bmiData[3], bmiData[4]],
                                                        fill: false,
                                                        borderColor: 'rgb(75, 192, 192)',
                                                        tension: 0.1,
                                                        pointStyle: 'circle',
                                                        pointRadius: 10,
                                                        pointHoverRadius: 15
                                                    }]
                                                };
                                                const config3 = {
                                                    type: 'line',
                                                    data: data3,
                                                    options: {
                                                        responsive: true,
                                                        plugins: {
                                                            title: {
                                                                display: true,
                                                            },
                                                            legend: {
                                                                display: false
                                                            }
                                                        }
                                                    }
                                                };
                                                // Ini adalah bagian yang diperlukan untuk membuat grafik muncul
                                                const ctx3 = document.getElementById('myChart3').getContext('2d');
                                                new Chart(ctx3, config3);
                                            </script>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
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
