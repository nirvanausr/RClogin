<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RadioCloud-Laboratoire</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/medecin.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/medecin.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <div class="container-fluid">
        <!--notre header-->
        <header>
            <!--hero-->
            <div class="hero d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom fixed-top bg-white">
                <!--le logo-->
                <div class="col-8">
                    <a href="#acceuil" class="d-flex align-items-center">
                        <img src="{{ asset('img/logo.png') }}" width="300" height="70" class="logo">
                    </a>
                </div>



                <!--la navbar-->
                <div class="col-4">
                    <ul class="nav justify-content-end accordion">


                        <li class="nav-item">
                            <a class="nav-link text-decoration-none" href="#acceuil">
                                <i class="fas fa-fw fa-home"></i> Acceuil
                            </a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-link text-decoration-none " href="#info">
                                <i class="fas fa-fw fa-info  "></i> info
                            </a>
                        </li>

                        <li class="nav-item">

                            <a class="nav-link text-decoration-none " href="../index.html">
                                <i class="fa fa-sign-out-alt"></i> LogOut
                            </a>


                        </li>



                    </ul>

                </div>



            </div>


        </header>
        <hr class="my-4">
        <br/>
        <br/>

        <!--La main -->
        <main class="col-md-12">
            <!--Présentation-->
            <div class="text-center">
                <h1 class="display-4 fw-normal" id="acceuil">RadioCloud.com</h1>
                <p class="fs-5 text-muted">Bienvenu dans votre compte labo.</p>
            </div>
            <div class="cta w-100 row row-cols-1 row-cols-md-3 mb-3 text-center">
                <!--Gérant-->
                <div class="lacard col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3 bg-dark text-white">
                            <h4 class="my-0 fw-normal ">Gérant</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">

                                <i class="fas fa-fw fa-user "></i>
                                <span>Gérant</span>
                            </h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Gérer les utilisateurs</li>
                                <br/>
                                <br/>
                            </ul>
                            <button type="button" class="w-100 btn btn-lg btn-outline-dark"><a href="Gerant/Gerant.html">Se Connecter</a></button>
                        </div>
                    </div>
                </div>
                <!--Le médecin-->
                <div class="lacard col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3 bg-gradient-success text-white">
                            <h4 class="my-0 fw-normal ">Médecin</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title text-success">

                                <i class="fas fa-fw fa-user-md "></i>
                                <span>Médecin</span>
                            </h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Gérer les dossier des patients et examanes médicaux</li>
                                <br/>

                            </ul>
                            <button type="button" class="w-100 btn btn-lg btn-outline-success"><a href="medecin/medecin.html">Se Connecter</a> </button>
                        </div>
                    </div>
                </div>
                <!--la secrétaire-->
                <div class="lacard col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3 bg-gradient-info text-white">
                            <h4 class="my-0 fw-normal ">Secrétaire</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title text-primary">

                                <i class="fas fa-fw fa-female"></i>
                                <span>Secrétaire</span>
                            </h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Gérer les les rendez-vous </li>
                                <li>Gérer les les résultats d'éxamens médicaux</li>
                                <br/>

                            </ul>
                            <button type="button" class="w-100 btn btn-lg btn-outline-primary"><a href="secretaire/secretaire.html">Se Connecter</a></button>
                        </div>
                    </div>
                </div>












            </div>
        </main>
        <hr class="my-4">
        <!-- la section info-->
        <section class="bg-white text-dark" id="info">
            <h1 class="text-center">Infomations</h1>
            <div class="d-flex align-items-stretch">
                <div class="col-md-12 ">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Laboratoire :</h4>
                        <p>Centre d'Imagerie Médicale d'Alger - Pr. Yaker - CIMA</p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>CIMA.alger@gmail.com</p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Tell:</h4>
                        <p>+213 34 55 55 55 </p>
                    </div>
                    <hr class="my-4">
                    <iframe src="https://maps.google.com/maps?q=Centre%20d'Imagerie%20M%C3%A9dicale%20d'Alger%20-%20Pr.%20Yaker%20-%20CIMA&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                </div>

            </div>



        </section>




    </div>
    <hr class="my-4">
    <!--notre footer-->
    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container row-cols-1 my-auto">
            <div class="copyright text-center my-auto">
                <img src="{{ asset('img/logotag.png') }}" alt="Logo RadioCloud" width="200" height="120" class="logo">
            </div>
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; RadioCloud 2022</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->


    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/medecin.min.js') }}"></script>






</body>

</html>
