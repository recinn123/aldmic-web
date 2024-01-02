@extends('layouts.app')

@section('title', 'About us')

@section('content')

    {{-- Banner Why Aldmic --}}
    <div class=" container"
    style="background-image: url('{{ asset('images/background.png') }}');
            background-size: auto;
            background-position: center 45%;">
        <h1 class="fw-bolder pt-5 mb-1 text-center text-secondary">
            Why Aldmic ?
        </h1>

        <div class="row">
            <h1 class="text-center fw-bolder mb-5" style="white-space: pre-line;">
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
            <h2 class="fw-bold text-center" style="font-weight: 900">
                Milestone
            </h2>

            <div class="row mb-5">
                <div class="col d-flex align-items-center">
                    <span class="fw-bold fs-3 me-5" >2005</span>
                    <span>
                        <h5 class="fw-bold">
                            Founded COOP Marketing
                        </h5>
                        <span>
                            Founded COOP Marketing as The First Merchant
                            Aggregator To All Digital Platforms with High Scalability.
                        </span>
                    </span>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col d-flex align-items-center">
                    <span class="fw-bolder me-5" style="font-size: 3rem">2010</span>
                    <span>
                        <h2 class="fw-bolder">
                            Appointed as a KAKAO Gift Service
                        </h2>
                        <span class="fs-3">
                            Founded COOP Marketing as The First Merchant Aggregator
                            To All Digital Platforms with High Scalability.
                        </span>
                    </span>
                </div>
            </div>


            <div class="row mb-5">
                <div class="col d-flex align-items-center">
                    <span class="fw-bold fs-3 me-5" >2013</span>
                    <span>
                        <h5 class="fw-bold">
                            Expand Indonesia Market
                        </h5>
                        <span>
                            COOP Marketing Expand Indonesia Market and Greater South East Asia
                            for Merchant Aggregator Loyalty Brand with Aldmic COOPN Digital.
                        </span>
                    </span>
                </div>
            </div>


        </div>
    </div>
    {{-- End of Banner Milestone --}}
@endsection