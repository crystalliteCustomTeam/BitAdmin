@include('header')
@include('navbar')


<section>
    <div class="container mt-3 ">
        <div class="row g-2 ">
            <div class="col-12">
                <h2>Reviews</h2>
            </div>
            <div class="col-md-4  col-sm-12 col-lg-4">
                <a href="/google" class="nav-link">
                <div class="wrap border rounded d-flex align-items-center justify-content-center flex-column gap-4 "  style="height: 200px;background: #DB4437">
                    <img src="{{ asset('assets/images/rating.png') }}" class="img-fluid" width="100" height="100px"/>
                    <div class="wrap">
                        <h4 class="text-light">Google Rating</h4>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-12 col-lg-4">
                <a href="/facebook" class="nav-link">
                <div class="wrap border rounded d-flex align-items-center justify-content-center flex-column gap-4 "  style="height: 200px;background: #4285F4">
                    <img src="{{ asset('assets/images/rating.png') }}" class="img-fluid" width="100" height="100px"/>
                    <div class="wrap">
                        <h4 class="text-light">Facebook Rating</h4>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="mt-5">
    <div class="container mt-3 ">
        <div class="row g-2 ">
            <div class="col-12">
                <h2>Leads</h2>
            </div>
            <div class="col-md-4  col-sm-12 col-lg-4">
                <a href="/supersale" class="nav-link">
                <div class="wrap border rounded d-flex align-items-center justify-content-center flex-column gap-4 "  style="height: 200px;background: #1e1541">
                    <img src="{{ asset('assets/images/supersale.png') }}" class="img-fluid" width="100" height="100px"/>
                    <div class="wrap">
                        <h4 class="text-light">Super Sale Leads</h4>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-md-4  col-sm-12 col-lg-4">
                <div class="wrap border rounded d-flex align-items-center justify-content-center flex-column gap-4 "  style="height: 200px;background: #2f0018">
                    <img src="{{ asset('assets/images/logo.svg') }}" class="img-fluid" width="100" height="100px"/>
                    <div class="wrap">
                        <h4 class="text-light">Ecommerce LP</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4  col-sm-12 col-lg-4">
                <div class="wrap border rounded d-flex align-items-center justify-content-center flex-column gap-4 "  style="height: 200px;background: #000000">
                    <img src="{{ asset('assets/images/application.svg') }}" class="img-fluid" width="100" height="100px"/>
                    <div class="wrap">
                        <h4 class="text-light">Application + Game</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="mt-5">
    <div class="container mt-3 ">
        <div class="row g-2 ">
            <div class="col-12">
                <h2>Main Website</h2>
            </div>
            <div class="col-md-4  col-sm-12 col-lg-4">
                <div class="wrap border rounded rounded d-flex align-items-center justify-content-center flex-column gap-4 "  style="height: 200px;background: #f59720">
                    <img src="{{ asset('assets/images/m-logo.svg') }}" class="img-fluid" width="100" height="100px"/>
                    <div class="wrap">
                        <h4 class="text-light">Bitwits</h4>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@include('footer')
