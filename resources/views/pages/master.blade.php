<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.htmlcodex.com/pro/startup/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Aug 2023 23:34:32 GMT -->

<head>
    <meta charset="utf-8">
    <title>CERMA - Centre d'Etude et de Recherche Médico-psycho-Sociales Appliquées</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    @include('layout.includes.css')
</head>

<body>

    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>


    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>C/ TF-7777, Abomey-Calavi
                    </small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>(+229) 58 95 41 61</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i><a href="">Nous
                            écrire</a></small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">

                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href><i
                            class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href><i
                            class="fab fa-linkedin-in fw-normal"></i></a>

                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href><i
                            class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href class="navbar-brand p-0">
                <img src="{{ asset('img/logo3.png') }}" alt="Logo">

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">

                    <a href="{{ route('accueil') }}" class="nav-item nav-link active">Accueil</a>



                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">A Propos
                        </a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ route('notre_institution') }}" class="dropdown-item">Notre Institution </a>
                            <a href="{{ route('notre_equipe') }}" class="dropdown-item">Notre équipe</a>
                            <a href="{{ route('nos_agences') }}" class="dropdown-item">Nos poins de service</a>

                        </div>
                    </div>


                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Nos Produits
                        </a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ route('produits_credit') }}" class="dropdown-item">Produits de crédit</a>
                            <a href="{{ route('produits_epargne') }}" class="dropdown-item">Produits d’épargne</a>



                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Actualités</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ route('devenir_un_client') }}" class="dropdown-item">Nouvelles</a>
                            <a href="{{ route('temoignages') }}" class="dropdown-item">Histoires &
                                Témoignages</a>


                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Nous Rejoindre</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ route('devenir_un_client') }}" class="dropdown-item">Devenir Client</a>
                            <a href="{{ route('credit_epargne_particuliers') }}" class="dropdown-item">Nos offres
                                d’emplois</a>
                            <a href="{{ route('produits_epargne') }}" class="dropdown-item">Candidatures spontanées</a>


                        </div>
                    </div>

                    <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
                </div>

                <a href="{{ route('nos_agences') }}" class="btn btn-primary py-2 px-3 ms-3">Nos Agences</a>
            </div>
        </nav>
        @yield('carousel')
    </div>

    @yield('content')


    <div class="container-fluid bg-dark text-light mt-5">
        @include('layout.includes.footer')
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">&copy; <a class="text-white">2023 Services Informatiques CERMA
                                Microfinance</a> - TOUS DROITS RÉSERVÉS

                    </div>
                </div>
            </div>
        </div>
    </div>


    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i
            class="bi bi-arrow-up"></i></a>

    @include('layout.includes.script')
</body>



</html>
