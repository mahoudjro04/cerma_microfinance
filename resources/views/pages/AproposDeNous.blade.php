@extends('pages.master')

@section('carousel')
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn mb-3">A Propos nous</h1>

            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">

            <div class="border rounded p-3">
                <nav>
                    <div class="nav nav-tabs justify-content-center mb-3 lead" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                            type="button" role="tab" aria-controls="nav-home"
                            aria-selected="true">Présentation</button>
                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                            type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Objectifs et
                            mission</button>
                        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                            type="button" role="tab" aria-controls="nav-contact"
                            aria-selected="false">Organisation</button>
                    </div>
                </nav>
                <div class="tab-content lead" id="nav-tabContent">
                    <div class="tab-pane fade show active " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <strong>L'Association CERMA</strong> est un système financier décentralisé ayant son siège dans le
                        département de
                        l'Atlantique.Elle est officellement agréée sous le numéro <strong>A.14.0050.L. du 24 janvier
                            2014</strong> par le
                        ministère de l'économie et des finances.
                        L'Association CERMA est régit par la lois 2012-14 du 21 mars 2012 portant règlement des sytèmes
                        financierss décentralisé en rébublique du Bénin.
                        Elle a la forme juridique "d'Association" avec pour objet, la collecte de l'épargne, les opérations
                        de prêt et les opérations d'engagement par signature.
                        L'Association CERMA intervient dans tous les domaines mais essentiellement la santé, c'est à dire le
                        bien-être physique, mentale et sociale, le commerce, la petite entreprise, l'artisanatet cible
                        prioritairement la couche féminine et les rétraités par ses appuis.

                    </div>
                    <div class="tab-pane fade " id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        L'un des objectifs de L'Association <strong>CERMA</strong> est de lutter contre la pauvreté,le
                        chômage au niveau des
                        jeunes surtouts des femmes exerçant des activités génératrices de revenue au Bénin. C'est pour
                        répondre à cette préocupation que ses dirigeants ont décidés de rendre opérationnelle l'activité de
                        la microfinance en son sein.<br>
                        Pour atteindre cet obectif, L'Association s'est fixé comme mission de :
                        <ul class="list-unstyled">

                            <li>
                                <ul>
                                    <li>Rechercher des sourcee de financcement</li>
                                    <li>Financer les micros entrepreneure notament ceux intervenant dans l'un des secteurs
                                        reletif aaux objectifs cités dans le statut de CERMA en leur facilitant l'accès au
                                        crédit</li>
                                    <li>Enccourageer le développement des micros entrepreneur pour une plus grande création
                                        d'emploi</li>
                                    <li>Encourager la participation des jeunes et des femmes notament celles ayant des
                                        projets jugé porteur la vie économique et leur favorisé l'accès au crédit.</li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <div class="tab-pane fade " id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        Eirmod sed tempor lorem ut dolores. Aliquyam sit
                        sadipscing kasd ipsum. Dolor ea et dolore et at sea
                        ea at dolor, justo ipsum duo rebum sea invidunt
                        voluptua. Eos vero eos vero ea et dolore eirmod et.
                        Dolores diam duo invidunt lorem. Elitr ut dolores
                        magna sit. Sea dolore sanctus sed et. Takimata
                        takimata sanctus sed.
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--
        Mot du directeur --}}

        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-7">
                        <div class="section-title-2 position-relative pb-3 mb-5">

                            <h1 class="mb-0 ">Mot du Directeur</h1>
                        </div>
                        <p class="mb-4 lead text-justify">Malgré les efforts de nos gouvernants et l’existence de plusieurs programmes de développement pour lutter contre la pauvreté, ils sont encore des milliers de personnes à être socialement

                            exclues et à la recherche d’un coup de pouce. Plus précisément, Il s’agit de toutes les personnes majeures, notamment des femmes, qui souhaitent constituer une épargne, pour elles ou pour leurs enfants, avec la possibilité également d’emprunter un capital pour leurs activités productives ou commerciales, ou pour un projet spécifique.

                            En réponse à ces besoins, nous pensons qu’il faut une solution innovante à travers une action coordonnée entre le social et l’économique visant à amener les familles les plus défavorisées et socialement exclues à bénéficier durablement des services financiers ordinaires. Tel est le pari de l’Association de Lutte pour la promotion des Initiatives de Développement en abrégé ALIDé.

                            Conscient que l’activité de micro-crédit est plus une activité de développement, ALIDé a fait le choix d’un positionnement original proposant une approche globale de la pauvreté, et travaillant effectivement avec les familles en situation de grande précarité. En clair, nous voudrions nous situer dans un champ différent de celui de la plupart des Institutions de Microfinance de la place qui, sous la contrainte de la viabilité financière, abandonnent parfois la cible des plus pauvres. Avec ce positionnement, les usagers d’ALIDé ne sont pas perçus ni comme des clients, ni comme des bénéficiaires mais comme des partenaires. Pour autant, la recherche de la viabilité financière reste une priorité. Elle n’est pas élevée au rang d’objectif mais de contrainte. Elle est perçue comme un aiguillon pour une gestion plus professionnelle et rigoureuse de notre institution.

                            C’est l’occasion de remercier tous nos partenaires techniques et financiers qui ont cru et qui nous accompagnent dans cette aventure depuis 2006.</p>

                    </div>
                    <div class="col-lg-5" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img
                                class="position-absolute w-100 h-100 rounded wow zoomIn"
                                data-wow-delay="0.9s" src="img/about.jpg"
                                style="object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
