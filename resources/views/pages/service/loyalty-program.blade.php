@extends('layouts.app')

@section('title', ' - Loyalty Program')

@section('content')
    
    {{-- Banner Loyalty Program --}}
    <div class="container pt-5 pb-5" 
        style="background-image: url('{{ asset('images/service/loyalty-program/loyalty.png') }}');
        background-size: 25rem;
        background-position: 30% -75px;
        background-repeat: no-repeat;">
        
        <div class="text-center mb-5">
            <h1 class="fw-bold" style="font-size: 4rem">
                Loyalty <span class="text-info">Program</span>
            </h1>
    
            <h3 class="fw-bold mb-5">
                Personalized your Loyalty Program as a
                <span style="display: block">
                    Part of Sustainability Business Process
                    <span class="text-info" style="display: block">Easy Redemption, Easy to Use</span>
                </span>
            </h3>
        </div>
    </div>  
    <div class="container text-center pb-5">
        <img src="{{ asset('images/product/mouse_icon.png') }}" alt="">
    </div>
    {{-- End of Banner Loyalty Program --}}
    
    {{-- Banner Digital Program Feature --}}
    <div class="container-fluid">
        <div class="row ps-5 pe-5 justify-content-around bg-light pt-5 pb-5 shadow-sm">
            <div class="col-md-7 col-sm-12 mb-5">
                <div class="row mb-3">
                    <h1 class="fw-bold" style="font-size: 3rem">
                        <span class="text-info">Digital Program</span>
                         <span style="display: block">Features</span>                        
                    </h1>
                </div>
                <div class="row">
                    <div class="mb-5 border-3 border-dark text-secondary border-bottom fs-3">
                        Personalize Rewards
                    </div>
                    <div class="mb-5 border-3 border-dark border-bottom fs-3 fw-bold">
                        Loyalty Systems That Suite For You
                    </div>
                    <div class="mb-5 border-3 border-dark text-secondary border-bottom fs-3">
                        Data Communications System
                    </div>
                    <div class="mb-5 border-3 border-dark text-secondary border-bottom fs-3">
                        The Best Customer Service
                    </div>
                </div>
            </div>
            
            <div class="col-md-5 col-sm-12 align-items-center text-center mb-5">
                <img class="mb-3" src="{{ asset('images/service/loyalty-program/loyalty_banner.png') }}" alt="" style="width: auto;">
                <h4 class="fw-bold" style="white-space: pre-line">
                    &rdquo;Not only rewards, loyalty systems
                    can be personalized based that are
                    suitable for your industries. You can
                    use the tier and points as part of
                    loyalty.&rdquo;
                </h4>
            </div>
        </div>
    </div>
    {{-- End Banner Digital Program Feature --}}

    {{-- Banner Loyalty Program Benefits --}}
    <div class="container">
        <div class="row">
            <h1 class=" mt-5 pb-5 mb-5 text-left fw-bold text-center" style="font-size: 3rem">
                Aldmic COOPN Loyalty Program Benefits
            </h1>
            
            <div class="row d-flex justify-content-center">
                <div class="col-md-4 text-center mb-5">
                    <img class="mb-3" src="{{ asset('images/service/loyalty-program/loyalty_program_benefits_1.png') }}" alt="">
                    <div style="margin-left: 5rem; margin-right:5rem;">
                        <p>
                            <span class="fw-bold">Customer Retention To Increase Sales KPI’s</span>
                             Loyalty makes the
                            customer retention to repeat
                            order as part of being a loyalty
                            brand. On the otherside, retention
                            helps to increase KPI of sales as
                            part of sustainability business.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 text-center mb-5">
                    <img class="mb-3" src="{{ asset('images/service/loyalty-program/loyalty_program_benefits_2.png') }}" alt="">
                    <div style="margin-left: 5rem; margin-right:5rem;">
                        <p>
                            <span class="fw-bold">Multi Channel Engagement:</span>
                             As a
                            part of Merchant Aggregator
                            services, loyalty programs can be
                            used in multi various channels
                            including in-store, online, mobile
                            apps, and social media, to ensure a
                            seamless customer experience.
                        </p>
                    </div>
                </div>
    
                <div class="col-md-4 text-center mb-5">
                    <img class="mb-3" src="{{ asset('images/service/loyalty-program/loyalty_program_benefits_3.png') }}" alt="">
                    <div style="margin-left: 5rem; margin-right:5rem;">
                        <p>
                            <span class="fw-bold">Data Collection:</span>
                             Enable your
                            business to collect customer
                            historical data to create sales
                            target KPI and improve the
                            Loyalty Program benefits as part
                            of Consumer Insights.
                        </p>
                    </div>
                </div>
            </div>
    
            <div class="row d-flex justify-content-center">
                <div class="col-md-4 text-center mb-5">
                    <img class="mb-3" src="{{ asset('images/service/loyalty-program/loyalty_program_benefits_4.png') }}" alt="">
                    <div style="margin-left: 3rem; margin-right:3rem;">
                        <p>
                            <span class="fw-bold">Brand Loyalty:</span>
                             Aldmic COOPN
                            ensure that customer effective
                            programs can foster a deeper
                            emotional between customer and
                            brand to long term relationship.
                        </p>
                    </div>
                </div>
    
                <div class="col-md-4 text-center mb-5">
                    <img class="mb-3" src="{{ asset('images/service/loyalty-program/loyalty_program_benefits_5.png') }}" alt="">
                    <div style="margin-left: 3rem; margin-right:3rem;">
                        <p>
                            <span class="fw-bold">Data Collection:</span>
                             Enable your
                            business to collect customer
                            historical data to create sales
                            target KPI and improve the
                            Loyalty Program benefits as part
                            of Consumer Insights.
                        </p>
                    </div>
                </div>
    
                <div class="col-md-4 text-center mb-5">
                    <img class="mb-3" src="{{ asset('images/service/loyalty-program/loyalty_program_benefits_6.png') }}" alt="">
                    <div style="margin-left: 3rem; margin-right:3rem;">
                        <p>
                            <span class="fw-bold">Cost Efficiency:</span>
                             Loyalty Program
                            not only make the customer
                            retention but make the cost
                            effectiveness strategy and
                            maintain the number of growth
                            marketing and ROI s.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End of Banner Loyalty Program Benefits --}}

    {{-- Banner Projects --}}
    <div class="container pt-5 pb-5">
        <div class="row justify-content-evenly text-center mb-5">
            <h1 class="fw-bold">
                Check our <span class="text-info">Project</span>
            </h1>
        </div>

        <div class="row mt-5 justify-content-evenly align-items-center">
            <div class="col-md-6">
                <h5>
                    BRAND CAMPAIGN
                </h5>
                <h1 class="text-info fw-bold">
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
                <img src="{{ asset('images/service/loyalty-program/loyalty_project_1.png') }}" alt="">
            </div>
        </div>

        <div class="row mt-5 justify-content-evenly align-items-center">
            <div class="col-md-6 text-center">
                <img src="{{ asset('images/service/loyalty-program/loyalty_project_2.png') }}" alt="">
            </div>
            <div class="col-md-6">
                <h5>
                    BRAND CAMPAIGN
                </h5>
                <h1 class="text-info fw-bold">
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
                <h1 class="text-info fw-bold">
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
                <img src="{{ asset('images/service/loyalty-program/loyalty_project_3.png') }}" alt="">
            </div>
        </div>

        <div class="row mt-5 justify-content-around align-items-center text-center">
            <h3 class="text-secondary fw-bold">
                Show More
            </h3>
        </div>
    </div>
    {{-- End ocf Banner Projects --}}
@endsection