<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SEHATi!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="/css/profcomp.css" rel="stylesheet">
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
        <section style="background-color: #b0e7ff49">
            <div class="container py-5">
    
                <div class="container bootstrap snippets bootdey">
                    <h1 >Lengkapi Profil</h1>
                    <hr>
                    <div class="row">
                        <div class="personal-info">
                            <!-- <div class="alert alert-info alert-dismissable">
                                <a class="panel-close close" data-dismiss="alert">×</a> 
                                <i class="fa fa-coffee"></i>
                                This is an <strong>.alert</strong>. Use this to show important messages to the user.
                            </div> -->
                                    
                            <form id="profil-add" enctype="multipart/form-data" action="{{route('completeprofile')}}" method="post">
                                @csrf
                                @method('put')
                                <div class="text-center mx-auto">
                                    <div class="col-md-7 mx-auto mb-3">
                                        <img src="/assets/avatar.png" class="avatar img-circle img-thumbnail" alt="avatar">
                                    </div>
                                </div>
                            <div class="form-group">
                                <label class=" control-label">Nama Lengkap:</label>
                                <div class="">
                                    <input class="form-control" type="text" value="{{$user->name}}" name="name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Tanggal Lahir</label>
                                <div class="">
                                    <input class="form-control" type="date" value="{{$user->birthdate}}" name="birthdate">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Tinggi Badan(cm):</label>
                                <div>
                                    <input class="form-control" type="number" value="{{$user->height}}" name="height">
                                </div>            
                            </div>
                            <div class="form-group">
                                <label class="control-label">Berat Badan(kg):</label>
                                <div class="">
                                    <input class="form-control" type="number" value="{{$user->weight}}" name="weight">
                                </div>
                            </div>            
                            <div class="form-group">
                                <label class="ontrol-label">Kota Asal</label>
                                <div>
                                    <div class="ui-select">
                                        <select id="kota_asal" class="form-control" name="city">
                                            <option value="semarang">Semarang</option>
                                            <option value="surakarta">Surakarta</option>
                                            <option value="salatiga">Salatiga</option>
                                            <option value="magelang">Magelang</option>
                                            <!-- Tambahkan kota-kota lainnya sesuai kebutuhan -->
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h6>Unggah Foto Profil</h6>
                                <input type="file" class="form-control" name="image">
                            </div>
                            <div class="form-group text-center">
                                <input class="btn btn-primary mt-2" type="submit" value="Submit">
                            </div>
                            </form>            
                        </div>
                    </div>
                </div>
                <hr>
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
