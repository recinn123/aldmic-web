@extends('layouts.app')

@section('title', ' - E-Voucher Reseller')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/service/evoucher.css') }}">
@endpush

@section('content')
    {{-- Banner E-Voucher --}}
    <div class="container pt-5 pb-5 justify-content-center align-items-center top-banner"
    style="background-image: url('{{ asset('images/product/evoucher.png') }}');">
        <div class="text-center mb-5">
            <h1 class="fw-bold top-banner-title">
                <span class="text-info">E-Voucher</span> reseller
            </h1>
    
            <h3 class="fw-bold mb-5 top-banner-subtitle">
                For <span class="text-info">Marketplace & Ecommerce</span> Platform, </span>
                <span style="display: block;">Make It Easy for Shopping Ever</span>
            </h3>

        </div>
    </div>
    
    <div class="container text-center pb-5">
        <img src="{{ asset('images/product/mouse_icon.png') }}" alt="">
    </div>
    {{-- End of Banner E-Voucher --}}

   {{-- Banner 2 --}}
    <div class="container-fluid">
        <div class="row ps-3 pe-3 justify-content-evenly bg-light pt-5 pb-5 shadow-sm">
            <div class="col-md-4 col-sm-12 text-center mb-3 img-banner-2">
                <img class="img-fluid" src="{{ asset('images/product/evoucher_banner_1.png') }}" alt="">
            </div>
            <div class="col-md-8 col-sm-12">
                <div class="row mb-3">
                    <h1 class="text-info banner-2-title">
                        Make It Easy with COOPN Digital E-Voucher, And
                        Feels The Special Benefit At All For Online
                        Shopping!
                    </h1>
                </div>
                <div class="row">
                    <p class=" banner-2-subtitle">
                        Serves us to specialize as an Electronic Voucher Reseller or Mobile Gift Card for
                        various products. Electronic Voucher Reseller can be used for digital platforms to
                        redeem in E-Commerce* for shopping as simple and seamless for business and
                        suitable as rewards incentive employee benefit. Make The Potential Opportunity and
                        Join Us To Be E-Voucher Reseller for Businesses and Consumers through various
                        channels ever.
                    </p>
                </div>
            </div>
        </div>
    </div>
    {{-- End of Banner 2 --}}

    {{-- Banner Advantages --}}
    <div class="container">
        <div class="row">
            <h1 class=" mt-5 mb-5 text-left fw-bold text-center banner-3-title">
                The Advantages of Aldmic COOPN E-Voucher Reseller Services
            </h1>
            

            <div class="d-none d-md-block">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-4 text-center mb-5">
                        <img class="mb-3" src="{{ asset('images/product/service_icon_1.png') }}" alt="">
                        <div style="margin-left: 5rem; margin-right:5rem;">
                            <p>
                                <span class="fw-bold">Wide Product Range</span>
                                Aldmic
                                COOPN offer the wide range of
                                vouchers from various E-
                                Commerce platform to diverse
                                customer preferences and needs.
                            </p>
                        </div>
                    </div>
        
                    <div class="col-md-4 text-center mb-5">
                        <img class="mb-3" src="{{ asset('images/product/service_icon_2.png') }}" alt="">
                        <div style="margin-left: 5rem; margin-right:5rem;">
                            <p>
                                <span class="fw-bold">Direct Distributions Vouchers</span>
                                are directly distributed with a multi
                                digital platform to reach all
                                customers quickly to respond to
                                market and customer demands.
                            </p>
                        </div>
                    </div>
        
                    <div class="col-md-4 text-center mb-5">
                        <img class="mb-3" src="{{ asset('images/product/service_icon_3.png') }}" alt="">
                        <div style="margin-left: 5rem; margin-right:5rem;">
                            <p>
                                <span class="fw-bold">High Scalability</span>
                                Adapt your
                                product offering based on needs
                                to expand product range,
                                customer base, and marketing
                                efforts to increase sales revenue.
                            </p>
                        </div>
                    </div>
                </div>
        
                <div class="row d-flex justify-content-center">
                    <div class="col-md-3 text-center mb-5">
                        <img class="mb-3" src="{{ asset('images/product/service_icon_4.png') }}" alt="">
                        <div style="margin-left: 3rem; margin-right:3rem;">
                            <p>
                                <span class="fw-bold">Flexible</span>
                                    Choose your best product
                                offerings quickly on market trends
                                and demands. You can add and
                                replace the voucher easily based
                                on time.
                            </p>
                        </div>
                    </div>
        
                    <div class="col-md-3 text-center mb-5">
                        <img class="mb-3" src="{{ asset('images/product/service_icon_5.png') }}" alt="">
                        <div style="margin-left: 3rem; margin-right:3rem;">
                            <p>
                                <span class="fw-bold">The Revenue Stream</span>
                                    Not only a
                                benefit and services, E-voucher
                                reseller can be provide as a
                                revenue stream to steady income
                                and help stabilize your business
                                process.
                            </p>
                        </div>
                    </div>
        
                    <div class="col-md-3 text-center mb-5">
                        <img class="mb-3" src="{{ asset('images/product/service_icon_6.png') }}" alt="">
                        <div style="margin-left: 3rem; margin-right:3rem;">
                            <p>
                                <span class="fw-bold">Data Insights</span>
                                    Not only revenue,
                                you can access data as part of
                                strategy to reach out performance
                                and better customer satisfaction.
                            </p>
                        </div>
                    </div>
                    
                    <div class="col-md-3 text-center mb-5">
                        <img class="mb-3" src="{{ asset('images/product/service_icon_7.png') }}" alt="">
                        <div style="margin-left: 3rem; margin-right:3rem;">
                            <p>
                                <span class="fw-bold">Wide Market</span>
                                    Reach the
                                customers and loyalty to up
                                the opportunities into the
                                market.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-md-none">
                <div class="row mb-3">
                    <div class="col-4">
                        <div class="text-center">
                            <img class="mb-3" src="{{ asset('images/product/service_icon_1.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="text-break gift-text">
                            <p class="advantages-text">
                                <span class="fw-bold">Wide Product Range</span>
                                Aldmic
                                COOPN offer the wide range of
                                vouchers from various E-
                                Commerce platform to diverse
                                customer preferences and needs.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-4">
                        <div class="text-center">
                            <img class="mb-3" src="{{ asset('images/product/service_icon_2.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="text-break gift-text">
                            <p class="advantages-text">
                                <span class="fw-bold">Direct Distributions Vouchers</span>
                                are directly distributed with a multi
                                digital platform to reach all
                                customers quickly to respond to
                                market and customer demands.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-4">
                        <div class="text-center">
                            <img class="mb-3" src="{{ asset('images/product/service_icon_3.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="text-break gift-text">
                            <p class="advantages-text">
                                <span class="fw-bold">High Scalability</span>
                                Adapt your
                                product offering based on needs
                                to expand product range,
                                customer base, and marketing
                                efforts to increase sales revenue.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-4">
                        <div class="text-center">
                            <img class="mb-3" src="{{ asset('images/product/service_icon_4.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="text-break gift-text">
                            <p class="advantages-text">
                                <span class="fw-bold">Flexible</span>
                                Choose your best product
                                offerings quickly on market trends
                                and demands. You can add and
                                replace the voucher easily based
                                on time.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-4">
                        <div class="text-center">
                            <img class="mb-3" src="{{ asset('images/product/service_icon_5.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="text-break gift-text">
                            <p class="advantages-text">
                                <span class="fw-bold">The Revenue Stream</span>
                                Not only a
                                benefit and services, E-voucher
                                reseller can be provide as a
                                revenue stream to steady income
                                and help stabilize your business
                                process.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-4">
                        <div class="text-center">
                            <img class="mb-3" src="{{ asset('images/product/service_icon_6.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="text-break gift-text">
                            <p class="advantages-text">
                                <span class="fw-bold">Data Insights</span>
                                Not only revenue,
                                you can access data as part of
                                strategy to reach out performance
                                and better customer satisfaction.
                            </p>
                        </div>
                    </div>
                </div>
            
                <div class="row mb-3">
                    <div class="col-4">
                        <div class="text-center">
                            <img class="mb-3" src="{{ asset('images/product/service_icon_7.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="text-break gift-text">
                            <p class="advantages-text">
                                <span class="fw-bold">Wide Market</span>
                                Reach the
                                customers and loyalty to up
                                the opportunities into the
                                market.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    {{-- End of Banner Advantages --}}

    {{-- Banner Marketplace & Ecommerce --}}
    <div class="container">
        <div class="row pt-3">
            <h1 class="mt-5 text-center fw-bold banner-4-title">
                Check our <span class="text-info">Marketplace & Ecommerce</span>
            </h1>
    
            <div class="ps-md-5 pe-md-5">
                <div class="d-none d-md-block row">
                    <div class="card-group text-center">
                        <div class="card">
                            <img  src="{{ asset('images/logo_paysgift.png') }}" class="card-img-top" alt="Logo PaysGift" data-banner-title="PaysGift" data-banner-description="PaysGift" data-banner-image="{{ asset('images/logo_paysgift.png') }}">
                        </div>
                        <div class="card">
                            <img  src="{{ asset('images/samsung.png') }}" class="card-img-top" alt="Logo Samsung" data-banner-title="Samsung" data-banner-description="Samsung" data-banner-image="{{ asset('images/samsung.png') }}">
                        </div>
                        <div class="card">
                            <img  src="{{ asset('images/LOGO-35.png') }}" class="card-img-top" alt="Logo Lazada" data-banner-title="Lazada" data-banner-description="Lazada" data-banner-image="{{ asset('images/LOGO-35.jpg') }}">
                        </div>
                        <div class="card">
                            <img  src="{{ asset('images/LOGO-36.png') }}" class="card-img-top" alt="Logo OPPO" data-banner-title="OPPO" data-banner-description="OPPO" data-banner-image="{{ asset('images/LOGO-36.jpg') }}">
                        </div>
                        <div class="card">
                            <img  src="{{ asset('images/LOGO-32.png') }}" class="card-img-top" alt="Logo DANA" data-banner-title="DANA" data-banner-description="DANA" data-banner-image="{{ asset('images/LOGO-32.png') }}">
                        </div>
                        <div class="card">
                            <img  src="{{ asset('images/telkomsel.png') }}" class="card-img-top" alt="Logo Telkomsel" data-banner-title="Telkomsel" data-banner-description="Telkomsel" data-banner-image="{{ asset('images/telkomsel.png') }}">
                        </div>      
                    </div>
                </div>
                <div class="d-md-none row">
                    <div class="col-4 col-md-12 card-group text-center mb-3">
                        <div class="card">
                            <img  src="{{ asset('images/logo_paysgift.png') }}" class="card-img-top" alt="Logo PaysGift" data-banner-title="PaysGift" data-banner-description="PaysGift" data-banner-image="{{ asset('images/logo_paysgift.png') }}">
                        </div>
                        <div class="card">
                            <img  src="{{ asset('images/samsung.png') }}" class="card-img-top" alt="Logo Samsung" data-banner-title="Samsung" data-banner-description="Samsung" data-banner-image="{{ asset('images/samsung.png') }}">
                        </div>
                    </div>
                    <div class="col-4 col-md-12 card-group text-center">
                        <div class="card">
                            <img  src="{{ asset('images/LOGO-35.png') }}" class="card-img-top" alt="Logo Lazada" data-banner-title="Lazada" data-banner-description="Lazada" data-banner-image="{{ asset('images/LOGO-35.jpg') }}">
                        </div>  
                        <div class="card">
                            <img  src="{{ asset('images/LOGO-36.png') }}" class="card-img-top" alt="Logo OPPO" data-banner-title="OPPO" data-banner-description="OPPO" data-banner-image="{{ asset('images/LOGO-36.jpg') }}">
                        </div>
                    </div>
                    <div class="col-4 col-md-12 card-group text-center">
                        <div class="card">
                            <img  src="{{ asset('images/LOGO-32.png') }}" class="card-img-top" alt="Logo DANA" data-banner-title="DANA" data-banner-description="DANA" data-banner-image="{{ asset('images/LOGO-32.png') }}">
                        </div>
                        <div class="card">
                            <img  src="{{ asset('images/telkomsel.png') }}" class="card-img-top" alt="Logo Telkomsel" data-banner-title="Telkomsel" data-banner-description="Telkomsel" data-banner-image="{{ asset('images/telkomsel.png') }}">
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End of Banner Marketplace & Ecommerce --}}

    {{-- Banner Paysgift --}}
    <div class="container-fluid">
        <div class="row ps-5 pe-5 justify-content-around bg-light pt-5 pb-5 shadow-sm">
            <div class="col-md-4 pt-5 col-sm-12 banner-5-image">
                <div class="image-container">
                    <img class="mb-3 img-fluid" class="text-center" style="text-align: center" src="{{ asset('images/product/PG.png') }}" alt="" width="100%">
                </div>
              </div>
            <div class="col-md-8 col-sm-12 pt-5">
                <div class="row mb-3 align-items-left banner-5-logo">
                    <h1>
                        <img class="banner-logo-paysgift" src="{{ asset('images/logo_paysgift.png') }}" alt="" width="100%" height="100px">
                    </h1>
                </div>
                <div class="row mb-3">
                    <h1 class="banner-title" style="font-size: 3rem">
                        <!-- Title will be dynamically updated -->
                    </h1>
                </div>
                <div class="row">
                    <span class="banner-description" style="text-align: justify">
                        <!-- Description will be dynamically updated -->
                    </span>
                </div>
            </div>
        </div>
    </div>
    {{-- End of Banner Paysgift --}}

@endsection

@push('script')
<script>
    $(document).ready(function () {

    // Function to update Paysgift banner content based on the clicked card
    function updateBannerContent(cardImage, title, description) {

        $('.banner-logo-paysgift').attr('src', cardImage);
        $('.banner-title').text(title);
        $('.banner-description').text(description);
    }

      // Click event handling for each card
        $('.card').click(function () {
            var cardImage = $(this).find('img').attr('src');
            var title = $(this).find('img').data('banner-title');
            var lorem = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam, debitis natus temporibus minus rem laudantium vitae tempore consequuntur laborum excepturi quo perferendis voluptates, mollitia quos in doloremque unde dicta facilis cum voluptatum repellendus eligendi repellat maiores soluta? Eaque nisi omnis tenetur. Vero iste libero consectetur eligendi quam aperiam, aspernatur architecto.';
            var description = lorem + $(this).find('img').data('banner-description');

            // Update banner content
            updateBannerContent(cardImage, title, description);
        });
        
        $('.card').eq(0).click();
    });
</script>
@endpush
