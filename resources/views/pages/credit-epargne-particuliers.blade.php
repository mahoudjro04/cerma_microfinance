@extends('pages.master')

@section('carousel')
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn mb-3">
                    Compte Épargne</h1>
                
            </div>
        </div>
    </div>
@endsection




@section('content')
    <div class="container-fluid py-5 ">
        <div class="container py-5">
            <div class="row mt-n5  ">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-5" id="portfolio-flters">

                        <li class="btn btn-outline-primary py-2 px-4 active" data-filter=".first">
                            <i class="fa fa-laptop me-2"></i> OUVERTURE DE COMPTE
                        </li>
                        <li class="btn btn-outline-primary py-2 px-4" data-filter=".second">
                            <i class="fa fa-mobile-alt me-2"></i>
                            FERMETURE DE COMPTE
                        </li>
                        <li class="btn btn-outline-primary py-2 px-4" data-filter=".trois">
                            <i class="fa fa-mobile-alt me-2"></i>
                            DEPÔT D'EPARGNE
                        </li>
                        <li class="btn btn-outline-primary py-2 px-4" data-filter=".quatre">
                            <i class="fa fa-mobile-alt me-2"></i>
                            RETRAIT D'EPARGNE
                        </li>
                        <li class="btn btn-outline-primary py-2 px-4" data-filter=".cinq">
                            <i class="fa fa-mobile-alt me-2"></i>
                            TENUE DE COMPTE
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
                                    <td>Nature / Opération</td>
                                    <td>OUVERTURE DE COMPTE</td>
                                </tr>
                                <tr>
                                    <td>Frais associés</td>
                                    <td>Frais d'ouverture: 0 FCFA </td>
                                </tr>
                                <tr>
                                    <td>Pièces à fournir</td>
                                    <td> Copie d’une pièce d’identité/CIP - Deux (02) photos d’identité - Attestation de
                                        résidence </td>
                                </tr>
                                <tr>
                                    <td>Date de l’opération</td>
                                    <td>A l'ouverture </td>
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
                                    <td>Nature / Opération</td>
                                    <td>FERMETURE DE COMPTE</td>
                                </tr>
                                <tr>
                                    <td>Frais associés</td>
                                    <td>2.000 F CFA</td>
                                </tr>
                                <tr>
                                    <td>Pièces à fournir</td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td>Date de l’opération</td>
                                    <td>A la fermeture </td>
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
                                    <td>Nature / Opération</td>
                                    <td>DEPÔT D'EPARGNE</td>
                                </tr>
                                <tr>
                                    <td>Frais associés</td>
                                    <td>Aucun frais pour les dépôts traditionnels 200 F CFA quel que soit le montant pour
                                        les dépôts par mobile money Montant minimum des transactions par le client : 2.000 F
                                        CFA </td>
                                </tr>
                                <tr>
                                    <td>Pièces à fournir</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Date de l’opération</td>
                                    <td>A la demande </td>
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
                                    <td>Nature / Opération</td>
                                    <td>RETRAIT D'EPARGNE</td>
                                </tr>
                                <tr>
                                    <td>Frais associés</td>
                                    <td>Aucun frais pour les dépôts traditionnels 200 F CFA quel que soit le montant pour
                                        les retraits par mobile money</td>
                                </tr>
                                <tr>
                                    <td>Pièces à fournir</td>
                                    <td>Se présenter au guichet avec sa pièce d’identité/CIP pour les retraits traditionnels
                                    </td>
                                </tr>
                                <tr>
                                    <td>Date de l’opération</td>
                                    <td>A la demande </td>
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
                                    <td>Nature / Opération</td>
                                    <td>TENUE DE COMPTE</td>
                                </tr>
                                <tr>
                                    <td>Frais associés</td>
                                    <td> 1 000 F CFA /Trimestre calendaire </td>
                                </tr>
                                <tr>
                                    <td>Pièces à fournir</td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td>Date de l’opération</td>
                                    <td>dernier jour ouvré du trimestre en cours </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
