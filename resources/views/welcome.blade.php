<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!--le titre de la page -->
  <title>Cloud Radiologie -Acceuil</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- favicone -->
  <link href="{{  asset('img/radiocludicon.png') }}" rel="icon">
  <link href="{{ asset('/resources/img/radiocludicon.png') }}" rel="apple-touch-icon">
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('vendor/fontawesome-free/css/all.css') }}" rel="stylesheet" type="text/css">
  <!-- les fontes d'écriture -->
  <link href="{{ asset('css/cssfont.css') }}" rel="stylesheet">

  <!-- les fichiers vendors css -->
  <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('/resources/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/resources/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('css/swiper-bundle.min.css') }}" rel="stylesheet">
  <!-- le fichier main de css -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<!-- debut du body -->

<body>

    <!-- ======= Le Header ======= -->
    <header id="header" class="fixed-top ">
      <div class="container d-flex align-items-center">

         <img class="logo me-auto" src="{{ asset('img/logohome1.png') }}" alt="Logo RadioCloud" width="300" height="100" class="logo">


          <nav id="navbar" class="navbar">
              <ul>
                  <li><a class="nav-link scrollto active" href="#hero">Acceuil</a></li>
                  <li><a class="nav-link scrollto" href="#about">A propos</a></li>
                  <li><a class="nav-link scrollto" href="#services">Nos services</a></li>

                  <li><a class="nav-link scrollto" href="#team">Equipe</a></li>

                  <li><a class="nav-link scrollto" href="#contact">Nous contacter</a></li>

                    @if (Route::has('login'))

                    @auth
                     <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                         <li><a class="getstarted scrollto" href="{{ route('login') }}">Se connecter</a> </li>

                    @if (Route::has('register'))
                           <li><a class="getstarted scrollto" href="{{ route('register') }}">S'inscrire</a> </li>
                    @endif
                    @endauth

                  @endif

              </ul>
              <i class="bi bi-list mobile-nav-toggle"></i>
          </nav>
          <!-- fin de la navbare -->

      </div>
  </header>
  <!-- fin du  Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

      <div class="container">
          <div class="row">
              <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                  <h1> LA MELLIEUR SOLUTION POUR LES MEDECINS</h1>
                  <h2>Découvrez en 2 minutes les atouts de la solution RadioCloud . -></h2>
                  <div class="d-flex justify-content-center justify-content-lg-start">
                      <a href="#about" class="btn-get-started scrollto">Inscrivez-vous dès maintant</a>
                      <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="fas fa-fw fa-play"></i><span>Video Présentation</span></a>
                  </div>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                  <img src="{{ asset('img/radio.png') }}" class="img-fluid animated" alt="">
              </div>
          </div>
      </div>

  </section>
  <!-- End Hero -->

  <!-- l'espace main -->
  <main id="main">
     <!-- ======= 1 -A propos de nous ======= -->
     <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>A porpos de nous </h2>
            </div>

            <div class="row content">
                <div class="col-lg-6">
                    <p>
                        RadioCloud est une plateforme en ligne avec une application de gestion de service d'imagerie médicales embarqué.
                    </p>
                    <ul>
                        <li><i class="fas fa-fw fa-circle"></i> Prise de rendez-vous en ligne</li>
                        <li><i class="fas fa-fw fa-circle"></i> Gestion intéligente des patients</li>
                        <li><i class="fas fa-fw fa-circle"></i> Une platteforme faite pour vous</li>
                    </ul>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                        Les Premiérs <b>30</b> Jours sont  <b>GRATUIT </b>!!!! <br/><br/><br/>
                    </p>
                    <a href="#contact" class="btn-learn-more  ">--> Commencez dès maintenant </a>
                </div>
            </div>

        </div>
    </section>
    <!-- End About Us Section -->
     <!-- ======= 2- pk nous  Section ======= -->
     <section id="why-us" class="why-us section-bg">
        <div class="container-fluid" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                    <div class="content">
                        <h3>Découvrez RadioCloud <strong>Le Cloud Médical Algérien</strong></h3>
                        <p>
                            La solution RadioCloud permet d'automatiser la synchronisation en temps réel de vos documents sur nos serveurs à chaque modifiation. Les conséquences d’un sinistre sont ainsi réduites
                        </p>
                    </div>

                    <div class="accordion-list">
                        <ul>
                            <li>
                                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Un gain de temp ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                    <p>
                                        Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Un gain d'argent? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                    <p>
                                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in
                                        cursus turpis massa tincidunt dui.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Un endroit de stockage sécurisé ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                    <p>
                                        Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna
                                        molestie at elementum eu facilisis sed odio morbi quis
                                    </p>
                                </div>
                            </li>

                        </ul>
                    </div>

                </div>

                <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("{{ asset('img/pk_nous.png') }}");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
            </div>

        </div>
    </section>
    <!-- fin de pk nous -->

     <!-- ======= 3-  Section Services  ======= -->
     <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Services</h2>
                <p>RadioCloud propose tout un panel de services .</p>
            </div>

            <div class="row">
                <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4><a href="">Prise de rendez-vous</a></h4>
                        <p>Le Ptient peut prender directemnt un rendez-vous en ligne .</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4><a href="">Gestion des dossier médicaux</a></h4>
                        <p>Un médecin peut créer et manipuler les dossier de ces patient directemnt en ligne</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4><a href="">Gestion des rendez-vous</a></h4>
                        <p>Le service de reception d'un service d'imagerie médicale peut gérer les rendez-vous de ces patient directemnt sur RadioCloud</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-layer"></i></div>
                        <h4><a href="">Visualiser ces résulats en ligne</a></h4>
                        <p>En temps que patient vous pouvez recevoir directement vos résultats d'examen en ligne sans avoir a vous déplacez </p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- fin de la section services -->
     <!-- ======= 4- faire une action ======= -->
     <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">

            <div class="row">
                <div class="col-lg-9 text-center text-lg-start">
                    <h3>Une soluction durable </h3>
                    <p>Vos données seront stockées dans des serveurs sécurisées et durables.</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="#">Nous rejoindre </a>
                </div>
            </div>

        </div>
    </section>
    <!-- fin de l'action -->

    <!-- =======5-  la team  Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Team</h2>
                <p>RadioCloud a été concu est r&aliser par une équipe de 3 personnes.</p>
            </div>

            <div class="row">

                <div class="col-lg-6">
                    <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                        <div class="pic"><img src="{{ asset('img/team/encadrant.png') }}" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Bouchebbah fateh</h4>
                            <span>Encadrant</span>
                            <p>Chef de projet et responsable de la conception et de la gestion de l'equipe</p>
                            <div class="social">
                                <a href=""><i class="fas fa-fw fa-twitter-square"></i></a>
                                <a href=""><i class="fas fa-fw fa-google "></i></a>
                                <a href=""><i class="fas fa-fw fa-github"></i></a>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
                        <div class="pic"><img src="{{ asset('img/team/islam.jpg') }}" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Boulezazen Mohamed islam</h4>
                            <span>Memebre de la team de devloppement</span>
                            <p>Devloppeur web.</p>
                            <div class="social">
                                <a href=""><i class="fas fa-fw fa-twitter"></i></a>
                                <a href=""><i class="fas fa-fw fa-google "></i></a>
                                <a href=""><i class="fas fa-fw fa-github"></i></a>


                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
                        <div class="pic"><img src="{{ asset('img/team/Profile.jpg') }}" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Boumedjmadjene Oussama</h4>
                            <span>Memebre de la team de devloppement</span>
                            <p>Devloppeur web.</p>
                            <div class="social">
                                <a href=""><i class="fas fa-fw fa-twitter"></i></a>
                                <a href=""><i class="fas fa-fw fa-google "></i></a>
                                <a href=""><i class="fas fa-fw fa-github"></i></a>


                            </div>
                        </div>
                    </div>
                </div>


                </div>

            </div>

        </div>
    </section>
    <!-- fin de la  Team Section -->

    <!-- ======= 6- question fréquentes ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>F.A.Q</h2>
                <p> Dans cette partie nous répondons au questions récurrentes posées par les visiteur de la plateforme RadioCloud.
                    </p>
            </div>

            <div class="faq-list">
                <ul>
                    <li data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                            <p>
                                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in
                                cursus turpis massa tincidunt dui.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="300">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna
                                molestie at elementum eu facilisis sed odio morbi quis
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="400">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="500">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                            </p>
                        </div>
                    </li>

                </ul>
            </div>

        </div>
    </section>
    <!-- fin question fréquentes -->

     <!-- ======= 7-  Section Contact======= -->
     <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Un avis sur nos produits, une question, remarque ou suggestion, une proposition commerciale ?
                    Le formulaire de contact ci-dessous est fait pour vous.</p>
            </div>

            <div class="row">

                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="fas fa-fw fa-location"></i>
                            <h4>Location:</h4>
                            <p>Q22R+475, Targa ouzemour, Béjaïa</p>
                        </div>

                        <div class="email">
                            <i class="fas fa-fw fa-envloppe"></i>
                            <h4>Email:</h4>
                            <p>rectorat@univ-bejaia.dz</p>
                        </div>

                        <div class="phone">
                            <i class="fas fa-fw fa-phone"></i>
                            <h4>Tell:</h4>
                            <p>+213(0)34 81 68 19</p>
                        </div>

                        <iframe src="https://maps.google.com/maps?q=universit%C3%A9%20de%20bejaia&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                            style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Votre Nom</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Votre Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Votre Demande</label>
                            <input type="text" class="form-control" name="subject" id="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Message</label>
                            <textarea class="form-control" name="message" rows="10" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Votre méssage a bien était envoyé, Merci !</div>
                        </div>
                        <div class="text-center"><button type="submit">Envoyer Le Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section>
    <!-- fin de la   Section Contact -->

  </main>
<!-- fin de main -->

 <!-- ======= le Footer ======= -->
 <footer id="footer">
  <!-- la news later-->
    <div class="footer-newsletter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h4>Rejoignez notre Newsletter</h4>
                    <p>Notre equipe est a votre disposition pour répondre a vos question</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </div>
      <!-- fin de la news later-->

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>Radio Cloud</h3>
                    <p>
                        Univérsité de Béjaia<br> Béjaia , 06000<br> Algérie <br><br>
                        <strong>Tell:</strong> +213(0)34 81 68 19<br>
                        <strong>Email:</strong> rectorat@univ-bejaia.dz<br>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Liens Utilies</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Acceuil</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">A propos de Nous</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Nos Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Notre Equipe</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Notre politique</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Nos Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Nos réseaux sociaux</h4>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                    <div class="social-links mt-3">
                        <a href="https://github.com/nirvanausr" class="Github"><i class="#"></i></a>
                        <a href="https://mail.google.com/mail/u/0/#inbox" class="Gmail"><i class="#"></i></a>


                    </div>
                </div>

            </div>
        </div>
    </div>
<!-- les copiright -->
    <div class="container footer-bottom clearfix">
        <div class="copyright">
            &copy; Copyright <strong><span>RadioCloud</span></strong>. Tous Les Droits Réservés
        </div>
        <div class="credits">

            Designed by <a href="https://mail.google.com/mail/u/0/#inbox">Nirvana Groupe</a>
        </div>
    </div>
</footer>
<!-- fin du Footer -->



    <!-- les fichier vendors de js -->
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/glightbox.min.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('js/validate.js') }}"></script>
   <!-- notre fichier js principale -->
   <script src="{{ asset('js/main.js') }}"></script>




</body>

</html>






