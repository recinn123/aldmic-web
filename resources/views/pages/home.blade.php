@extends('layouts.app')

@section('title', ' - Home')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/home/index.css') }}">    
@endpush

@section('content')

    {{-- Header Banner --}}
    <div class="mt-5 container animated-background"
    style="
            background-image: url('{{ asset('images/background.png') }}');
            background-size: auto;
            background-position: center 30%;">
        <h1 class="fw-bolder mb-3 text-center">
            The Transformation Merchant Aggregator with Sustainable <br> Solution of Specialized Technology. <span class="text-info">Are you Ready?</span>
        </h1>
        {{-- End of Header Banner --}}

        {{-- Banner 1 --}}
        <div class="banner-front text-center">
            <img src="{{ asset('images/home/home_banner.png') }}" alt="Home Banner" width="100%">
        </div>
        {{-- End of Banner 1--}}
        
        
        {{-- Button Find About us --}}
        <div class="mt-5 mb-5 text-center">
            <a href="{{ route('about.index') }}" class="btn btn-outline-info rounded-5 ps-4 pe-4">
                Find About us <i class="bi bi-arrow-right ms-3 fs-5"></i>
            </a>
        </div>
    </div>
    {{-- End of Button Find About us--}}
    
    {{-- Banner infrastructure --}}
    <div class="container-fluid">
        <div class="bg-light">
            <div class="row d-flex bg-light align-items-center justify-content-center">
                <div class="col-md-6">
                    <div class="ms-5">
                        <h1 class=" mt-5 pb-5 mb-5 text-left fw-bold" style="font-size: 3rem">
                            Our Infrastructure For <span class="text-primary">Business Sustainability</span>
                        </h1>
                        <div class="text-left">
    
                            <div class="row mb-5">
                                <div class="col-md-2 d-flex align-items-center">
                                    <img src="{{ asset('images/home/home_icon_4.png') }}" alt="">
                                </div>
                                <div class="col-md-10">
                                    <span class="fs-5 fw-bold">
                                        COOPN Digital <span class="text-info">provides the Solution</span> Proprietary Platform Technology
                                    </span>
                                </div>
                            </div>
    
                            <div class="row mb-5">
                                <div class="col-md-10">
                                    <span class="fs-5 fw-bold">
                                        <span class="text-info">High Security</span> Equipped with Optimized Systems
                                    </span>
                                </div>
                                <div class="col-md-2">
                                    <img src="{{ asset('images/home/home_icon_1.png') }}" alt="">
                                </div>
                            </div>
    
    
                            <div class="row mb-5">
                                <div class="col-md-2">
                                    <img src="{{ asset('images/home/home_icon_2.png') }}" alt="">
                                </div>    
                                <div class="col-md-10">
                                    <span class="fs-5 fw-bold">
                                        The In the <span class="text-info">Best Customer Services</span> Merchant Aggregator Industry
                                    </span>
                                </div>
                            </div>
    
                            <div class="row mb-5">
                                <div class="col-md-10">
                                    <span class="fs-5 fw-bold"> 
                                        <span class="text-info">Real Time Monitoring</span> System and ActualDirectly To All Digital Platforms
                                    </span>     
                                </div>
                                <div class="col-md-2 ">
                                    <img src="{{ asset('images/home/home_icon_2.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 img-infrastructure">
                    <img src="{{ asset('images/home/home_banner_mid.png') }}" alt="" width="100%" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    {{-- End of Banner infrastructure --}}

    {{-- Banner partner --}}
    <div class="container">
        <div class="text-center mt-5 mb-5 justify-content-around ">
            <h1 class="fw-bold mb-5" style="font-size: 2rem">
                We Serve One Stop Solution All You Need For Industries Ever
            </h1>

            {{-- Logo Partner --}}
            <div class="row row-cols-2 row-cols-md-4 row-cols-lg-6 g-3">
                <div class="col">
                    <img class="logo-img" src="{{ asset('images/LOGO-01.jpg') }}" alt="">
                </div>
                <div class="col">
                    <img class="logo-img" src="{{ asset('images/LOGO-02.jpg') }}" alt="">
                </div>
                <div class="col">
                    <img class="logo-img" src="{{ asset('images/LOGO-03.jpg') }}" alt="">
                </div>
                <div class="col">
                    <img class="logo-img" src="{{ asset('images/LOGO-04.jpg') }}" alt="">
                </div>
                <div class="col">
                    <img class="logo-img" src="{{ asset('images/LOGO-05.jpg') }}" alt="">
                </div>
                <div class="col">
                    <img class="logo-img" src="{{ asset('images/LOGO-06.jpg') }}" alt="">
                </div>
                <div class="col">
                    <img class="logo-img" src="{{ asset('images/LOGO-31.jpg') }}" alt="">
                </div>
                <div class="col">
                    <img class="logo-img" src="{{ asset('images/LOGO-16.jpg') }}" alt="">
                </div>
                <div class="col">
                    <img class="logo-img" src="{{ asset('images/LOGO-17.jpg') }}" alt="">
                </div>
                <div class="col">
                    <img class="logo-img" src="{{ asset('images/LOGO-18.jpg') }}" alt="">
                </div>
                <div class="col">
                    <img class="logo-img" src="{{ asset('images/LOGO-33.jpg') }}" alt="">
                </div>
                <div class="col">
                    <img class="logo-img" src="{{ asset('images/LOGO-19.jpg') }}" alt="">
                </div>
                <div class="col">
                    <img class="logo-img" src="{{ asset('images/LOGO-20.jpg') }}" alt="">
                </div>
                <div class="col">
                    <img class="logo-img" src="{{ asset('images/LOGO-21.jpg') }}" alt="">
                </div>
                <div class="col">
                    <img class="logo-img" src="{{ asset('images/LOGO-07.jpg') }}" alt="">
                </div>
                <div class="col">
                    <img class="logo-img" src="{{ asset('images/LOGO-08.jpg') }}" alt="">
                </div>
                <div class="col">
                    <img class="logo-img" src="{{ asset('images/LOGO-09.jpg') }}" alt="">
                </div>
                <div class="col">
                    <img class="logo-img" src="{{ asset('images/LOGO-10.jpg') }}" alt="">
                </div>
                <div class="col">
                    <img class="logo-img" src="{{ asset('images/LOGO-11.jpg') }}" alt="">
                </div>
                <div class="col">
                    <img class="logo-img" src="{{ asset('images/LOGO-12.jpg') }}" alt="">
                </div>
                <div class="col">
                    <img class="logo-img" src="{{ asset('images/LOGO-32.jpg') }}" alt="">
                </div>
                <div class="col">
                    <img class="logo-img" src="{{ asset('images/LOGO-22.jpg') }}" alt="">
                </div>
                <div class="col">
                    <img class="logo-img" src="{{ asset('images/LOGO-23.jpg') }}" alt="">
                </div>
                <div class="col">
                    <img class="logo-img" src="{{ asset('images/LOGO-24.jpg') }}" alt="">
                </div>
                <div class="col">
                    <img class="logo-img" src="{{ asset('images/LOGO-34.jpg') }}" alt="">
                </div>
                <div class="col">
                    <img class="logo-img" src="{{ asset('images/LOGO-25.jpg') }}" alt="">
                </div>
                <div class="col">
                    <img class="logo-img" src="{{ asset('images/LOGO-26.jpg') }}" alt="">
                </div>
                <div class="col">
                    <img class="logo-img" src="{{ asset('images/LOGO-27.jpg') }}" alt="">
                </div>
            </div>
            {{-- End of Logo Partner --}}
        </div>
    </div>
    {{-- End of Banner partner --}}


    {{-- Banner Give --}}
    <div class="container">
        <div class="mt-5 mb-5">
            <h1 class="fw-bold mb-5 text-center" style="font-size: 3rem">
                We gift best
            </h1>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3 custom-col mb-5 d-flex justify-content-center align-items-center">
                <div class="col">
                    <div class="text-center">
                        <img src="{{ asset('images/home/property_home_1.png') }}" alt="" class="img-fluid">
                        <h3 class="fw-bold mb-2 mt-3">Solution</h3>
                        <span>
                            We supply and operate our own solution using COOPN Digital's proprietary platform technology and infrastructure
                        </span>
                    </div>
                </div>
    
                <div class="col">
                    <div class="text-center">
                        <img src="{{ asset('images/home/property_home_2.png') }}" alt="" class="img-fluid">
                        <h3 class="fw-bold mb-2 mt-3">Service</h3>
                        <span>
                            We provide customized services for our customers by linking to COOPN Digital's exclusive contents
                        </span>
                    </div>
                </div>
    
                <div class="col">
                    <div class="text-center">
                        <img src="{{ asset('images/home/property_home_3.png') }}" alt="" class="img-fluid">
                        <h3 class="fw-bold mb-2 mt-3">Content</h3>
                        <span>
                            Providing effective contents targeting each channel customers
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End of Banner Give --}}

@endsection 