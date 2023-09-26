@extends('pages.master')

@section('carousel')
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn mb-3">
                    NOTRE EQUIPE</h1>
                <h5 class="text-white">
                    Une grande institution ne vaut que par la qualité de son personnel</h5>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">

                <div class="col-lg-8">

                    <h1 class="mb-4">Organes et structures de l'Association CERMA</h1>
                    <p>
                        <strong>ASSEMBLE GENERALE</strong> <br>

                        L'Assemblée Générale est l'instance suprême de décision de l'Association CERMA et est constituée de
                        l'ensemble des membres fondateurs et des membres adhérents convoqués et réunis à cette fin.
                    </p>

                    <p>
                        <strong>LE CONSEIL D'ADMINISTRATION</strong> <br>

                        Le Conseil d'Administration (CA) est l'organe statutaire mandaté par L'Assemblée Générale pour
                        veiller au bon fonctionnement et à la bonne gestion de l'Association CERMA.
                    </p>

                    <p>
                        <strong>LA DIRECTION GENERALE </strong> <br>

                        La Direction Générale est l'organe technique chargé de la gestion courante de l'Association CERMA
                        sous l'autorité du Conseil d'Administration. Elle exerce ses fonctions sous l'autorité du Conseil
                        d'Administration.
                    </p>
                    <p>
                        <strong>L'AUDIT INTERNE</strong> <br>

                        Indépendant dans sa fonction, l'audit interne a pour mission de garantir le respect et l'application
                        des textes, lois et procédures adoptés par l'institution dans le cadre d'une bonne organisation et
                        un bon fonctionnement des ses services.
                    </p>

                </div>

                <div class="col-lg-4">
                    <div class="wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title-1 section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Contact Information</h3>
                        </div>
                        <div class="bg-primary rounded p-4">
                            <div class="d-flex align-items-center mb-4 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="bg-white d-flex align-items-center justify-content-center rounded"
                                    style="width: 45px; height: 45px;">
                                    <i class="fa fa-phone-alt text-primary"></i>
                                </div>
                                <div class="ps-3">
                                    <p class="text-white mb-1">+229 58 95 41 61</p>
                                    <p class="text-white mb-0">+229 58 95 41 61</p>
                                </div>
                            </div>

                            <div class="d-flex align-items-center wow fadeInUp" data-wow-delay="0.1s">
                                <div class="bg-white d-flex align-items-center justify-content-center rounded"
                                    style="width: 45px; height: 45px;">
                                    <i class="fa fa-phone-alt text-primary"></i>
                                </div>
                                <div class="ps-3">
                                    <p class="text-white mb-1">Direction Generale</p>
                                    <p class="text-white mb-0">Tankpè, Quatier Agori</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        {{-- Membres d'administration CERMA --}}
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative">
                            <img class="img-fluid w-100" src="img/team-1.jpg" alt>

                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Full Name</h4>
                            <p class="text-uppercase m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative">
                            <img class="img-fluid w-100" src="img/team-1.jpg" alt>

                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Full Name</h4>
                            <p class="text-uppercase m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative">
                            <img class="img-fluid w-100" src="img/team-1.jpg" alt>

                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Full Name</h4>
                            <p class="text-uppercase m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative">
                            <img class="img-fluid w-100" src="img/team-1.jpg" alt>

                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Full Name</h4>
                            <p class="text-uppercase m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative">
                            <img class="img-fluid w-100" src="img/team-1.jpg" alt>

                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Full Name</h4>
                            <p class="text-uppercase m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative">
                            <img class="img-fluid w-100" src="img/team-1.jpg" alt>

                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Full Name</h4>
                            <p class="text-uppercase m-0">Designation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
