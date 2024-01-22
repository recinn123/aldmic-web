@extends('layouts.app')

@section('title', ' - About us')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/about/index.css') }}">    
@endpush

@section('content')

    {{-- Banner Why Aldmic --}}
    <div class="container mb-3 top-banner"
    style="background-image: url('{{ asset('images/background.png') }}');">
        <h1 class="fw-bolder pt-5 mb-1 text-center text-secondary top-banner-title">
            Why Aldmic ?
        </h1>

        <div class="row">
            <h1 class="text-center fw-bolder mb-5 top-banner-subtitle text-break">
                Built Transformation Technology, COOPN Digital is your Reliable
                Partner for Merchant Aggregator Services. Through New
                Differentiated, <span class="text-info">We Already Lead The Market!</span>
            </h1>
        </div>

        <div class="row" style="text-align: justify;">
            <p id="firstParagraph" class="mb-3">
                Aldmic COOPN Digital is a Merchant Aggregator company that leads the market through a differentiated platform
                to enable business improvement for all customers, partners, and stakeholders. Seamless experience on demand is
                a key to creating an engaging and rewarding merchant ecosystem to create the best solutions for all.
                <a class="btn btn-link text-secondary" id="seeMoreLink" data-bs-toggle="collapse" href="#additionalContent" role="button" aria-expanded="false" aria-controls="additionalContent">
                    See more...
                </a>
            </p>
            <div class="collapse" id="additionalContent">
                <p class="mb-3">
                    Founded in 2005, Aldmic COOPN always understood how important digital transformation and disruption were and
                    witnessed how business processes began to face challenges at a fast pace to developing and managing effective
                    loyalty & rewards programs in all marketing platforms. Develop and manage effective loyalty & rewards programs
                    not only from the ecosystem but also infrastructure development.
                </p>
                <p class="mb-3">
                    Aldmic COOPN we believe good infrastructure is one of the important things in a sustainable business process
                    with real-time and high security on all digital platforms. With loyalty rewards programs and good infrastructure,
                    Aldmic COOPN ensures the best customer satisfaction to make sustainable profitability and lead the market of merchant aggregator!
                </p>
            </div>
        </div>    
    </div>

    <div class="container d-flex justify-content-center mb-5">
        <div class="row">
            <div class="col-md-6 col-sm-12 top-header-image-1">
                <img src="{{ asset('images/about/image-about-1.png') }}" width="100%">
            </div>
            <div class="col-md-6 col-sm-12 top-header-image-2">
                <img src="{{ asset('images/about/image-about-2.png') }}" width="75%" height="75px">
            </div>
        </div>
    </div>
    {{-- End of Banner Why Aldmic --}}

   {{-- Banner vision & mission --}}
    <div class="container-fluid">
        <div class="row bg-light shadow-sm mb-5">
            <div class="col-md-6">
                <h1 class="mt-3 pb-3 text-left fw-bolder ms-md-5 title-vision">
                    Vision
                </h1>

                <h2 class="ms-md-5 subtitle-vision">
                    The Most Leading Merchant Aggregator with The Best Experience and Seamless For Sustainable Business
                </h2>
            </div>
            <div class="col-md-6">
                <h1 class="mt-3 pb-3 text-left fw-bolder me-md-5 title-mission">
                    <span class="text-primary">Mission</span>
                </h1>
                <ul class="me-md-5">
                    <li><h4 class="subtitle-mission">Built Integrated Merchant Aggregator Platform as a Part Of Marketing Channels.</h4></li>
                    <li><h4 class="subtitle-mission">Connect The Aggregation Merchant Across The World as A Part of Digital Transformation.</h4></li>
                    <li><h4 class="subtitle-mission">Make Continuous Improvement Solutions For Customer, Merchant and Stakeholders.</h4></li>
                    <li><h4 class="subtitle-mission">Operate The Most Reliable Network of Merchant Aggregators with High Scalability Infrastructure.</h4></li>
                    <li><h4 class="subtitle-mission">Customer and Data Driven Oriented To Build a Sustainable Merchant Aggregator Business Model.</h4></li>
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

    <div class="container timeline-container">
        <ul class="timeline">
            <li class="timeline-item-2-divider">
                <div class="timeline-item-left-divider">
                </div>
                <div class="timeline-item-divider-2 pt-4">
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
                    <p class="mb-0 fw-bold text-break">Founded COOPN Marketing</p>
                </div>
            </li>
            <span class="text-center d-flex justify-content-center align-items-center pb-3" style="white-space: pre-line;font-size:14px;">
                Founded COOPN Marketing as The First Merchant Aggregator To All
                Digital Platforms with High Scalability
            </span>
            
            <li class="timeline-item-2-divider">
                <div class="timeline-item-left-divider">
                </div>
                <div class="timeline-item-divider-2 pt-4">
                    <span></span>
                </div>
                <div class="timeline-item-right-divider">
                </div>
            </li>
            <li class="timeline-item">
                <div class="timeline-item-left-2">
                    <p class="mb-0 fw-bold text-break">appointed as a<br>KAKAO Gift Service</p>
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
                <div class="timeline-item-divider-2 pt-4">
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
                    <p class="mb-0 fw-bold">Expand Indonesia Market</p>
                </div>
            </li>
            <span class="text-center d-flex justify-content-center align-items-center pb-3" style="white-space: pre-line;font-size:14px;">
                COOP Marketing Expand Indonesia Market and Greater South East Asia for
                Merchant Aggregator Loyalty Brand with Aldmic COOPN Digital
            </span>
            
            <li class="timeline-item-2-divider">
                <div class="timeline-item-left-divider">
                </div>
                <div class="timeline-item-divider-2 pt-4">
                    <span></span>
                </div>
                <div class="timeline-item-right-divider">
                </div>
            </li>
            <li class="timeline-item">
                <div class="timeline-item-left-3">
                    <p class="mb-0 fw-bold">Gateway of<br>Kakaotalk Gift</p>
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
                <div class="timeline-item-divider-2 pt-4">
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
                    <p class="mb-0 fw-bold">support Samsung Galaxy Gift Indonesia</p>
                </div>
            </li>
            <span class="text-center d-flex justify-content-center align-items-center pb-3" style="white-space: pre-line;font-size:14px;">
                Aldmic COOPN Indonesia appoint to support Samsung Galaxy Gift Indonesia
                as The Largest Loyalty Apps & Benefits in Indonesia
            </span>
            <li class="timeline-item-2-divider">
                <div class="timeline-item-left-divider">
                </div>
                <div class="timeline-item-divider-2 pt-4">
                    <span></span>
                </div>
                <div class="timeline-item-right-divider">
                </div>
            </li>
            <li class="timeline-item">
                <div class="timeline-item-left-4">
                    <p class="mb-0 fw-bold">10.000.000 voucher<br>Redemptions</p>
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
                <div class="timeline-item-divider-2 pt-4">
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
                    <p class="mb-0 fw-bold">Expand South East Asia Countries</p>
                </div>
            </li>
            <span class="text-center d-flex justify-content-center align-items-center pb-3" style="white-space: pre-line;font-size:14px;">
                Founded COOPN Global for Singapore and Hong Kong Market to Expand
                Another South East Asia Countries.
            </span>
               
            <li class="timeline-item-2-divider">
                <div class="timeline-item-left-divider">
                </div>
                <div class="timeline-item-divider-2 pt-4">
                    <span></span>
                </div>
                <div class="timeline-item-right-divider">
                </div>
            </li>
            <li class="timeline-item">
                <div class="timeline-item-left-5">
                    <p class="mb-0 fw-bold">Shareholders for<br>Aldmic Technology</p>
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
                <div class="timeline-item-divider-2 pt-4">
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
                    <p class="mb-0 fw-bold">Expand SuperApp across with Air Asia.</p>
                </div>
            </li>
            <span class="text-center d-flex justify-content-center align-items-center pb-3" style="white-space: pre-line;font-size:14px;">
                Product Expand for Digital SuperApp Merchant across Asia Pacific with Air
                Asia.
            </span>
            <li class="timeline-item">
                <div class="timeline-item-left-6">
                    <span></span>
                </div>
                <div class="">
                    <h2 class="fw-bolder milestone-end-1">
                        TODAY
                    </h2>
                </div>
                <div class="timeline-item-right">
                    <span></span>
                </div>
            </li>
            <span class="text-center d-flex justify-content-center align-items-center pb-5 fw-bolder text-break milestone-end-2">
                we get 600 ++ more accounts And ++ 30 Channels
            </span>
        </ul>
    </div>
    {{-- End of Banner Milestone --}}

@endsection

@push('script')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var timelineItems = document.querySelectorAll('.timeline-item-right');
            timelineItems.forEach(function(item) {
                if (navigator.userAgent.match(/(iPad|iPhone|iPod)/i)) {
                    item.classList.add('device-ios');
                } else if (navigator.userAgent.match(/android/i)) {
                    item.classList.add('device-android');
                }
            });
        });

         document.getElementById('seeMoreLink').addEventListener('click', function () {
            // Hide the "See more..." link when clicked
            this.style.display = 'none';
            document.getElementById('additionalContent').style.display = 'block';
        });

        // Check window width on load and resize
        function checkWindowSize() {
            var windowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

            // Show/hide additional content and "See more..." link based on window width
            if (windowWidth <= 575) {
                document.getElementById('additionalContent').style.display = 'none';
            } else {
                document.getElementById('additionalContent').style.display = 'block';
                document.getElementById('seeMoreLink').style.display = 'none';
            }
        }

        // // Add event listener for window resize
        // window.addEventListener('resize', checkWindowSize);

        // Initial check on page load
        checkWindowSize();
    </script>
@endpush