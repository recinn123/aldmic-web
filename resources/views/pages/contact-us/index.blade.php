@extends('layouts.app')

@section('title', ' - Contact us')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/contact-us/index.css') }}">    
@endpush

@section('content')
    <div class="container pt-5 pb-5 banner-contact"
        style="
            background-image: url('{{ asset('images/contact-us/background.png') }}');">
        <div class="text-center mb-5 text-container">
            <h1 class="fw-bold banner-contact-title">
                <span class="text-info">Apply Now</span> and Join Us
            </h1>

            <h2 class=" mb-5 line-heading" style="white-space: pre-line">
                Create <span class="text-info">Opportunities and Transformation</span> with COOPN Digital
            </h2>
        </div>
    </div>

    <div class="container pb-5">
        <form action="" method="post">
            <div class="row mb-4">
                <div class="col-md-12 pt-1 pb-1 mb-4 banner-contact-form" style="width: 100%">
                    <span class="fs-5">
                        How can I help you
                    </span>
                </div>

                <!-- Medium-Large Layout -->
                <div class="col-md-6 mb-2 d-none d-md-block">
                    <input type="text" name="name" placeholder="Name" class="shadow-sm custom-input-left bg-light">
                </div>

                <div class="col-md-6 mb-2 d-none d-md-block">
                    <input type="text" name="company_name" placeholder="Company Name" class="shadow-sm custom-input-right bg-light">
                </div>

                <div class="col-md-6 mb-2 d-none d-md-block">
                    <input type="email" name="email" placeholder="Email" class="shadow-sm custom-input-left bg-light">
                </div>

                <div class="col-md-6 mb-2 d-none d-md-block">
                    <input type="text" name="job_title" placeholder="Job Title" class="shadow-sm custom-input-right bg-light">
                </div>

                <div class="col-md-6 mb-2 d-none d-md-block">
                    <input type="text" name="phone_number" placeholder="Phone Number" class="shadow-sm custom-input-left bg-light">
                </div>

                <div class="col-md-6 mb-2 d-none d-md-block">
                    <input type="text" name="industry" placeholder="Industry" class="shadow-sm custom-input-right bg-light">
                </div>

                <div class="col-md-12 mb-2 d-none d-md-block">
                    <textarea class="text-area shadow-sm bg-light" placeholder="Message" name="message" id="message" cols="30" rows="10"></textarea>
                </div>

                <!-- Small Layout -->
                <div class="col-md-6 mb-2 d-sm-none">
                    <input type="text" name="name" placeholder="Name" class="shadow-sm custom-input-left bg-light">
                </div>

                <div class="col-md-6 mb-2 d-sm-none">
                    <input type="email" name="email" placeholder="Email" class="shadow-sm custom-input-right bg-light">
                </div>

                <div class="col-md-6 mb-2 d-sm-none">
                    <input type="text" name="phone_number" placeholder="Phone Number" class="shadow-sm custom-input-left bg-light">
                </div>

                <div class="col-md-6 mb-2 d-sm-none">
                    <input type="text" name="company_name" placeholder="Company Name" class="shadow-sm custom-input-right bg-light">
                </div>

                <div class="col-md-6 mb-2 d-sm-none">
                    <input type="text" name="job_title" placeholder="Job Title" class="shadow-sm custom-input-left bg-light">
                </div>

                <div class="col-md-6 mb-2 d-sm-none">
                    <input type="text" name="industry" placeholder="Industry" class="shadow-sm custom-input-right bg-light">
                </div>

                <div class="col-md-12 mb-2 d-sm-none">
                    <textarea class="text-area shadow-sm bg-light" placeholder="Message" name="message" id="message" cols="30" rows="10"></textarea>
                </div>

            </div>

            <button type="submit" class="btn btn-info float-end me-3">
                Send
            </button>
        </form>
    </div>
@endsection