@extends('layouts.app')

@push('css')
    <style>
        .custom-input-left {
            width: 100%;
            min-height: 40px;
            border: none;
            border-radius: 5px;
            outline: none;
        }

        .custom-input-right{
            width: 90%;
            min-height: 40px;
            border: none;
            border-radius: 5px;
            outline: none;
        }

        .text-area{
            width: 93%;
            min-height: 40px;
            margin-left: 35px;
            border: none;
            border-radius: 5px;
            outline: none;
            resize: none; /* Prevent resizing */
        }
        
    </style>
@endpush

@section('content')
    <div class="container pt-5 pb-5">
        <div class="text-center mb-5 text-container">
            <h1 class="fw-bold" style="font-size: 5rem">
                <span class="text-info">Apply Now</span> and Join Us
            </h1>

            <h2 class=" mb-5 line-heading" style="white-space: pre-line">
                Create <span class="text-info">Opportunities and
                 Transformation</span> with COOPN Digital
            </h2>
        </div>

        <form action="" method="post">
            <div class="row mb-4">
                <div class="col-md-12 bg-light shadow-sm pt-1 pb-1 mb-4 ps-5 ms-5" style="width: 91%">
                    <span class="ms-5 fs-5">
                        How can i help you
                    </span>
                </div>
    
                <div class="col-md-12 mb-4">
                    <div class="row">
                        <div class="col-md-6 input-left ps-5    ">
                            <input type="text" placeholder="Name" class="shadow-sm custom-input-left bg-light ps-5">
                        </div>
                    
                        <div class="col-md-6 input-left ps-5">
                            <input type="text" placeholder="Company Name" class="shadow-sm custom-input-right bg-light ps-5">
                        </div>
                    </div>
                </div>
    
                <div class="col-md-12 mb-4">
                    <div class="row">
                        <div class="col-md-6 input-left ps-5">
                            <input type="email" placeholder="Email" class="shadow-sm custom-input-left bg-light ps-5">
                        </div>
                    
                        <div class="col-md-6 input-left ps-5">
                            <input type="text" placeholder="Job Title" class="shadow-sm custom-input-right bg-light ps-5">
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mb-4">
                    <div class="row">
                        <div class="col-md-6 input-left ps-5">
                            <input type="text" placeholder="Phone Number" class="shadow-sm custom-input-left bg-light ps-5">
                        </div>
                    
                        <div class="col-md-6 input-left ps-5">
                            <input type="text" placeholder="Industry" class="shadow-sm custom-input-right bg-light ps-5">
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <textarea class="text-area shadow-sm bg-light ps-5" placeholder="Message" name="" id="" cols="30" rows="10"></textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-info float-end me-5 ps-5 pe-5 text-white" style="padding-right: 200px">
                Send
            </button>
        </form>
    </div>
@endsection