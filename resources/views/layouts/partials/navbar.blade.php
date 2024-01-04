<nav class="navbar navbar-expand-lg">
  <div class="container-fluid ps-5 pe-5">
    <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}" alt="" style="width: auto; height:50px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link me-5  {{ Route::is('about.index') ? 'active fw-bold' : '' }}" href="{{ route('about.index') }}">About us</a>
        </li>
        <li class="nav-item me-5">
          <div class="dropdown text-center">
            <a href="#" class="nav-link dropdown-toggle btn-dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Product
            </a>
            <ul class="dropdown-menu custom-center align-items-center justify-content-center">
              <li style="margin-top: -8px; margin-bottom: -8px;">
                <a class="dropdown-item text-info" href="{{ route('service.e-voucher-reseller') }}">
                  <div style="display: flex; align-items: center;">
                      <img src="{{ asset('images/navbar/evoucher.png') }}" width="auto" height="50px" class="pe-3">
                      <div style="display: flex; flex-direction: column;">
                          <span style="font-size: 16px" class="fw-bolder mt-3">E-Voucher Reseller</span>
                          <p style="font-size: 10px;">
                              In marketplaces/e-commerce platforms<br>such as Blibli, Lazada, Shopee, etc.
                          </p>
                      </div>
                  </div>
                </a>
              </li>
              
              <hr class="dropdown-divider">
          
              <li style="margin-top: -8px; margin-bottom: -8px;">
                <a class="dropdown-item text-info" href="{{ route('service.loyalty-program') }}">
                  <div style="display: flex; align-items: center;">
                      <img src="{{ asset('images/navbar/loyalty.png') }}" width="auto" height="50px" class="ps-3 pe-4">
                      <div style="display: flex; flex-direction: column;">
                        <span style="font-size: 16px" class="fw-bolder mt-3">Loyalty Program</span>
                        <p style="font-size: 10px;">
                          As a redemption partner for other<br>companies Loyalty Program
                        </p>
                      </div>
                  </div>
                </a>
              </li>
                            
              <hr class="dropdown-divider">
          
              <li style="margin-top: -8px; margin-bottom: -8px;">
                <a class="dropdown-item text-info" href="{{ route('service.mobile-gifting') }}">
                  <div style="display: flex; align-items: center;">
                      <img src="{{ asset('images/navbar/mobile.png') }}" width="auto" height="50px" class="ps-4 pe-5">
                      <div style="display: flex; flex-direction: column;">
                        <span style="font-size: 16px" class="fw-bolder mt-3">Mobile Gifting</span>
                        <p style="font-size: 10px;">
                          Send Vouchers as a gift electronically<br>through Whatsapp
                        </p>
                      </div>
                  </div>
                </a>
              </li>

            </ul>
          </div>
        </li>
        <li class="nav-item d-none d-lg-block" style="border-right: 2px solid">
          <a class="nav-link me-3 {{ Route::is('service.index') ? 'active fw-bold' : '' }}" href="{{ route('service.index') }}">Study Case</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-5 ms-3 {{ Route::is('contact-us.index') ? 'active fw-bold' : '' }}" href="{{ route('contact-us.index') }}">Contact us !</a>
        </li>
      </ul>
    </div>
  </div>
</nav>  