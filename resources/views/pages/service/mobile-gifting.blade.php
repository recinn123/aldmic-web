@extends('layouts.app')

@section('title', ' - Mobile Gifting')

@push('css')
    <style>
        .container-overlay {
            position: relative;
        }

        .container-overlay::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('{{ asset('images/logo_aldmic_color.png') }}');
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
            opacity: 0.2; /* Adjust the opacity value */
            z-index: -1; /* Ensure the overlay is behind the content */
        }

        .container-overlay .content {
            position: relative; /* Ensure content is above the overlay */
            z-index: 1; /* Make sure content is above the overlay */
        }

    </style>
    
    <link rel="stylesheet" href="{{ asset('css/service/mobile.css') }}">    
@endpush


@section('content')
    
    {{-- Banner Mobile Gifting --}}
    <div class="container banner-mobile pt-3" 
        style="background-image: url('{{ asset('images/service/mobile-gifting/gifting.png') }}');">
        
        <div class="text-center mb-5">
            <h1 class="fw-bold banner-mobile-title">
                Mobile <span class="text-info">Gifting</span>
            </h1>
    
            <h3 class="fw-bold banner-mobile-subtitle text-break">
                Spread The Happiness On <span><span class="text-info">Digital Platform</span> Easily Now!</span>
            </h3>

            
            <p class="banner-mobile-paragraph text-break">
                The Most Integrated Merchant Aggregator in your hand with one application for all customers ever.
                 Get your seamless Platform to distribute all benefits in Your Hand.
            </p>

        </div>
    </div>
    <div class="container text-center pb-5">
        <img src="{{ asset('images/product/mouse_icon.png') }}" alt="" class=" img-fluid">
    </div>
    {{-- End of Banner Mobile Gifting --}}

    {{-- Banner Mobile Gift Card --}}
    <div class="container text-center">
        <h1 class="fw-bold mb-5">
            Our Mobile Gift Card Features
        </h1>

        <div class="d-none d-md-block">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-3 text-center mb-5">
                    <img class="img-fluid" src="{{ asset('images/service/mobile-gifting/gift_card_feature_1.png') }}" alt="">
                    <div style="margin-left: 3rem; margin-right:3rem;">
                        <p>
                            <span class="fw-bold">Barcodes:</span>
                             Easily to use include
                            scannable barcodes for customer
                            and merchant for redemption.
                        </p>
                    </div>
                </div>
    
                <div class="col-md-3 text-center mb-5">
                    <img class="mb-3 img-fluid" src="{{ asset('images/service/mobile-gifting/gift_card_feature_2.png') }}" alt="">
                    <div style="margin-left: 3rem; margin-right:3rem;">
                        <p>
                            <span class="fw-bold">Barcodes:</span>
                             Easily to use include
                            scannable barcodes for customer
                            and merchant for redemption.
                        </p>
                    </div>
                </div>
    
                <div class="col-md-3 text-center mb-5">
                    <img class="mb-3 img-fluid" src="{{ asset('images/service/mobile-gifting/gift_card_feature_3.png') }}" alt="">
                    <div style="margin-left: 3rem; margin-right:3rem;">
                        <p>
                            <span class="fw-bold">On Demand Service:</span>
                             Delivered
                            electronically and integrated
                            service only in one app with
                            another multiplatform.
                        </p>
                    </div>
                </div>
                
                <div class="col-md-3 text-center mb-5">
                    <img class="mb-3 img-fluid" src="{{ asset('images/service/mobile-gifting/gift_card_feature_4.png') }}" alt="">
                    <div style="margin-left: 3rem; margin-right:3rem;">
                        <p>
                            <span class="fw-bold">High Encrypt Data Security System:</span>
                            To protect the systems, Mobile Gift
                            Cards include the highest security
                            data system for users.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-md-none">
            <div class="row mb-3 d-flex justify-content-center align-items-center">
                <div class="col-4">
                    <div class="text-center">
                        <img class="mb-3 img-fluid" src="{{ asset('images/service/mobile-gifting/gift_card_feature_1.png') }}" alt="">
                    </div>
                </div>
                <div class="col-8">
                    <div class="text-break gift-text">
                        <p class="gifts-text">
                            <span class="fw-bold">Barcodes:</span>
                            Easily to use include
                            scannable barcodes for customer
                            and merchant for redemption.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="row mb-3 d-flex justify-content-center align-items-center">
                <div class="col-4">
                    <div class="text-center">
                        <img class="mb-3 img-fluid" src="{{ asset('images/service/mobile-gifting/gift_card_feature_2.png') }}" alt="">
                    </div>
                </div>
                <div class="col-8">
                    <div class="text-break gift-text">
                        <p class="gifts-text">
                            <span class="fw-bold">Barcodes:</span>
                            Easily to use include
                            scannable barcodes for customer
                            and merchant for redemption.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="row mb-3 d-flex justify-content-center align-items-center">
                <div class="col-4">
                    <div class="text-center">
                        <img class="mb-3 img-fluid" src="{{ asset('images/service/mobile-gifting/gift_card_feature_3.png') }}" alt="">
                    </div>
                </div>
                <div class="col-8">
                    <div class="text-break gift-text">
                        <p class="gifts-text">
                            <span class="fw-bold">On Demand Service:</span>
                            Delivered electronically and integrated
                            service only in one app with
                            another multiplatform.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="row mb-3 d-flex justify-content-center align-items-center">
                <div class="col-4">
                    <div class="text-center">
                        <img class="mb-3 img-fluid" src="{{ asset('images/service/mobile-gifting/gift_card_feature_4.png') }}" alt="">
                    </div>
                </div>
                <div class="col-8">
                    <div class="text-break gift-text">
                        <p class="gifts-text">
                            <span class="fw-bold">High Encrypt Data Security System:</span>
                            To protect the systems, Mobile Gift
                            Cards include the highest security
                            data system for users.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    {{-- End of Banner Mobile Gift Card --}}

    {{-- Banner Benefit Mobile Gift --}}
    <div class="container-fluid">
        <div class="row ps-5 pe-5 bg-light pt-5 pb-5 shadow-sm">
            <div class="row mb-3">
                <h1 class="fw-bold banner-benefit-title">
                    Benefits of <span class="text-info">Mobile Gift</span>
                    Card Platform                        
                </h1>
            </div>

            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-7 col-sm-12 mb-5">
                    <div class="row">
                        <div class="mb-3 border-3 border-dark border-bottom feature-item">
                            Simple and Seamless Platform
                        </div>
                        <div class="mb-3 border-3 border-dark border-bottom feature-item">
                            Easy to Use for User
                        </div>
                        <div class="mb-3 border-3 border-dark border-bottom feature-item">
                            Get New First of The Best Loyalty Platform.
                        </div>
                        <div class="mb-3 border-3 border-dark border-bottom feature-item">
                            More Revenue Streams To Make A Profitable Platform.
                        </div>
                        <div class="mb-3 border-3 border-dark border-bottom feature-item">
                            Use for Brand Promotion Strategy.
                        </div>
                        <div class="mb-3 border-3 border-dark border-bottom feature-item">
                            Various retention product reward.
                        </div>
                    </div>
                </div>
                
                
                <div class="col-md-5 col-sm-12 text-center mb-5 d-none d-md-block">
                    <img class="mb-3" src="{{ asset('images/product/evoucher_banner_1.png') }}" alt="">
                </div>

            </div>
            <div class="row text-center fw-bold d-none d-md-block">
                <span style="font-size: 40px">
                    Track your Mobile Gift Card Performance Easily with Dashboard Directly & Actually
                </span>
            </div>
        </div>
    </div>
    {{-- End of Banner Benefit Mobile Gift --}}

    {{-- Banner Merchant Aggregator --}}
    <div class="container container-overlay">
        <div class="row text-center">
            <h1 class="fw-bold banner-merchant-title text-break">
                As Merchant Aggregator Services, Aldmic COOPN serves integrated
            </h1>
            <p class="banner-merchant-subtitle text-break">
                Reach out your Mobile Gift Card performance & KPI metrics with dashboard monitoring directly & actually real
                <br>time as part of business decision understandable for operations, project, goals to the future basis.
            </p>
        </div>
    </div>
    {{-- End of Banner Merchant Aggregator --}}

    {{-- Banner 5 --}}
    <div class="container-fluid">
        <div class="row ps-5 pe-5 bg-light pt-5 pb-5 shadow-sm">
            <div class="col-md-6 col-sm-12 text-center d-none d-md-block">
                <img class=" img-fluid " src="{{ asset('images/service/mobile-gifting/image_statistic.png') }}" alt="" width="50%">
            </div>

            <div class="col-md-6 col-sm-12 banner-5-text" >
                <div class="row">
                    <span>
                        <h4 class="text-info fw-bold">
                            Visual Based
                        </h4>
                        <p class=" text-performance">
                            Make it easy with an interface with the best visualization to monitor all
                            performance by design & graphics.
                        </p>
                    </span>
                </div>
                
                <div class="row">
                    <span>
                        <h4 class="text-info fw-bold">
                            Performance Indicator
                        </h4>
                        <p class=" text-performance">
                            You can personalize the performance indicator instead of your KPI as a part
                            of the business process in real time.
                        </p>
                    </span>
                </div>
                
                <div class="row">
                    <span>
                        <h4 class="text-info fw-bold">
                            Revenue Dashboard
                        </h4>
                        <p class=" text-performance">
                            Ensure your Business Inquiries to make the other conversion, see your
                            achievement with revenue dashboard directly.
                        </p>
                    </span>
                </div>

                <div class="row">
                    <span>
                        <h4 class="text-info fw-bold">
                            Real Time & Actual Based
                        </h4>
                        <p class=" text-performance">
                            Monitor your performance easily with real time manage service for brand
                            and user.
                        </p>
                    </span>
                </div>
            </div>
        </div>
    </div>
    {{-- End of Banner 5 --}}
@endsection