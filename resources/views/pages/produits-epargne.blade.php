@extends('pages.master')

@section('carousel')
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn mb-3">
                    Produits d’épargne</h1>

            </div>
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
                            <i class="fa fa-laptop me-2"></i> Epargne sur livret (Dépôt A Vue - DAV)
                        </li>
                        <li class="btn btn-outline-primary py-2 px-4 " data-filter=".second">
                            <i class="fa fa-mobile-alt me-2"></i>
                            Dépôt A Terme (DAT)
                        </li>
                        <li class="btn btn-outline-primary py-2 px-4" data-filter=".trois">
                            <i class="fa fa-mobile-alt me-2"></i>
                            Epargne tontine
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
                                    <td> Compte épargne sur livret ou Dépôt A Vue (DAV)</td>
                                </tr>
                                <tr>
                                    <td>Frais associés</td>
                                    <td> Gratuit </td>
                                </tr>
                                <tr>
                                    <td>Rémunération</td>
                                    <td>Aucune</td>
                                </tr>
                                <tr>
                                    <td>Eligibilité</td>
                                    <td>Tout client</td>
                                </tr>
                                <tr>
                                    <td>Retrait</td>
                                    <td>A la demande</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 portfolio-item second">

                    <div class="table-responsive wow">
                        <table class="table table-bordered border-primary">
                            <tbody>
                                <tr>
                                    <td>Nature</td>
                                    <td> Dépôt A Terme (DAT) minimum 100.000 F CFA pour une durée minimum d'un an avec
                                        possibilité de dépôt intermédiaire</td>
                                </tr>
                                <tr>
                                    <td>Frais associés</td>
                                    <td>Gratuit</td>
                                </tr>
                                <tr>
                                    <td>Rémunération</td>
                                    <td>5% l'an pour les déposants ayant respecté le terme et 0% pour une demande de retrait
                                        avant terme Possibilité de négociation de la rémunération pour les montants élevés
                                        (à partir de 50.000. 000 F CFA) </td>
                                </tr>
                                <tr>
                                    <td>Eligibilité</td>
                                    <td>Tout client Disposer ou ouvrir un Compte d’Epargne Ordinaire</td>
                                </tr>
                                <tr>
                                    <td>Retrait</td>
                                    <td>A l'échéance ou 72h au moins après la demande de retrait</td>
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
                                    <td>Nature</td>
                                    <td>Epargne tontine A partir de 500 FCFA comme montant de la mise avec une périodicité
                                        soit journalière, hebdomadaire ou par jour de marché</td>
                                </tr>
                                <tr>
                                    <td>Frais associés</td>
                                    <td>200 F CFA pour la carte annuelle de mises La commission correspond au montant de la
                                        mise journalière pour les mises inférieures ou égales à 10 000 FCFA, supérieures à
                                        10 000 FCFA, la commission à prélever est de 10 000 FCFA </td>
                                </tr>
                                <tr>
                                    <td>Rémunération</td>
                                    <td>Aucune</td>
                                </tr>
                                <tr>
                                    <td>Eligibilité</td>
                                    <td>Statut : Homme ou femme ayant un revenu régulier habitant ou exerçant son activité
                                        dans l’une des zones d’interventions d’ALIDé Avoir 18 ans révolus à la date de la
                                        souscription Fournir une pièce d’identité (CNI, Passeport ou CIP) Accepter de
                                        souscrire En cas d’utilisation des mises pour le remboursement des crédits, le
                                        client accepte que la différence soit reversée sur son compte épargne
                                    </td>
                                </tr>
                                <tr>
                                    <td>Retrait</td>
                                    <td>A l'échéance ou 72h au moins après la demande de retrait</td>
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
                                    <td>Nature</td>
                                    <td>Epargne de garantie</td>
                                </tr>
                                <tr>
                                    <td>Frais associés</td>
                                    <td>Gratuit</td>
                                </tr>
                                <tr>
                                    <td>Rémunération</td>
                                    <td>Aucune</td>
                                </tr>
                                <tr>
                                    <td>Eligibilité</td>
                                    <td>Tout client dont le crédit nécessite ce type de garantie</td>
                                </tr>

                                <tr>
                                    <td>Retrait</td>
                                    <td> Après remboursement du crédit garanti</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
