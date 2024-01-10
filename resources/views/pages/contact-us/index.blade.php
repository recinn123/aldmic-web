@extends('layouts.app')

@section('title', ' - Contact us')

@push('css')
    <style>
        .custom-input-left,
        .custom-input-right,
        .text-area {
            width: 100%;
            min-height: 40px;
            border: none;
            border-radius: 5px;
            outline: none;
            margin-bottom: 10px;
        }

        .text-area {
            margin-left: 0;
            width: 100%;
        }
    </style>
@endpush

@section('content')
    <div class="container pt-5 pb-5"
        style="
            background-image: url('{{ asset('images/contact-us/background.png') }}');
            background-size: auto 200px;
            background-position: 90% 5%;
            background-repeat: no-repeat;">
        <div class="text-center mb-5 text-container">
            <h1 class="fw-bold" style="font-size: 5rem">
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
                <div class="col-md-12 bg-light shadow-sm pt-1 pb-1 mb-4" style="width: 100%">
                    <span class="fs-5">
                        How can I help you
                    </span>
                </div>

                <div class="col-md-6 mb-4">
                    <input type="text" placeholder="Name" class="shadow-sm custom-input-left bg-light">
                </div>

                <div class="col-md-6 mb-4">
                    <input type="text" placeholder="Company Name" class="shadow-sm custom-input-right bg-light">
                </div>

                <div class="col-md-6 mb-4">
                    <input type="email" placeholder="Email" class="shadow-sm custom-input-left bg-light">
                </div>

                <div class="col-md-6 mb-4">
                    <input type="text" placeholder="Job Title" class="shadow-sm custom-input-right bg-light">
                </div>

                <div class="col-md-6 mb-4">
                    <input type="text" placeholder="Phone Number" class="shadow-sm custom-input-left bg-light">
                </div>

                <div class="col-md-6 mb-4">
                    <input type="text" placeholder="Industry" class="shadow-sm custom-input-right bg-light">
                </div>

                <div class="col-md-12 mb-4">
                    <textarea class="text-area shadow-sm bg-light" placeholder="Message" name="" id="" cols="30" rows="10"></textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-info float-end me-3">
                Send
            </button>
        </form>
    </div>
@endsection