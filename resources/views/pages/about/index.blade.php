@extends('layouts.app')

@section('title', 'About us')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/about/index.css') }}">    
@endpush

@section('content')

    {{-- Banner Why Aldmic --}}
    <div class=" container"
    style="background-image: url('{{ asset('images/background.png') }}');
            background-size: auto;
            background-position: center 45%;">
        <h1 class="fw-bolder pt-5 mb-1 text-center text-secondary" style="font-size: 3rem">
            Why Aldmic ?
        </h1>

        <div class="row">
            <h1 class="align-items-center text-center fw-bolder mb-5" style="white-space: pre-line;font-size: 2.5rem;font-weight:900">
                Built Transformation Technology, COOPN Digital is your Reliable
                Partner for Merchant Aggregator Services. Through New
                Differentiated, <span class="text-info">We Already Lead The Market!</span>
            </h1>
        </div>

        <div class="row" style="text-align: justify">
            <p class="mb-4">
                Aldmic COOPN Digital is a Merchant Aggregator company that leads the market through a differentiated platform to enable business
                improvement for all customers, partners and stakeholders. Seamless experience on demand is a key to creating an engaging and rewarding
                merchant ecosystem to create the best solutions for all.
            </p>
            <p class="mb-4">
                Founded in 2005, Aldmic COOPN always understood how important digital transformation and disruption were and witnessed how business
                processes began to face challenges at a fast pace to developing and managing effective loyalty & rewards programs in the all marketing
                platform. Develop and manage effective loyalty & rewards programs not only from the ecosystem, but also infrastructure development
            </p>
            <p class="mb-4">
                Aldmic COOPN we believe good infrastructure is one of the important things in a sustainable business process with a real time and high
                security in all digital platform. With loyalty rewards programs and good infrastructure, Aldmic COOPN ensure the best customer satisfaction
                to make sustainable profitability and lead the market of merchant aggregator!
            </p>
        </div>
        
        <div class="row">
            {{-- Table  & Images --}}
        </div>
    </div>
    {{-- End of Banner Why Aldmic --}}

    {{-- Banner vision & mission --}}
    <div class="container-fluid"  >
        <div class="row bg-light shadow-sm mb-5">
            <div class="col-md-6">
                <h1 class=" mt-3 pb-3 text-left fw-bold ms-5" style="font-size: 5rem;font-weight: 900">
                    Vision
                </h1>
    
                <h2 class="ms-5 5" style="font-size: 50px">
                    The Most Leading Merchant
                    Aggregator with The Best
                    Experience and Seamless For
                    Sustainable Business
                </h2>
            </div>
            <div class="col-md-6">
                <h1 class=" mt-3 pb-3 text-left fw-bold me-5" style="font-size: 5rem">
                    <span class="text-primary">Mission</span>
                </h1>
                <ul class="me-5" style="text-align: justify">
                    <li><h4>Built Integrated Merchant Aggregator Platform as a Part Of Marketing Channels.</h4></li>
                    <li><h4>Connect The Aggregation Merchant Across The World as A Part of Digital Transformation.</h4></li>
                    <li><h4>Make Continuous Improvement Solutions For Customer, Merchant and Stakeholders.</h4></li>
                    <li><h4>Operate The Most Reliable Network of Merchant Aggregators with High Scalability Infrastructure.</h4></li>
                    <li><h4>Customer and Data Driven Oriented To Build a Sustainable Merchant Aggregator Business Model.</h4></li>
                </ul>
            </div>
        </div>
    </div>
    {{-- End of Banner vision & mission --}}

    {{-- Banner Milestone --}}
    <div class="container">
        <div class="row">
            <h2 class="fw-bolder text-center" style="font-weight: 900">
                Milestone
            </h2>
        </div>
    </div>


    <div class="container mt-5 timeline-container">
        <ul class="timeline">
            <li class="timeline-item-2-divider">
                <div class="timeline-item-left-divider">
                </div>
                <div class="timeline-item-divider-2">
                    <span></span>
                </div>
                <div class="timeline-item-right-divider">
                </div>
            </li>
            <li class="timeline-item">
                <div class="timeline-item-left-1">
                    <h2 class="fw-bolder">2005</h2>
                </div>
                <div class="timeline-item-divider">
                    <span></span>
                </div>
                <div class="timeline-item-right">
                    <p class="mb-0 fw-bold fs-5">Founded COOPN Marketing</p>
                </div>
            </li>
            <span class="text-center d-flex justify-content-center align-items-center pb-3" style="white-space: pre-line;font-size:14px;">
                Founded COOPN Marketing as The First Merchant Aggregator To All
                Digital Platforms with High Scalability
            </span>
            

            <li class="timeline-item-2-divider">
                <div class="timeline-item-left-divider">
                </div>
                <div class="timeline-item-divider-2">
                    <span></span>
                </div>
                <div class="timeline-item-right-divider">
                </div>
            </li>
            <li class="timeline-item">
                <div class="timeline-item-left-2">
                    <p class="mb-0 fw-bold fs-5">appointed as a KAKAO Gift Service</p>
                </div>
                <div class="timeline-item-divider">
                    <span></span>
                </div>
                <div class="timeline-item-right">
                    <h2 class="fw-bolder">2010</h2>
                </div>
            </li>
            <span class="text-center d-flex justify-content-center align-items-center pb-3" style="white-space: pre-line;font-size:14px;">
                Founded COOPN Marketing as The First Merchant Aggregator To All
                Digital Platforms with High Scalability
            </span>

            <li class="timeline-item-2-divider">
                <div class="timeline-item-left-divider">
                </div>
                <div class="timeline-item-divider-2">
                    <span></span>
                </div>
                <div class="timeline-item-right-divider">
                </div>
            </li>
            <li class="timeline-item">
                <div class="timeline-item-left-1">
                    <h2 class="fw-bolder">2013</h2>
                </div>
                <div class="timeline-item-divider">
                    <span></span>
                </div>
                <div class="timeline-item-right">
                    <p class="mb-0 fw-bold fs-5">Expand Indonesia Market</p>
                </div>
            </li>
            <span class="text-center d-flex justify-content-center align-items-center pb-3" style="white-space: pre-line;font-size:14px;">
                COOP Marketing Expand Indonesia Market and Greater South East Asia for
                Merchant Aggregator Loyalty Brand with Aldmic COOPN Digital
            </span>
            
            <li class="timeline-item-2-divider">
                <div class="timeline-item-left-divider">
                </div>
                <div class="timeline-item-divider-2">
                    <span></span>
                </div>
                <div class="timeline-item-right-divider">
                </div>
            </li>
            <li class="timeline-item">
                <div class="timeline-item-left-3">
                    <p class="mb-0 fw-bold fs-5">Gateway of Kakaotalk Gift</p>
                </div>
                <div class="timeline-item-divider">
                    <span></span>
                </div>
                <div class="timeline-item-right">
                    <h2 class="fw-bolder">2014</h2>
                </div>
            </li>
            <span class="text-center d-flex justify-content-center align-items-center pb-3" style="white-space: pre-line;font-size:14px;">
                COOP Become an Executive Gateway of Kakaotalk Gift and Expand The Number of
                Larger Partnership Across The World.
                After Indonesia, COOPN Digital operate in Malaysia as a 2nd Country in South East
                Asia with brand "CMAP".
            </span>

            <li class="timeline-item-2-divider">
                <div class="timeline-item-left-divider">
                </div>
                <div class="timeline-item-divider-2">
                    <span></span>
                </div>
                <div class="timeline-item-right-divider">
                </div>
            </li>
            <li class="timeline-item">
                <div class="timeline-item-left-1">
                    <h2 class="fw-bolder">2015</h2>
                </div>
                <div class="timeline-item-divider">
                    <span></span>
                </div>
                <div class="timeline-item-right">
                    <p class="mb-0 fw-bold fs-5">support Samsung Galaxy Gift Indonesia</p>
                </div>
            </li>
            <span class="text-center d-flex justify-content-center align-items-center pb-3" style="white-space: pre-line;font-size:14px;">
                Aldmic COOPN Indonesia appoint to support Samsung Galaxy Gift Indonesia
                as The Largest Loyalty Apps & Benefits in Indonesia
            </span>

            <li class="timeline-item-2-divider">
                <div class="timeline-item-left-divider">
                </div>
                <div class="timeline-item-divider-2">
                    <span></span>
                </div>
                <div class="timeline-item-right-divider">
                </div>
            </li>
            <li class="timeline-item">
                <div class="timeline-item-left-4">
                    <p class="mb-0 fw-bold fs-5">10.000.000 voucher Redemptions</p>
                </div>
                <div class="timeline-item-divider">
                    <span></span>
                </div>
                <div class="timeline-item-right">
                    <h2 class="fw-bolder">2018</h2>
                </div>
            </li>
            <span class="text-center d-flex justify-content-center align-items-center pb-3" style="white-space: pre-line;font-size:14px;">
                COOPN Digital Have been Processed 10.000.000 voucher Redemptions
                Across The World
            </span>
            
            <li class="timeline-item-2-divider">
                <div class="timeline-item-left-divider">
                </div>
                <div class="timeline-item-divider-2">
                    <span></span>
                </div>
                <div class="timeline-item-right-divider">
                </div>
            </li>
            <li class="timeline-item">
                <div class="timeline-item-left-1">
                    <h2 class="fw-bolder">2020</h2>
                </div>
                <div class="timeline-item-divider">
                    <span></span>
                </div>
                <div class="timeline-item-right">
                    <p class="mb-0 fw-bold fs-5">Expand South East Asia Countries</p>
                </div>
            </li>
            <span class="text-center d-flex justify-content-center align-items-center pb-3" style="white-space: pre-line;font-size:14px;">
                Founded COOPN Global for Singapore and Hong Kong Market to Expand
                Another South East Asia Countries.
            </span>
               
            <li class="timeline-item-2-divider">
                <div class="timeline-item-left-divider">
                </div>
                <div class="timeline-item-divider-2">
                    <span></span>
                </div>
                <div class="timeline-item-right-divider">
                </div>
            </li>
            <li class="timeline-item">
                <div class="timeline-item-left-5">
                    <p class="mb-0 fw-bold fs-5">Shareholders for Aldmic Technology</p>
                </div>
                <div class="timeline-item-divider">
                    <span></span>
                </div>
                <div class="timeline-item-right">
                    <h2 class="fw-bolder">2021</h2>
                </div>
            </li>
            <span class="text-center d-flex justify-content-center align-items-center pb-3" style="white-space: pre-line;font-size:14px;">
                Acquire Majority Shareholders for Aldmic Technology as a Special Merchant
                Aggregator. Built Joint Venture with COOP Marketing, The Leading
                Merchant Aggregator in South Korea.
            </span>
            
            <li class="timeline-item-2-divider">
                <div class="timeline-item-left-divider">
                </div>
                <div class="timeline-item-divider-2">
                    <span></span>
                </div>
                <div class="timeline-item-right-divider">
                </div>
            </li>
            <li class="timeline-item">
                <div class="timeline-item-left-1">
                    <h2 class="fw-bolder">2022</h2>
                </div>
                <div class="timeline-item-divider">
                    <span></span>
                </div>
                <div class="timeline-item-right">
                    <p class="mb-0 fs-5 fw-bold">Expand SuperApp across with Air Asia.</p>
                </div>
            </li>
            <span class="text-center d-flex justify-content-center align-items-center pb-3" style="white-space: pre-line;font-size:14px;">
                Product Expand for Digital SuperApp Merchant across Asia Pacific with Air
                Asia.
            </span>
        </ul>

    </div>
      
    {{-- End of Banner Milestone --}}

@endsection


{{-- 
<div class="container mt-5 timeline-container">
    <ul class="timeline">
        <li class="timeline-item">
            <div class="timeline-item-left-1">
                <h2 class="fw-bolder">2005</h2>
            </div>
            <div class="timeline-item-divider">
                <span></span>
            </div>
            <div class="timeline-item-right">
                <p class="mb-0 fw-bold fs-5">Founded COOPN Marketing</p>
            </div>
        </li>
        <span class="text-center d-flex justify-content-center align-items-center" style="white-space: pre-line;font-size:14px;">
            Founded COOPN Marketing as The First Merchant Aggregator To All
            Digital Platforms with High Scalability
        </span>
    </ul>
</div>
   --}}