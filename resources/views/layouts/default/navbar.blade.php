<nav class="navbar navbar-marketing navbar-expand-lg bg-transparent navbar-light fixed-top">
    <div class="container px-5">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('assets/img/_data.tfa_.svg') }}" alt="Logo Data TFA">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i data-feather="menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-lg-5">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Accueil</a>
                </li>
            </ul>
            <a class="btn fw-500 ms-lg-4 btn-tfa-blue" href="https://shop.startbootstrap.com/sb-ui-kit-pro">
                Devis en 1 minute
                <i class="ms-2" data-feather="clock"></i>
            </a>
        </div>
    </div>
</nav>