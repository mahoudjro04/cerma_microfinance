@extends('pages.master')

@section('carousel')
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active py-5">
                <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Épargne</h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">Faites fructifier votre argent
                            avec nos comptes d'épargne</h1>
                        <a href class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Nos Produits</a>
                        <a href class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Nous
                            Contacter</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item py-5">
                <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Crédit</h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn"> Simplifiez vos finances avec nos
                            prêts !</h1>
                        <a href class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Nos Produits</a>
                        <a href class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Nous
                            Contacter</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item py-5">
                <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">TONTINE</h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn"> Épargnez en toute sécurité !</h1>
                        <a href class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Nos Produits</a>
                        <a href class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Nous
                            Contacter</a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
@endsection


@section('content')
    {{-- Statistique de CERMA --}}

    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary  d-flex align-items-center justify-content-center p-4" style="height: 150px;">

                        <div
                            class="position-relative d-flex flex-column align-items-center justify-content-center text-center p-4">
                            <h1 class="text-white mb-0" data-toggle="counter-up">7000</h1>
                            <h3 class="text-white mb-2">Clients</h3>


                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light  d-flex align-items-center justify-content-center p-4" style="height: 150px;">

                        <div
                            class="position-relative    d-flex flex-column align-items-center justify-content-center text-center p-4">
                            <h1 class=" mb-0" data-toggle="counter-up">30</h1>
                            <h3 class="mb-2">Agents</h3>


                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary  d-flex align-items-center justify-content-center p-4" style="height: 150px;">


                        <div
                            class="position-relative d-flex flex-column align-items-center justify-content-center text-center p-4">
                            <h1 class="text-white mb-0" data-toggle="counter-up">147</h1>
                            <h3 class="text-white mb-2">Millions en cours de crédit</h3>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Fin  Statistique de CERMA --}}

    {{-- Intro de CERMA --}}

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title-1 position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">À propos de nous </h5>
                        <h1 class="mb-0">Depuis 2014, nous soutenons des centaines de micro-entrepreneurs grâce à des
                            crédits dédiés.</h1>
                    </div>
                    <p class="mb-4">L'Association CERMA est une institution d'épargne et de crédit agréée sous le
                        numéro A.14.0050.L par arrêté 126/MEF/DC/CSSFD/SRSSFDD.Elle est régie par la loi n°2012-14 du 21
                        Mars 2012 portant réglementation des Systèmes Financiers Décentralisés au BENIN.</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Rapidité</h5>

                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Efficacité</h5>

                        </div>
                    </div>

                    <a href class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Contactez-nous</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                            src="img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Fin Intro de CERMA --}}

    {{-- Produits de CERMA --}}

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title-1 text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">NOS PRODUITS</h5>
                <h1 class="mb-0">Nos services pour booster vos activités et changer votre quotidien</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/blog-1.jpg" alt>

                        </div>
                        <div class="p-4">

                            <h4 class="mb-3">Les prêts ordinaires de roulement</h4>
                            <p>Ces prêts servent aux développements, aux renforcements et aux investissements des
                                actiivités (déjà existantes et fonctionnelles) des clients qui se sont déjà installés et
                                qui
                                ont
                                bésoin d'un appui financier.</p>
                            <a class="text-uppercase" href>Lire la suite <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/blog-2.jpg" alt>

                        </div>
                        <div class="p-4">

                            <h4 class="mb-3">Les prêts sur Tontine</h4>
                            <p>Ce sont des prêts accordés aux souscripteurs tontine
                                de l'Association CERMA qui mènent des activités génératrices de
                                revenus.<br> Ces prêts ne nécessitent pas le paiement des frais d'étude de dossier ni de
                                dépôt de garanties matérielles. </p>
                            <a class="text-uppercase" href>Lire la suite<i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.9s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/blog-3.jpg" alt>

                        </div>
                        <div class="p-4">

                            <h4 class="mb-3">Les prêts aux salariés</h4>
                            <p>Ce sont des prêts accordés aux salariés des entreprises ou organisations autonomes et
                                viables
                                et
                                aux fonctionnaires béninois pour l'achat d'équipement ménagers, de moyens de
                                déplacement,
                                pour
                                une éventuelle construction et autres.</p>
                            <a class="text-uppercase" href>Lire la suite <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- Fin Produits de CERMA --}}

    {{-- Mission Vision  de CERMA --}}

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title-1 text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">

                <h1 class="mb-0">CERMA Microfinance</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-md-6 col-lg-12 wow zoomIn" data-wow-delay="0.2s">

                            <h4>Notre Mission</h4>
                            <p class="mb-0">La mission de l'association CERMA est d'amériliorer les conditions de
                                vie, en particulier
                                de santé, c'est-à-dire de bien-être physique, mental et social des populations
                                vulnérables notamment les femmes et les jeunes en leurs offrant des services financiers
                                et non financiers adaptés et de qualités.
                            </p>
                        </div>
                        <div class="col-md-6 col-lg-12 wow zoomIn" data-wow-delay="0.6s">

                            <h4>Notre Structure Organisationnelle</h4>


                            <p class="mb-0"><i class="fa fa-check text-primary me-3"></i>l'Assemblée
                                Générale
                            </p>
                            <p class="mb-0"><i class="fa fa-check text-primary me-3"></i>le Conseil
                                d'Administration</p>
                            <p class="mb-0"><i class="fa fa-check text-primary me-3"></i>la Direction
                                Générale</p>
                            <p class="mb-0"><i class="fa fa-check text-primary me-3"></i>l'Audit Interne
                            </p>


                        </div>
                    </div>
                </div>
                <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s"
                            src="img/feature.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-md-6 col-lg-12 wow zoomIn" data-wow-delay="0.6s">

                            <h4>Notre Vision</h4>
                            <p class="mb-0">Nous aspiront à être un des acteurs majeurs de la finance décentralisée
                                au Bénin.
                                Notre vision est la suivante : être une association qui aide à éveiller la conscience
                                des populations vulnérables sur leurs problèmes prioritaires de santé, afin qu'elles les
                                prennent elles-mêmes en charges.
                            </p>
                        </div>
                        <div class="col-md-6 col-lg-12 wow zoomIn" data-wow-delay="0.8s">

                            <h4>Nos Valeurs</h4>
                            <p class="mb-0"><i class="fa fa-check text-primary me-3"></i>Professionnalisme
                            </p>
                            <p class="mb-0"><i class="fa fa-check text-primary me-3"></i>Solidarité </p>
                            <p class="mb-0"><i class="fa fa-check text-primary me-3"></i>l’intégrité </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Fin Mission Vision de CERMA --}}

    {{-- Questions fréquentes --}}

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="section-title-1 position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Questions fréquentes</h5>
                        <h1 class="mb-0">Pour tous renseignements, contactez-nous</h1>
                    </div>
                    <p class="mb-4">Notre engagement envers nos clients est absolu. Nous nous efforçons de créer une
                        relation de confiance à long terme en les considérant comme des partenaires clés dans notre
                        démarche.<br>Abomey-Calavi quatier Agori (Tankpè) à quache au bord de la voie pavée à 800 m
                        du
                        carrefour
                        Tankpè vers Parana.


                        <br>Tel: (+229) 58 95 41 61
                    </p>
                    <a href class="btn btn-primary py-3 px-5 me-3">Explorer la FAQs</a>
                </div>
                <div class="col-lg-6">
                    <div class="accordion accordion-custom" id="accordionExample">
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.1s">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button fw-semi-bold" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Comment ouvrir un compte ?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Vous pouvez ouvrir un compte chez nous en vous rendant dans l’une de nos
                                    agences avec une pièce d’identité, une photo d’identité et un premier dépôt minimum.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed fw-semi-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    Quels sont nos avantages ?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Nous sommes plus accessible pour les personnes à faible revenu et les
                                    micro-entreprises qui n’ont pas accès aux services bancaires traditionnels. Elle
                                    offre des produits financiers adaptés à leurs besoins, avec des taux d’intérêt plus
                                    bas et des procédures de demande de crédit plus souples.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.3s">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed fw-semi-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Lorsque je formule une demande de prêt, dans quel délai je peux espérer une réponse
                                    ?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Si vous fournissez toutes les pièces demandées, vous avez la réponse dans un délai
                                    de deux (02) semaines. Cette réponse peut être favorable ou défavorable en fonctions
                                    des informations recueillies.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed fw-semi-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true"
                                    aria-controls="collapseFour">
                                    Quels sont les types de Garanties exigées par CERMA ?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Trois types de garanties sont acceptées :

                                    les garanties matérielles ;
                                    les garanties financières ;
                                    les garanties personnelles ;
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed fw-semi-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                                    aria-controls="collapseFive">
                                    Si je me sens mal traité, à qui je peux me plaindre ?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Si vous ressentez une insatisfaction dans le service, vous pouvez vous plaindre,
                                    soit au chef d’agence, soit à la Direction ou bien vous appelez directement le +229
                                    58 95 41 61 utiliser notre formulaire de plaintes en <a href="">cliquant
                                        ici</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Fin Questions fréquentes --}}


    {{-- Témoignages --}}

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title-1 text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">

                <h1 class="mb-0">Témoignages</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <div>
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        e dijkdfkfdkjfdf Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet
                        eirmod eos labore diam
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">

                        <div>
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">

                        <div>
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">

                        <div>
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Fin Témoignages --}}

    {{-- NOS DERNIÈRES ACTUALITÉS --}}

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title-1 text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">

                <h1 class="mb-0">NOS DERNIÈRES ACTUALITÉS</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/blog-1.jpg" alt>
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                href>Web Design</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                            </div>
                            <h4 class="mb-3">How to build a website</h4>
                            <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                            <a class="text-uppercase" href>Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/blog-2.jpg" alt>
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                href>Web Design</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                            </div>
                            <h4 class="mb-3">How to build a website</h4>
                            <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                            <a class="text-uppercase" href>Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/blog-3.jpg" alt>
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                href>Web Design</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                            </div>
                            <h4 class="mb-3">How to build a website</h4>
                            <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                            <a class="text-uppercase" href>Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Fin NOS DERNIÈRES ACTUALITÉS --}}

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
