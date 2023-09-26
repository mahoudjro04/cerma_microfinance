@extends('pages.master')

@section('carousel')
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn mb-3">
                    QUI SOMMES-NOUS?</h1>

            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">

                <div class="col-lg-8">

                    <h1 class="mb-4">Description de la structure</h1>
                    <p>L'Association CERMA est un système financier décentralisé ayant son siège dans le département de
                        l'Atlantique. Elle est officiellement agréée en 2014 sous le numéro A.14.0050.L du 24 janvier 2014
                        par le ministère de l'économie et des finances.<br> L'Association CERMA est régit par la loi 2012-14
                        du 21 mars 2012 portant règlement des systèmes financiers décentralisé en république du Bénin. Elle
                        a la forme juridique "d'Association" avec pour objet, la collecte de l'épargne, les opérations de
                        prêt et les opérations d'engagement par signature. <br>L'Association CERMA intervient dans tous les
                        domaines mais essentiellement la santé, c'est-à-dire le bien-être physique, mental et social, le
                        commerce, la pétite entreprise, l'artisanat et cible prioritairement la couche féminine et les
                        rétraités par appuis.</p>
                    <h1 class="mb-4">Objectifs et mission</h1>
                    <p>L'un des objectifs de l'Association CERMA est de lutter contre la pauvreté, le chômage au niveau des
                        jeunes surtouts des femmes exercant des activités génératrices de revenue au Bénin.C'est pour
                        répondre à cette préocupation que ses dirigeants ont décidés de rendre opérationnelle l'activité de
                        la microfinance en son sein.</p>

                    <p>Pour atteindre cet objectif, l'Association s'est fixé comme mission de : <br>
                    <ul>
                        <li>Rechercher des sources de financement</li>
                        <li>Financer les micros entrepreneur notamment ceux intervenant dans l'un des secteurs relatif aux
                            objectifs cités dans le statut de CERMA en leur facilitant l'accès au crédit </li>
                        <li>Encourager le développement des micros entrepreneur pour une plus grande création d'emploi</li>
                        <li>Encourager la participation des jeunes et des femmes notamment cells=es ayant des projets jugé
                            porteur la vie économique et leur favorisé l'accès au crédit.</li>
                    </ul>
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
