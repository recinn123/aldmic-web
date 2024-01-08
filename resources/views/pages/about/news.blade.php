@extends('layouts.app')

@section('title', ' - News')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/about/news.css') }}">
@endpush

@section('content')
    <div class="container pt-5 pb-5">
        <div class="text-center mb-5 text-container">
            <h3  class="fw-bolder mb-5 line-heading" style="font-size: 3rem">
                News
            </h3>
        </div>

        <div class="row">
            {{-- 1st Row --}}
            <div class="col-md-4 mb-4">
                <div class="card news-card">
                    <img src="https://placehold.co/500x500" class="card-img-top" alt="News Image 1">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Lorem <span class="text-info">Ipsum</span></h5>
                        <p class="card-text" style="text-align: justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, hic corporis vero enim commodi consequuntur voluptatibus. Harum, obcaecati cum? Amet animi reiciendis nihil esse, saepe dignissimos perspiciatis praesentium sit sed quibusdam facere, fuga tenetur dolore, eius sapiente recusandae! Illo, necessitatibus. Totam hic nemo itaque ratione possimus fugit optio quam debitis?
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card news-card">
                    <img src="https://placehold.co/500x500" class="card-img-top" alt="News Image 1">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Lorem <span class="text-info">Ipsum</span></h5>
                        <p class="card-text" style="text-align: justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, hic corporis vero enim commodi consequuntur voluptatibus. Harum, obcaecati cum? Amet animi reiciendis nihil esse, saepe dignissimos perspiciatis praesentium sit sed quibusdam facere, fuga tenetur dolore, eius sapiente recusandae! Illo, necessitatibus. Totam hic nemo itaque ratione possimus fugit optio quam debitis?
                        </p>
                    </div>
                </div>
            </div><div class="col-md-4 mb-4">
                <div class="card news-card">
                    <img src="https://placehold.co/500x500" class="card-img-top" alt="News Image 1">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Lorem <span class="text-info">Ipsum</span></h5>
                        <p class="card-text" style="text-align: justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, hic corporis vero enim commodi consequuntur voluptatibus. Harum, obcaecati cum? Amet animi reiciendis nihil esse, saepe dignissimos perspiciatis praesentium sit sed quibusdam facere, fuga tenetur dolore, eius sapiente recusandae! Illo, necessitatibus. Totam hic nemo itaque ratione possimus fugit optio quam debitis?
                        </p>
                    </div>
                </div>
            </div>
            {{-- End of 1st Row --}}

            
            {{-- 2nd Row --}}
            <div class="col-md-4 mb-4">
                <div class="card news-card">
                    <img src="https://placehold.co/500x500" class="card-img-top" alt="News Image 1">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Lorem <span class="text-info">Ipsum</span></h5>
                        <p class="card-text" style="text-align: justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, hic corporis vero enim commodi consequuntur voluptatibus. Harum, obcaecati cum? Amet animi reiciendis nihil esse, saepe dignissimos perspiciatis praesentium sit sed quibusdam facere, fuga tenetur dolore, eius sapiente recusandae! Illo, necessitatibus. Totam hic nemo itaque ratione possimus fugit optio quam debitis?
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card news-card">
                    <img src="https://placehold.co/500x500" class="card-img-top" alt="News Image 1">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Lorem <span class="text-info">Ipsum</span></h5>
                        <p class="card-text" style="text-align: justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, hic corporis vero enim commodi consequuntur voluptatibus. Harum, obcaecati cum? Amet animi reiciendis nihil esse, saepe dignissimos perspiciatis praesentium sit sed quibusdam facere, fuga tenetur dolore, eius sapiente recusandae! Illo, necessitatibus. Totam hic nemo itaque ratione possimus fugit optio quam debitis?
                        </p>
                    </div>
                </div>
            </div><div class="col-md-4 mb-4">
                <div class="card news-card">
                    <img src="https://placehold.co/500x500" class="card-img-top" alt="News Image 1">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Lorem <span class="text-info">Ipsum</span></h5>
                        <p class="card-text" style="text-align: justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, hic corporis vero enim commodi consequuntur voluptatibus. Harum, obcaecati cum? Amet animi reiciendis nihil esse, saepe dignissimos perspiciatis praesentium sit sed quibusdam facere, fuga tenetur dolore, eius sapiente recusandae! Illo, necessitatibus. Totam hic nemo itaque ratione possimus fugit optio quam debitis?
                        </p>
                    </div>
                </div>
            </div>
            {{-- End of 2nd Row --}}
        </div>
    </div>
@endsection