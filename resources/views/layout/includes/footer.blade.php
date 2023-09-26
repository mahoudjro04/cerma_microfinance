<div class="container">
    <div class="row gx-5">
        <div class="col-lg-4 col-md-6 footer-about">
            <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">


                <form>
                    <div class="row g-3">
                        <div class="col-xl-12">
                            <input type="number" class="form-control bg-light border-0"
                                placeholder="Saisissez le capital" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <input type="number" class="form-control bg-light border-0"
                                placeholder="nombre d'écheances" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <select class="form-select bg-light border-0" style="height: 55px;">
                                <option selected>Taux d'épargne à capitaliser</option>
                                <option value="1">0%</option>
                                <option value="2">5%</option>
                                <option value="3">10%</option>
                                <option value="4">20%</option>
                                <option value="5">30%</option>
                                <option value="6">40%</option>
                                <option value="7">50%</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <button class="btn btn-dark w-100 py-3" type="submit">Simuler le prêt</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-8 col-md-6">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-12 pt-5 mb-5">
                    <div class="section-title-1 section-title-sm position-relative pb-3 mb-4">
                        <h4 class="text-light mb-0">CERMA Microfinance </h4>
                    </div>
                    <div class="d-flex mb-2">
                        <i class="bi bi-geo-alt text-primary me-2"></i>
                        <p class="mb-0">Abomey-Calavi, Tankpè, Quatier Agori</p>
                    </div>
                    <div class="d-flex mb-2">
                        <i class="bi bi-envelope-open text-primary me-2"></i>
                        <p>
                            cermamicrofinance@gmail.com
                        </p>
                    </div>
                    <div class="d-flex mb-2">
                        <i class="bi bi-telephone text-primary me-2"></i>
                        <p class="mb-0">+229 58 95 41 61</p>
                    </div>
                    <div class="d-flex mt-4">
                        <a class="btn btn-primary btn-square me-2" href="#"><i
                                class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-primary btn-square me-2" href="#"><i
                                class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-primary btn-square me-2" href="#"><i
                                class="fab fa-linkedin-in fw-normal"></i></a>

                    </div>
                </div>

                <div class="col-lg-3 col-md-12 pt-0 pt-lg-5 mb-5">
                    <div class="section-title-1 section-title-sm position-relative pb-3 mb-4">
                        <h4 class="text-light mb-0">Liens Utiles</h4>
                    </div>
                    <div class="link-animated d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="{{ route('devenir_un_client') }}"><i
                                class="bi bi-arrow-right text-primary me-2"></i>Devenir Client</a>
                        <a class="text-light mb-2" href="#"><i
                                class="bi bi-arrow-right text-primary me-2"></i>Foire Aux Questions (FAQs)</a>


                    </div>
                </div>

                <div class="col-lg-5 col-md-12 pt-0 pt-lg-5 mb-5">
                    <div class="section-title-1 section-title-sm position-relative pb-3 mb-4">
                        <h4 class="text-light mb-0">Envie de vous plaindre ?</h4>
                    </div>
                    <div class="link-animated d-flex flex-column justify-content-start">
                        <button type="button" class="btn btn-info btn-lg">Cliquez ici</button>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
