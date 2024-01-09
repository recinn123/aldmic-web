
@if (!Route::is('contact-us.index'))
{{-- Banner Contact us --}}
<div class="container-fluid">
    <div class="row bg-info-subtle text-center shadow-sm">
        <div class="col-md-12">
            <h1 class="fw-bold mb-3 mt-5 text-center">
                Reach Out Now and Join Us
            </h1>

            <a class="btn btn-info mb-5 ps-4 pe-4 pt-2 pb-2 button-contact-us" href="{{ route('contact-us.index') }}">
                <span>Contact us!</span>
            </a>
        </div>
    </div>
</div>
{{-- End of Banner Contact us --}}
@endif


<footer class="container pt-5 pb-5">
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-8">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <img src="{{ asset('images/logo.png') }}" alt="" style="width: auto; height:50px">
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('images/logo_paysgift.png') }}" alt="" style="width: auto; height:50px">
                        </div>
                    </div>

                    <span class="fw-bolder" style="font-size: 1rem">
                        PT. {{ strtoupper(config('app.name')) }}
                    </span>
                    <p class="fw-regular" style="font-size: 15px">
                        Jl. Arjuna Utara No. 9B, RT.8/RW.1, Duri Kepa, Kec. Kb. Jeruk,
                        Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11510
                    </p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{ asset('images/iso.png') }}" alt="" >
                </div>
            </div>
        </div>
        <div class="col-md-6 justify-content-center">
            <div class="row">
                <div class="col-md-4">
                    <a href="{{ route('about.index') }}"><h5 class="pb-2 text-info fw-bold">About</h5></a>  
                    <a href="#">Privacy Policy</a><br>
                    <a href="#">Terms & Conditions</a><br>
                    <a href="{{ route('about.news') }}">News</a><br>
                    <a href="{{ route('about.career') }}">Career</a><br>
                    <a href="{{ route('about.faq') }}">FAQ</a><br>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('service.index') }}"><h5 class="pb-2 text-info fw-bold">Service</h5></a>  
                    <a href="{{ route('service.e-voucher-reseller') }}">E-Voucher Reseller</a><br>
                    <a href="{{ route('service.loyalty-program') }}">Loyalty Program</a><br>
                    <a href="{{ route('service.mobile-gifting') }}">Mobile Gifting</a><br>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('contact-us.index') }}"><h5 class="pb-2 text-info fw-bold">Contact us</h5></a>  
                    <a href="https://wa.me/6281294000367" target="_blank">+6281294000367</a><br>
                    <a href="mailto:callcenter@aldmic.com">callcenter@aldmic.com</a><br>
                </div>
            </div>
        </div>
    </div>
</footer>   