@extends('layouts.app')

@section('title', ' - Service')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/service/index.css') }}">
@endpush

@section('content')
    {{-- Banner Service --}}
    <div class="container pt-5 pb-5"
        style="background-image: url('{{ asset('images/service/service_banner.png') }}');
                background-size: auto;
                background-position: center 0px;
                background-repeat: no-repeat;">
        <div class="text-center mb-5 text-container">
            <h1 class="fw-bold" style="font-size: 5rem">
                <span class="text-info">Excellent</span> services
            </h1>

            <h3 class="fw-bold mb-5 line-heading" style="font-size: 3rem">
                Check Our <span class="text-info">Project</span>
            </h3>
        </div>
    </div>
    
    <div class="container text-center pb-5">
        <img src="{{ asset('images/product/mouse_icon.png') }}" alt="" class=" img-fluid">
    </div>
    {{-- End of Banner Service --}}

    {{-- Banner Projects --}}
    <div class="container-fluid pt-5 pb-5"
    style="background-image: url('{{ asset('images/logo_aldmic_color.png') }}');
                background-size: 50rem;
                background-position: -35% 40%;
                background-repeat: no-repeat;">
        <div class="row ps-5 pe-5 justify-content-evenly ">
            <div class="row mt-5 justify-content-evenly align-items-center">
                <div class="col-md-6 text-center">
                    <img src="{{ asset('images/service/projects_1.png') }}" alt="" class=" img-fluid">
                </div>
                <div class="col-md-6">
                    <h1 class="text-success fw-bold">
                        Castrol Elite Program
                    </h1>
                  
                    <div style="text-align: justify">
                        <div class="text-container">
                            <p>
                                Castrol Elite Program is a Program that incentivizes Castrol’s preferred workshops
                                 by giving points for every purchase.
                                 <a class="text-dark" href="https://castrol.aldmic.com/">https://castrol.aldmic.com/</a>
                            </p>
                        </div>
        
                        <div>
                            <p>
                                Castrol Reward Catalogue Platform enables Castrol’s preferred workshops to earn and redeem
                                 points to get the rewards they want.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mt-5 justify-content-evenly align-items-center">
                <div class="col-md-6">
                    <h1 class="fw-bold" style="color: darkblue">
                        Aqua Japan
                    </h1>
                    <div style="text-align: justify">
                        <div class="text-container">
                            <p>
                                End User Program submitted by Merchandiser or Frontliner
                                <a class="text-dark" href="https://aquasemarakkemerdekaan.aldmic.com/">https://aquasemarakkemerdekaan.aldmic.com/</a>
                            </p>
                        </div>
        
                        <div>
                            <p>
                                Aqua Japan offers instant rewards for every purchase. You can choose
                                from among a variety of rewards such as phone credit, Gopay and PLN
                                token.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <img src="{{ asset('images/service/projects_2.png') }}" alt="" class=" img-fluid">
                </div>
            </div>
    
            <div class="row mt-5 justify-content-evenly align-items-center">
                <div class="col-md-6 text-center">
                    <img src="{{ asset('images/service/projects_3.png') }}" alt="" class=" img-fluid">
                </div>
                <div class="col-md-6">
                    <h1 class="text-info fw-bold">
                        DAIKIN.
                    </h1>
                    <div style="text-align: justify">
                        <div class="text-container">
                            <p>
                                Daikin run an end-user and installer program to give all the benefits
                                to customers in order to get more sales.
                                End user will get Gopay Instant Reward and Lucky Draw Coupon
                                Installer will get Gopay Instant Reward after installation claim
                                approved.
                            </p>
                        </div>
        
                        <div>
                            <a class="text-dark" href="https://inverteria.daikin.co.id/">https://inverteria.daikin.co.id/</a>
                            <p>
                                <u>
                                    DAIKIN INVERTERIA "MAKIN HEMAT, MAKIN MERIAH
                                    HADIAHNYA" - PENGUNDIAN PERIODE 1
                                </u>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="row mt-5 justify-content-evenly align-items-center">
                <div class="col-md-6">
                    <h5>
                        BRAND CAMPAIGN
                    </h5>
                    <h1 class="text-info">
                        ACTIVATION.
                    </h1>
                    <span style="text-align: justify">
                        DSS's very own 108th anniversary to create magnificent online
                        offline collaboration events with Asli Indonesia experiences journey
                        from virtual exhibition full of music performance, local business,
                        content creators to offlines culinary delicacy, creative communities
                        and many more.
                    </span>
                </div>
                <div class="col-md-6 text-center">
                    <img src="{{ asset('images/service/loyalty-program/loyalty_project_1.png') }}" alt="" class=" img-fluid">
                </div>
            </div>
    
            <div class="row mt-5 justify-content-evenly align-items-center">
                <div class="col-md-6 text-center">
                    <img src="{{ asset('images/service/loyalty-program/loyalty_project_2.png') }}" alt="" class=" img-fluid">
                </div>
                <div class="col-md-6">
                    <h5>
                        BRAND CAMPAIGN
                    </h5>
                    <h1 class="text-info">
                        ACTIVATION.
                    </h1>
                    <span style="text-align: justify">
                        Banda Aceh Medan Pekanbaru Padang Batam Bengkulu Jambi
                        Palembang Bandar Lampung Pangkalpinang Serang Jakarta
                        Bandung Semarang Yogyakarta Surabaya
                    </span>
                </div>
            </div>
            
            <div class="row mt-5 justify-content-around align-items-center">
                <div class="col-md-6">
                    <h5>
                        BRAND CAMPAIGN
                    </h5>
                    <h1 class="text-info">
                        ACTIVATION.
                    </h1>
                    <span style="text-align: justify">
                        <ul>
                            <li>IQOS Home Service</li>
                            <li>Iqos Space</li>
                            <li>Iqos Society Jabodetabek, Semarang, Makassar, Surabaya & Bali Concept, Journey & Man Power</li>
                        </ul>
                    </span>
                </div>
                <div class="col-md-6 text-center">
                    <img src="{{ asset('images/service/loyalty-program/loyalty_project_3.png') }}" alt="" class=" img-fluid">
                </div>
            </div>
        </div>
    </div>
    {{-- End of Banner Projects --}}
@endsection
