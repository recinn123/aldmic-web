@extends('layouts.app')

@section('title', ' - E-Voucher Reseller')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/service/index.css') }}">
@endpush

@section('content')
    {{-- Banner E-Voucher --}}
    <div class="container pt-5 pb-5 justify-content-center align-items-center"
    style="background-image: url('{{ asset('images/product/evoucher.png') }}');
            background-size: auto;
            background-position: center 1%;
            background-repeat: no-repeat;">
        <div class="text-center mb-5">
            <h1 class="fw-bold" style="font-size: 5rem">
                <span class="text-info">E-Voucher</span> reseller
            </h1>
    
            <h3 class="fw-bold mb-5" style="font-size: 3rem">
                For <span class="text-info">Marketplace & Ecommerce</span> Platform, </span>
                <span style="display: block;">Make It Easy for Shopping Ever</span>
            </h3>

        </div>
    </div>
    
    <div class="container text-center pb-5">
        <img src="{{ asset('images/product/mouse_icon.png') }}" alt="">
    </div>
    {{-- End of Banner E-Voucher --}}

    {{-- Banner 2 --}}
    <div class="container-fluid">
        <div class="row ps-5 pe-5 justify-content-evenly bg-light pt-5 pb-5 shadow-sm">
            <div class="col-md-4 col-sm-12 text-right">
                <img class="mb-3 ms-auto" src="{{ asset('images/product/evoucher_banner_1.png') }}" alt="">
            </div>
            <div class="col-md-8 col-sm-12">
                <div class="row mb-3">
                    <h1 class="text-info">
                        Make It Easy with COOPN Digital E-Voucher, And
                        Feels The Special Benefit At All For Online
                        Shopping!
                    </h1>
                </div>
                <div class="row">
                    <p class="fs-4 text-justify" style="text-align: justify">
                        Serves us to specialize as a Electronic Voucher Reseller or Mobile Gift Card for
                        various products. Electronic Voucher Reseller can be use for digital platform to
                        redeem in E-Commerce* for shopping as simple and seamless for business and
                        suitable as rewards incentive employee benefit. Make The Potential Opportunity and
                        Join Us To Be E-Voucher Reseller for Businesses and Consumers through various
                        channels ever.
                    </->
                </div>
            </div>
        </div>
    </div>
    {{-- End of Banner 2 --}}

    {{-- Banner Advantages --}}
    <div class="container">
        <div class="row">
            <h1 class=" mt-5 pb-5 mb-5 text-left fw-bold text-center" style="font-size: 3rem">
                The Advantages of Aldmic COOPN E-Voucher Reseller Services
            </h1>
            
            <div class="row d-flex justify-content-center">
                <div class="col-md-4 text-center mb-5">
                    <img class="mb-3" src="{{ asset('images/product/service_icon_1.png') }}" alt="">
                    <div style="margin-left: 5rem; margin-right:5rem;">
                        <p>
                            <span class="fw-bold">Wide Product Range</span>
                            Aldmic
                            COOPN offer the wide range of
                            vouchers from various E-
                            Commerce platform to diverse
                            customer preferences and needs.
                        </p>
                    </div>
                </div>
    
                <div class="col-md-4 text-center mb-5">
                    <img class="mb-3" src="{{ asset('images/product/service_icon_2.png') }}" alt="">
                    <div style="margin-left: 5rem; margin-right:5rem;">
                        <p>
                            <span class="fw-bold">Direct Distributions Vouchers</span>
                            are directly distributed with a multi
                            digital platform to reach all
                            customers quickly to respond to
                            market and customer demands.
                        </p>
                    </div>
                </div>
    
                <div class="col-md-4 text-center mb-5">
                    <img class="mb-3" src="{{ asset('images/product/service_icon_3.png') }}" alt="">
                    <div style="margin-left: 5rem; margin-right:5rem;">
                        <p>
                            <span class="fw-bold">High Scalability</span>
                            Adapt your
                            product offering based on needs
                            to expand product range,
                            customer base, and marketing
                            efforts to increase sales revenue.
                        </p>
                    </div>
                </div>
            </div>
    
            <div class="row d-flex justify-content-center">
                <div class="col-md-3 text-center mb-5">
                    <img class="mb-3" src="{{ asset('images/product/service_icon_4.png') }}" alt="">
                    <div style="margin-left: 3rem; margin-right:3rem;">
                        <p>
                            <span class="fw-bold">Flexible</span>
                                Choose your best product
                            offerings quickly on market trends
                            and demands. You can add and
                            replace the voucher easily based
                            on time.
                        </p>
                    </div>
                </div>
    
                <div class="col-md-3 text-center mb-5">
                    <img class="mb-3" src="{{ asset('images/product/service_icon_5.png') }}" alt="">
                    <div style="margin-left: 3rem; margin-right:3rem;">
                        <p>
                            <span class="fw-bold">The Revenue Stream</span>
                                Not only a
                            benefit and services, E-voucher
                            reseller can be provide as a
                            revenue stream to steady income
                            and help stabilize your business
                            process.
                        </p>
                    </div>
                </div>
    
                <div class="col-md-3 text-center mb-5">
                    <img class="mb-3" src="{{ asset('images/product/service_icon_6.png') }}" alt="">
                    <div style="margin-left: 3rem; margin-right:3rem;">
                        <p>
                            <span class="fw-bold">Data Insights</span>
                                Not only revenue,
                            you can access data as part of
                            strategy to reach out performance
                            and better customer satisfaction.
                        </p>
                    </div>
                </div>
                
                <div class="col-md-3 text-center mb-5">
                    <img class="mb-3" src="{{ asset('images/product/service_icon_7.png') }}" alt="">
                    <div style="margin-left: 3rem; margin-right:3rem;">
                        <p>
                            <span class="fw-bold">Wide Market</span>
                                Reach the
                            customers and loyalty to up
                            the opportunities into the
                            market.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End of Banner Advantages --}}

    {{-- Banner Marketplace & Ecommerce --}}
    <div class="container">
        <div class="row pt-3">
            <h1 class=" mt-5 pb-5 mb-5 text-left fw-bold text-center" style="font-size: 3rem">
                Check our <span class="text-info">Marketplace & Ecommerce</span>
                </h1>
    
            <div class="ps-5 pe-5">
                <div class="row">
                    <div class="card-group text-center align-items-center">
                        <div class="card">
                            <img  src="{{ asset('images/logo_paysgift.png') }}" class="card-img-top" alt="Logo PaysGift">
                        </div>
                        <div class="card">
                            <img  src="{{ asset('images/LOGO-17.jpg') }}" class="card-img-top" alt="Logo Samsung">
                        </div>
                        <div class="card">
                            <img  src="{{ asset('images/LOGO-35.png') }}" class="card-img-top" alt="Logo Lazada">
                        </div>
                        <div class="card">
                            <img  src="{{ asset('images/LOGO-36.png') }}" class="card-img-top" alt="Logo OPPO">
                        </div>
                        <div class="card">
                            <img  src="{{ asset('images/LOGO-32.jpg') }}" class="card-img-top" alt="Logo DANA">
                        </div>
                        <div class="card">
                            <img  src="{{ asset('images/LOGO-30.jpg') }}" class="card-img-top" alt="Logo Telkomsel">
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End of Banner Marketplace & Ecommerce --}}

    {{-- Banner Paysgift --}}
    <div class="container-fluid">
        <div class="row ps-5 pe-5 justify-content-around bg-light pt-5 pb-5 shadow-sm">
            <div class="col-md-4 pt-5 col-sm-12">
                <img class="mb-3" class="text-center" style="text-align: center" src="{{ asset('images/product/PG.png') }}" alt="" width="100%">
            </div>
            <div class="col-md-8 col-sm-12 pt-5">
                <div class="row mb-3 align-items-left ">
                    <h1>
                        <img class="banner-logo-paysgift" src="{{ asset('images/logo_paysgift.png') }}" alt="Logo PaysGift">
                    </h1>
                </div>
                <div class="row mb-3">
                    <h1 class="" style="font-size: 3rem">
                        lorem ipsum dolor sit amet
                    </h1>
                </div>
                <div class="row">
                    <span style="text-align: justify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                        qui officia deserunt mollit anim id est laborum.
                    </span>
                </div>
            </div>
        </div>
    </div>
    {{-- End of Banner Paysgift --}}
@endsection