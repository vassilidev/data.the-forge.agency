<footer class="footer pt-10 pb-5 mt-auto bg-light footer-light">
    <div class="container px-5">
        <div class="row gx-5">
            <div class="col-lg-3">
                <div class="footer-brand">
                    {{ config('app.name') }}
                </div>
                <div class="mb-3">Design made easy</div>
                <div class="icon-list-social mb-5">
                    <a class="icon-list-social-link" href="#!"><i class="fab fa-instagram"></i></a>
                    <a class="icon-list-social-link" href="#!"><i class="fab fa-facebook"></i></a>
                    <a class="icon-list-social-link" href="#!"><i class="fab fa-github"></i></a>
                    <a class="icon-list-social-link" href="#!"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row gx-5">
                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                        <div class="text-uppercase-expanded text-xs mb-4">Pages</div>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><a href="{{ route('home') }}">Accueil</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-5"/>
        <div class="row gx-5 align-items-center">
            <div class="col-md-6 small">Copyright &copy; {{ config('app.name') }} {{ date('Y') }}</div>
            <div class="col-md-6 text-md-end small">
                <a href="#!">Privacy Policy</a>
                &middot;
                <a href="#!">Terms &amp; Conditions</a>
            </div>
        </div>
    </div>
</footer>
