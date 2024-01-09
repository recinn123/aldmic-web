@extends('layouts.app')

@section('title', ' - Career')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/about/career.css') }}">
@endpush

@section('content')
    <div class="container pt-5 pb-5">
        <div class="text-center mb-3 text-container">
            <h3  class="fw-bolder line-heading" style="font-size: 3rem">
                Career
            </h3>
        </div>

        {{-- 1st Row --}}
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="news-container">
                    <img src="https://placehold.co/500x500" class="card-img-top" alt="News Image 1">
                    <div class="news-body">
                        <h5 class="fw-bold mt-3 mb-3 fs-4">Lorem <span class="text-info">Ipsum</span></h5>
                        <p class="" style="text-align: justify;font-size: 12px">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, hic corporis vero enim commodi consequuntur voluptatibus. Harum, obcaecati cum? Amet animi reiciendis nihil esse, saepe dignissimos perspiciatis praesentium sit sed quibusdam facere, fuga tenetur dolore, eius sapiente recusandae! Illo, necessitatibus. Totam hic nemo itaque ratione possimus fugit optio quam debitis?
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="news-container">
                    <img src="https://placehold.co/500x500" class="card-img-top" alt="News Image 1">
                    <div class="news-body">
                        <h5 class="fw-bold mt-3 mb-3 fs-4">Lorem <span class="text-info">Ipsum</span></h5>
                        <p class="" style="text-align: justify;font-size: 12px">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, hic corporis vero enim commodi consequuntur voluptatibus. Harum, obcaecati cum? Amet animi reiciendis nihil esse, saepe dignissimos perspiciatis praesentium sit sed quibusdam facere, fuga tenetur dolore, eius sapiente recusandae! Illo, necessitatibus. Totam hic nemo itaque ratione possimus fugit optio quam debitis?
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="news-container">
                    <img src="https://placehold.co/500x500" class="card-img-top" alt="News Image 1">
                    <div class="news-body">
                        <h5 class="fw-bold mt-3 mb-3 fs-4">Lorem <span class="text-info">Ipsum</span></h5>
                        <p class="" style="text-align: justify;font-size: 12px">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, hic corporis vero enim commodi consequuntur voluptatibus. Harum, obcaecati cum? Amet animi reiciendis nihil esse, saepe dignissimos perspiciatis praesentium sit sed quibusdam facere, fuga tenetur dolore, eius sapiente recusandae! Illo, necessitatibus. Totam hic nemo itaque ratione possimus fugit optio quam debitis?
                        </p>
                    </div>
                </div>
            </div>
        </div>
        {{-- End of 1st Row --}}

        {{-- 2nd Row --}}
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="news-container">
                    <img src="https://placehold.co/500x500" class="card-img-top" alt="News Image 1">
                    <div class="news-body">
                        <h5 class="fw-bold mt-3 mb-3 fs-4">Lorem <span class="text-info">Ipsum</span></h5>
                        <p class="" style="text-align: justify;font-size: 12px">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, hic corporis vero enim commodi consequuntur voluptatibus. Harum, obcaecati cum? Amet animi reiciendis nihil esse, saepe dignissimos perspiciatis praesentium sit sed quibusdam facere, fuga tenetur dolore, eius sapiente recusandae! Illo, necessitatibus. Totam hic nemo itaque ratione possimus fugit optio quam debitis?
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="news-container">
                    <img src="https://placehold.co/500x500" class="card-img-top" alt="News Image 1">
                    <div class="news-body">
                        <h5 class="fw-bold mt-3 mb-3 fs-4">Lorem <span class="text-info">Ipsum</span></h5>
                        <p class="" style="text-align: justify;font-size: 12px">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, hic corporis vero enim commodi consequuntur voluptatibus. Harum, obcaecati cum? Amet animi reiciendis nihil esse, saepe dignissimos perspiciatis praesentium sit sed quibusdam facere, fuga tenetur dolore, eius sapiente recusandae! Illo, necessitatibus. Totam hic nemo itaque ratione possimus fugit optio quam debitis?
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="news-container">
                    <img src="https://placehold.co/500x500" class="card-img-top" alt="News Image 1">
                    <div class="news-body">
                        <h5 class="fw-bold mt-3 mb-3 fs-4">Lorem <span class="text-info">Ipsum</span></h5>
                        <p class="" style="text-align: justify;font-size: 12px">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, hic corporis vero enim commodi consequuntur voluptatibus. Harum, obcaecati cum? Amet animi reiciendis nihil esse, saepe dignissimos perspiciatis praesentium sit sed quibusdam facere, fuga tenetur dolore, eius sapiente recusandae! Illo, necessitatibus. Totam hic nemo itaque ratione possimus fugit optio quam debitis?
                        </p>
                    </div>
                </div>
            </div>
        </div>
        {{-- End of 2nd Row --}}
    </div>
@endsection