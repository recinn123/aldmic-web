@extends('layouts.app')

@section('title', ' - FAQ')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/about/faq.css') }}">    
@endpush

@section('content')
<div class="container pt-5 pb-5">
    <div class="text-center mb-3 text-container">
        <h3  class="fw-bold line-heading" style="font-size: 3rem">
            FAQ
        </h3>
    </div>

    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item bg-light mb-3 shadow-sm">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed  bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              <span>Lorem<span class="text-info"> Ipsum</span></span>
            </button>
          </h2>
          <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio, expedita voluptates earum sequi magnam, laboriosam rem quae veritatis blanditiis sed ex quaerat, nobis minima. Ex praesentium magnam deleniti eaque amet reiciendis aliquid, magni distinctio, recusandae perferendis ipsa hic eius impedit nostrum. Incidunt modi aperiam eius autem. Consectetur ducimus perferendis exercitationem.
            </div>
          </div>
        </div>
        <div class="accordion-item bg-light mb-3 shadow-sm">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed  bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
              <span>Lorem<span class="text-info"> Ipsum</span></span>
            </button>
          </h2>
          <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio, expedita voluptates earum sequi magnam, laboriosam rem quae veritatis blanditiis sed ex quaerat, nobis minima. Ex praesentium magnam deleniti eaque amet reiciendis aliquid, magni distinctio, recusandae perferendis ipsa hic eius impedit nostrum. Incidunt modi aperiam eius autem. Consectetur ducimus perferendis exercitationem.  
            </div>
          </div>
        </div>
        <div class="accordion-item bg-light mb-3 shadow-sm">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
              <span>Lorem<span class="text-info"> Ipsum</span></span>
            </button>
          </h2>
          <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio, expedita voluptates earum sequi magnam, laboriosam rem quae veritatis blanditiis sed ex quaerat, nobis minima. Ex praesentium magnam deleniti eaque amet reiciendis aliquid, magni distinctio, recusandae perferendis ipsa hic eius impedit nostrum. Incidunt modi aperiam eius autem. Consectetur ducimus perferendis exercitationem.
            </div>
          </div>
        </div>
        <div class="accordion-item bg-light mb-3 shadow-sm">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                <span>Lorem<span class="text-info"> Ipsum</span></span>
              </button>
            </h2>
            <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio, expedita voluptates earum sequi magnam, laboriosam rem quae veritatis blanditiis sed ex quaerat, nobis minima. Ex praesentium magnam deleniti eaque amet reiciendis aliquid, magni distinctio, recusandae perferendis ipsa hic eius impedit nostrum. Incidunt modi aperiam eius autem. Consectetur ducimus perferendis exercitationem.
              </div>
            </div>
        </div>
        <div class="accordion-item bg-light mb-3 shadow-sm">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                <span>Lorem<span class="text-info"> Ipsum</span></span>
              </button>
            </h2>
            <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio, expedita voluptates earum sequi magnam, laboriosam rem quae veritatis blanditiis sed ex quaerat, nobis minima. Ex praesentium magnam deleniti eaque amet reiciendis aliquid, magni distinctio, recusandae perferendis ipsa hic eius impedit nostrum. Incidunt modi aperiam eius autem. Consectetur ducimus perferendis exercitationem.
              </div>
            </div>
        </div>
    </div>
</div>
@endsection