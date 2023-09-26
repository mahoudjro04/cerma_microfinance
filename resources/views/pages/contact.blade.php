@extends('pages.master')

@section('carousel')
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn mb-3">
                    CONTACTEZ-NOUS
                </h1>

            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title-1 text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">

                <h1 class="mb-0">Nous restons disponible pour toutes vos préoccupations. Laissez-nous un message.</h1>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">

                        <div class="ps-4">
                            <h5 class="mb-2">Appelez-nous pour poser toute question</h5>
                            <h5 class="text-primary mb-1">(+229) 58 95 41 61</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">

                        <div class="ps-4">
                            <h5 class="mb-2">Email</h5>
                            <h5 class="text-primary mb-1">cermamicrofinance@gmail.com

                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">

                        <div class="ps-4">
                            <h5 class="mb-2">Carré TF n 7777</h5>
                            <h5 class="text-primary mb-1">Abomey-Calavi, quatier Agori</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 contact-form wow slideInUp" data-wow-delay="0.3s">
                    <div id="alertMessage"></div>
                    <form method="POST" action="{{ route('contact.store') }}" id="contactForm" novalidate="novalidate">
                        @csrf
                        <div class="row gx-3">
                            <div class="col-md-6 control-group">
                                <input type="text" class="form-control border-0 bg-light px-4" id="name"
                                    placeholder="Nom et Prénoms" required="required"
                                    data-validation-required-message="Please enter your name" style="height: 55px;">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="col-md-6 control-group">
                                <input type="email" class="form-control border-0 bg-light px-4" id="email"
                                    placeholder="Email" required="required"
                                    data-validation-required-message="Please enter your email" style="height: 55px;">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="col-12 control-group">
                                <input type="text" class="form-control border-0 bg-light px-4" id="phone"
                                    placeholder="Numéro de téléphone" style="height: 55px;">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="col-12 control-group">
                                <input type="text" class="form-control border-0 bg-light px-4" id="subject"
                                    placeholder="Sujet" required="required"
                                    data-validation-required-message="Please enter a subject" style="height: 55px;">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="col-12 control-group">
                                <textarea class="form-control border-0 bg-light px-4 py-3" rows="4" id="message" placeholder="Message"
                                    required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit" id="sendMessageButton">
                                    <span>Envoyer</span>
                                    <div class="d-none spinner-border spinner-border-sm text-light ms-3" role="status">
                                    </div>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                        frameborder="0" style="min-height: 350px; border:0;" allowfullscreen aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
