@extends('pages.master')

@section('carousel')
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn mb-3">
                    Devenir Client</h1>

            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title-1 text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 1000px;">

                <h1 class="mb-2">Soyez avec nous aujourd’hui en ouvrant un compte d’épargne régulièrement mouvementé et
                    nous vous accompagnons dès que vous avez besoin d’un appui financier.</h1>
            </div>
            <div class="row g-5 justify-content-center">

                <div class="col-lg-4 col-md-6 process-item wow slideInUp" data-wow-delay="0.4s">
                    <div class="position-relative d-flex flex-column align-items-center text-center">
                        <div class="process-icon bg-primary rounded d-flex align-items-center justify-content-center mb-4">
                            <i class="fa fa-sitemap fa-2x text-white"></i>
                        </div>
                        <h3>Se rendre sur notre agence la plus proche</h3>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 process-item wow slideInUp" data-wow-delay="0.6s">
                    <div class="position-relative d-flex flex-column align-items-center text-center">
                        <div class="process-icon bg-primary rounded d-flex align-items-center justify-content-center mb-4">
                            <i class="fa fa-code fa-2x text-white"></i>
                        </div>
                        <h3>Se faire ouvrir un compte d’épargne ordinaire</h3>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 process-item wow slideInUp" data-wow-delay="0.8s">
                    <div class="position-relative d-flex flex-column align-items-center text-center">
                        <div class="process-icon bg-primary rounded d-flex align-items-center justify-content-center mb-4">
                            <i class="fa fa-check fa-2x text-white"></i>
                        </div>
                        <h3>Mouvementer ce compte pendant une période de trois (03) mois</h3>

                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Les avantages d'être un client --}}
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="section-title-1 text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 1000px;">

                        <h1 class="mb-2">Quels sont les avantages de créer un compte chez CERMA Microfinance</h1>
                    </div>

                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-5"><i class="fa fa-check text-primary me-3"></i>Vous avez accès à tous nos
                                services selon vos besoins</h5>
                            <h5 class="mb-5"><i class="fa fa-check text-primary me-3"></i>Vos ressources sont à l’abri du
                                vol et de toute situation stressante</h5>
                            <h5 class="mb-5"><i class="fa fa-check text-primary me-3"></i>Vous n’avez plus le souci du
                                financement de votre projet d’entreprise</h5>

                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-5"><i class="fa fa-check text-primary me-3"></i>Vous êtes bien traité et vos
                                informations personnelles sont protégées</h5>
                            <h5 class="mb-5"><i class="fa fa-check text-primary me-3"></i>Vous faites aisément face à vos
                                investissements imprévus</h5>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- Nos Partenaires --}}

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="img/vendor-1.jpg" alt>
                    <img src="img/vendor-2.jpg" alt>
                    <img src="img/vendor-3.jpg" alt>
                    <img src="img/vendor-4.jpg" alt>
                    <img src="img/vendor-5.jpg" alt>
                    <img src="img/vendor-6.jpg" alt>
                    <img src="img/vendor-7.jpg" alt>
                    <img src="img/vendor-8.jpg" alt>
                    <img src="img/vendor-9.jpg" alt>
                </div>
            </div>
        </div>
    </div>

    {{-- Fin Nos Partenaires --}}
@endsection
