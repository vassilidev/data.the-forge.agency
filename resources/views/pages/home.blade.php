@extends('layouts.default')

@section('content')
    <header class="page-header-ui page-header-ui-light bg-white">
        <div class="page-header-ui-content pt-5">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6" data-aos="fade-up">
                        <h1 class="page-header-ui-title">Prenez le contrôle total
                            de vos informations.</h1>
                        <p class="page-header-ui-text mb-5">
                            <span class="fw-bolder">Vos besoins, nos scrapers, votre data.</span><br> Exploitez vos
                            données avec précision. Obtenez un devis
                            rapide et découvrez comment nos solutions vous permettent de maîtriser entièrement vos
                            informations.</p>
                        <div class="d-flex flex-column flex-sm-row">
                            <a class="btn btn-lg btn-tfa-blue fw-500 me-sm-3 mb-3 mb-sm-0" href="#explore">
                                Obtenez un devis instantané
                                <i class="ms-2" data-feather="arrow-right"></i>
                            </a>
                            <a class="btn btn-lg btn-tfa-blue-soft text-tfa-blue fw-500" href="#" target="_blank">Nos
                                services</a>
                        </div>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block" data-aos="fade-up" data-aos-delay="100"><img
                                class="img-fluid" src="{{ asset('assets/img/illustrations/programming.svg') }}"
                                alt="Illustration extraction de données"/></div>
                </div>
            </div>
        </div>
        <div class="svg-border-rounded text-light">
            <!-- Rounded SVG Border-->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none"
                 fill="currentColor">
                <path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path>
            </svg>
        </div>
    </header>
@endsection