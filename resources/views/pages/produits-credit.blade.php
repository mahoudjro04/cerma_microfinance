@extends('pages.master')

@section('carousel')
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn mb-3">
                    Produits crédit</h1>

            </div>
        </div>
    @endsection

    @section('content')
        <div class="container-fluid py-5 ">
            <div class="container py-5">
                <div class="row mt-n5  ">
                    <div class="col-12 text-center">
                        <ul class="list-inline mb-5 " id="portfolio-flters">

                            <li class="btn btn-outline-primary py-2 px-4 active " data-filter=".first">
                                <i class="fa fa-laptop me-2"></i> Les prêts ordinaires de roulement
                            </li>
                            <li class="btn btn-outline-primary py-2 px-4 " data-filter=".second">
                                <i class="fa fa-mobile-alt me-2"></i>
                                Les prêts << coups de pouce>>
                            </li>
                            <li class="btn btn-outline-primary py-2 px-4" data-filter=".trois">
                                <i class="fa fa-mobile-alt me-2"></i>
                                Les prêts aux groupement solidaires
                            </li>
                            <li class="btn btn-outline-primary py-2 px-4" data-filter=".quatre">
                                <i class="fa fa-mobile-alt me-2"></i>
                                Les prêts agricoles, de stockage et de commercialisation
                            </li>
                            <li class="btn btn-outline-primary py-2 px-4" data-filter=".cinq">
                                <i class="fa fa-mobile-alt me-2"></i>
                                Les prêts d'urgence ou d'opportunité
                            </li>
                            <li class="btn btn-outline-primary py-2 px-4" data-filter=".six">
                                <i class="fa fa-mobile-alt me-2"></i>
                                Les prêts scolaires
                            </li>
                            <li class="btn btn-outline-primary py-2 px-4" data-filter=".sept">
                                <i class="fa fa-mobile-alt me-2"></i>
                                Les prêts sur Tontine

                            </li>
                            <li class="btn btn-outline-primary py-2 px-4" data-filter=".huit">
                                <i class="fa fa-mobile-alt me-2"></i>
                                Les prêts aux au personnel de l'Association CERMA
                            </li>
                            <li class="btn btn-outline-primary py-2 px-4" data-filter=".neuf">
                                <i class="fa fa-mobile-alt me-2"></i>
                                Les prêts aux élus de l'Association CERMA
                            </li>
                            <li class="btn btn-outline-primary py-2 px-4" data-filter=".dix">
                                <i class="fa fa-mobile-alt me-2"></i>
                                Les prêts aux salariés
                            </li>
                            <li class="btn btn-outline-primary py-2 px-4" data-filter=".onze">
                                <i class="fa fa-mobile-alt me-2"></i>
                                Les prêts sociaux
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="row g-5 portfolio-container">

                    <div class="col-xl-12 col-lg-12 col-md-12 portfolio-item first">

                        <div class="table-responsive wow">
                            <table class="table table-bordered border-primary">
                                <tbody>
                                    <tr>
                                        <td>Nature</td>
                                        <td> prêts ordinaires de roulement</td>

                                    </tr>

                                    <tr>
                                        <td> Niveau 1</td>
                                        <td> Ce sont de petits prêts accordés à des clients qui ont des activités de petite
                                            taille et peu développées</td>
                                    </tr>

                                    <tr>
                                        <td>Montant</td>
                                        <td>de 30.000 à 200.000 FCFA</td>
                                    </tr>
                                    <tr>
                                        <td>Durée</td>
                                        <td>12 mois au plus</td>
                                    </tr>
                                    <tr>
                                        <td>Taux constant</td>
                                        <td> 1,5% par mois</td>

                                    </tr>
                                    <tr>
                                        <td>Mode de remboursement</td>
                                        <td> Echéance constante</td>

                                    </tr>
                                    <tr>
                                        <td>Périodicité</td>
                                        <td> Mensuelle</td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 portfolio-item first">

                        <div class="table-responsive ">
                            <table class="table table-bordered border-primary">
                                <tbody>
                                    <tr>
                                        <td>Niveau 2</td>
                                        <td> Ce sont des prêts accordés aux clients pour le développement, le renforcement,
                                            l'extension et la diversification des activités.<br> Ces prêts tiennent compte
                                            de la
                                            taille des activités des clients demandeurs.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Montant</td>
                                        <td>de 200.000 à 500.000 FCFA</td>
                                    </tr>
                                    <tr>
                                        <td>Durée</td>
                                        <td>12 mois au plus</td>
                                    </tr>
                                    <tr>
                                        <td>Taux constant</td>
                                        <td> 1,5% par mois</td>

                                    </tr>
                                    <tr>
                                        <td>Mode de remboursement</td>
                                        <td> Echéance constante</td>

                                    </tr>
                                    <tr>
                                        <td>Périodicité</td>
                                        <td> Mensuelle</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 portfolio-item first">

                        <div class="table-responsive">
                            <table class="table table-bordered border-primary">
                                <tbody>
                                    <tr>
                                        <td> Niveau 3</td>
                                        <td> Ce sont des prêts accordés aux clients pour le développement, le renforcement,
                                            l'extension, la diversification et surtout pour les investissements.<br> Ces
                                            prêts
                                            tiennent compte de la
                                            taille des activités des bénéficiaires.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Montant</td>
                                        <td>de 500.000 à 5.000.000 FCFA</td>
                                    </tr>
                                    <tr>
                                        <td>Durée</td>
                                        <td>24 mois au plus</td>
                                    </tr>
                                    <tr>
                                        <td>Taux dégressif</td>
                                        <td> 1,85% par mois</td>

                                    </tr>
                                    <tr>
                                        <td>Mode de remboursement</td>
                                        <td> Echéance constante</td>

                                    </tr>
                                    <tr>
                                        <td>Périodicité</td>
                                        <td> Mensuelle</td>

                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 portfolio-item second">

                        <div class="table-responsive">
                            <table class="table table-bordered border-primary">
                                <tbody>
                                    <tr>
                                        <td> Nature</td>
                                        <td> Prêts << coups de pouce>>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> </td>
                                        <td> Il s'agit de très petits crédits accordés aux femmes et aux hommes démunis à
                                            faibles capacités financières ne pouvant satisfère à aucune condition générale
                                            d'obtention de prêt.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Montant</td>
                                        <td>de 5.000 à 10.000 FCFA</td>
                                    </tr>
                                    <tr>
                                        <td>Durée</td>
                                        <td>1 à 2 mois</td>
                                    </tr>
                                    <tr>
                                        <td>Taux constant</td>
                                        <td> 2% par mois</td>

                                    </tr>
                                    <tr>
                                        <td>Périodicité de remboursement</td>
                                        <td> Mensuelle</td>

                                    </tr>
                                    <tr>
                                        <td>Garantie</td>
                                        <td> Sans garantie financière et matérielle</td>

                                    </tr>
                                    <tr>
                                        <td>Épargne obligatoire</td>
                                        <td> 10% du montant accordé à l'échéance du remboursement</td>

                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 portfolio-item trois">

                        <div class="table-responsive">
                            <table class="table table-bordered border-primary">
                                <tbody>
                                    <tr>
                                        <td> Nature</td>
                                        <td> Prêts aux groupements solidaires
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> </td>
                                        <td> Ces prêts sont accordés aux personnes démunies ne remplissant pas les
                                            conditions
                                            généraless d'accès aux prêtss,mais ayant une forte volonté et une capacité de
                                            travailler ensemble et d'évoluer dans leur activité respective.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Montant</td>
                                        <td>30.000 à 200.000 FCFA</td>
                                    </tr>
                                    <tr>
                                        <td>Durée</td>
                                        <td> moins de 12 mois</td>
                                    </tr>
                                    <tr>
                                        <td>Taux constant</td>
                                        <td> 1,5% par mois</td>

                                    </tr>
                                    <tr>
                                        <td>Mode de remboursement</td>
                                        <td> Echéance constante</td>

                                    </tr>
                                    <tr>
                                        <td>Périodicité de remboursement</td>
                                        <td> Mensuelle</td>

                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 portfolio-item quatre">

                        <div class="table-responsive">
                            <table class="table table-bordered border-primary">
                                <tbody>
                                    <tr>
                                        <td> Nature</td>
                                        <td> Prêts agricoles, de stockage et de commercialisation
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> </td>
                                        <td> Ces prêts servent au financement agricole ou à l'achat des biens en période
                                            d'abondance (moins cher) et la revente en période de rareté(plus cher)
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Montant</td>
                                        <td>30.000 à 5.000.000 FCFA</td>
                                    </tr>
                                    <tr>
                                        <td>Durée</td>
                                        <td> moins de 12 mois</td>
                                    </tr>
                                    <tr>
                                        <td>Taux constant</td>
                                        <td> 1,5% par mois</td>

                                    </tr>
                                    <tr>
                                        <td>Mode de remboursement</td>
                                        <td> A terme (en bloc) ou in fine (intérêt seul chaque mois + capital à terme)</td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 portfolio-item cinq">

                        <div class="table-responsive">
                            <table class="table table-bordered border-primary">
                                <tbody>
                                    <tr>
                                        <td> Nature</td>
                                        <td> Prêts d'urgence ou d'opportunité
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> </td>
                                        <td>Ils font référence à la notion de découvert.<br>Ce sont des prêts d'urgence,
                                            destinés aussi bien aux personnes physiques (clients crédibles) qu'aux
                                            personnees
                                            morales ( les entreprises) ayant bénéficié d'au moins un crédit soldé et l'ayant
                                            remboursé régulièrement dans le temps.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Montant</td>
                                        <td>moins de 1.000.000 FCFA</td>
                                    </tr>
                                    <tr>
                                        <td>Durée</td>
                                        <td>1 à 3 mois</td>
                                    </tr>
                                    <tr>
                                        <td>Taux dégressif</td>
                                        <td> 3% par mois</td>

                                    </tr>
                                    <tr>
                                        <td>Périodicité de remboursement</td>
                                        <td> Mensuelle</td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="col-xl-12 col-lg-12 col-md-12 portfolio-item six">

                        <div class="table-responsive">
                            <table class="table table-bordered border-primary">
                                <tbody>
                                    <tr>
                                        <td> Nature</td>
                                        <td> Prêts scolaires
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> </td>
                                        <td>Ce sont des prêts destinés à couvrir des frais de scolarité. Ils permettent
                                            également aux clients de ne pas utiliser les fonts de ses activités pour frais
                                            d'éducation des enfants.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Montant</td>
                                        <td>moins de 300.000 FCFA</td>
                                    </tr>
                                    <tr>
                                        <td>Durée</td>
                                        <td>moins de 8 mois</td>
                                    </tr>
                                    <tr>
                                        <td>Taux dégressif</td>
                                        <td> 2% par mois</td>

                                    </tr>
                                    <tr>
                                        <td>Périodicité de remboursement</td>
                                        <td> Mensuelle</td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="col-xl-12 col-lg-12 col-md-12 portfolio-item sept">

                        <div class="table-responsive">
                            <table class="table table-bordered border-primary">
                                <tbody>
                                    <tr>
                                        <td> Nature</td>
                                        <td> Prêts sur Tontine
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> </td>
                                        <td>Ce sont des prêts accordés aux souscripteurs tontine de l'Association CERMA qui
                                            mènent des activités génératrices de revenus.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Montant</td>
                                        <td>15.000 à 3.000.000 FCFA </td>
                                    </tr>
                                    <tr>
                                        <td>Périodicité de remboursement</td>
                                        <td> par jour ou par semaine </td>

                                    </tr>
                                    <tr>
                                        <td>Durée</td>
                                        <td>1 mois</td>
                                    </tr>
                                    <tr>
                                        <td>Taux constant</td>
                                        <td> 1,5% par mois</td>

                                    </tr>
                                    <tr>
                                        <td>Garantie financière </td>
                                        <td> au moibs 5 mises journalières ; 1 mise hebdomadaire</td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="col-xl-12 col-lg-12 col-md-12 portfolio-item huit">

                        <div class="table-responsive">
                            <table class="table table-bordered border-primary">
                                <tbody>
                                    <tr>
                                        <td> Nature</td>
                                        <td> Prêts au personnel de l'Association CERMA
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> </td>
                                        <td> Les prêts au personnel de l'Association CERMA contribuent à l'amélioration des
                                            conditions de vie et de santé des employés.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Montant</td>
                                        <td>moins de 2.000.000 FCFA </td>
                                    </tr>
                                    <tr>
                                        <td>Périodicité de remboursement</td>
                                        <td> par jour ou par semaine </td>

                                    </tr>
                                    <tr>
                                        <td>Durée</td>
                                        <td>moins de 36 mois</td>
                                    </tr>
                                    <tr>
                                        <td>Taux dégressif</td>
                                        <td> 1% </td>

                                    </tr>
                                    <tr>
                                        <td>Périodicité de remboursement</td>
                                        <td> Mensuelle</td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="col-xl-12 col-lg-12 col-md-12 portfolio-item neuf">

                        <div class="table-responsive">
                            <table class="table table-bordered border-primary">
                                <tbody>
                                    <tr>
                                        <td> Nature</td>
                                        <td> Prêts aux élus de l'Association CERMA
                                    </tr>
                                    <tr>
                                        <td> </td>
                                        <td> Tout membre élu des organes en exercice (Président et Vice-Président, membre du
                                            CA)
                                            de l'Association CERMA peut bénéficier de crédit durant son mandat.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Montant</td>
                                        <td>moins de 5.000.000 FCFA</td>
                                    </tr>
                                    <tr>
                                        <td>Durée</td>
                                        <td>moins de 24 mois</td>
                                    </tr>
                                    <tr>
                                        <td>Périodicité de remboursement</td>
                                        <td> Mensuelle </td>

                                    </tr>

                                    <tr>
                                        <td>Taux dégressif</td>
                                        <td> 1% par mois </td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="col-xl-12 col-lg-12 col-md-12 portfolio-item dix">

                        <div class="table-responsive">
                            <table class="table table-bordered border-primary">
                                <tbody>
                                    <tr>
                                        <td> Nature</td>
                                        <td> Prêts aux salariés
                                    </tr>
                                    <tr>
                                        <td> </td>
                                        <td> Ce sont des prêts accordés aux salariés des entreprises ou organisations
                                            autonomes
                                            et viables et aux fonctionnaires béninois pour l'achat d'équipements ménagers,
                                            de
                                            moyens de déplacement, pour une éventuelle construction et autres.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Montant</td>
                                        <td>100.000 à 5.000.000 FCFA</td>
                                    </tr>
                                    <tr>
                                        <td>Durée</td>
                                        <td>0 à 36 mois</td>
                                    </tr>
                                    <tr>
                                        <td>Périodicité de remboursement</td>
                                        <td> Mensuelle </td>

                                    </tr>

                                    <tr>
                                        <td>Taux dégressif</td>
                                        <td> 1,5% </td>

                                    </tr>
                                    <tr>
                                        <td> </td>
                                        <td> Lieu de travail fixe et connu, crédibilité, deux cautions.</td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="col-xl-12 col-lg-12 col-md-12 portfolio-item onze">

                        <div class="table-responsive">
                            <table class="table table-bordered border-primary">
                                <tbody>
                                    <tr>
                                        <td> Nature</td>
                                        <td> Prêts sociaux
                                    </tr>
                                    <tr>
                                        <td> </td>
                                        <td> Ce sont des prêts qu'obtiennent les clients lorsqu'ils ont des événements
                                            heureux
                                            ou sont victimes d'événement malheureux pour couvrir les dépenses inhérentes.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Montant</td>
                                        <td>de 30.000 à 500.000 FCFA</td>
                                    </tr>
                                    <tr>
                                        <td>Durée</td>
                                        <td>1 à 3 mois</td>
                                    </tr>

                                    <tr>
                                        <td>Taux dégressif</td>
                                        <td> 1,5% </td>

                                    </tr>
                                    <tr>
                                        <td>Périodicité de remboursement</td>
                                        <td> Mensuelle ou à terme </td>

                                    </tr>



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
