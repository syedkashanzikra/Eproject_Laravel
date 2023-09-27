  @extends('layouts.front-end.header-footer')
  @section('body')



    <!-- service section -->

    <section class="service_section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <div class="box ">
              <div class="img-box">
                <img src="images/feature-1.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Fast Testing Service
                </h5>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="box ">
              <div class="img-box">
                <img src="images/feature-3.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Low cost Tests
                </h5>
                </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="box ">
              <div class="img-box">
                <img src="images/feature-3.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Best Testing Machines
                </h5>
                </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="box ">
              <div class="img-box">
                <img src="images/feature-4.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  24x7 Customer support
                </h5>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end service section -->


    <!-- about section -->

    <section class="about_section layout_padding">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="img_container">
              <div class="img-box b2">
              <img src="images/details.jpg" alt="">
              </div>
              <div class="img-box b2">
                <img src="images/details-2.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="detail-box about-box">
              <h2>
                About Our Lab
              </h2>
              <p>
                Our lab is a dynamic and innovative research 
                environment dedicated to pushing the boundaries
                 of scientific discovery. Comprising a diverse 
                 team of talented scientists, researchers, and 
                 technicians, our lab is at the forefront of 
                 cutting-edge research in fields ranging from 
                 biotechnology and materials science to artificial 
                 intelligence and environmental conservation. 
                 Equipped with state-of-the-art equipment and
                  facilities, we are committed to exploring new 
                  frontiers, tackling complex challenges, and 
                  developing groundbreaking solutions that have 
                  the potential to transform industries and improve
                   the world. Collaboration, curiosity, and a relentless
                    pursuit of knowledge are the driving forces behind
                     our lab's success, as we work together to unravel 
                     the mysteries of the universe and pave the way for 
                     a brighter and more innovative future
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end about section -->


<!-- product section -->
<!-- product section -->
<div class="container">
  <div class="product_heading">
    <div class="bg-primary text-white p-3 d-flex justify-content-center align-items-center rounded mb-3" >
      <h1 class="test-center no-cursor-change">Tests</h1>
    </div>
  </div>
  <div>
    @guest
    <div class="bg-danger text-white p-3 d-flex justify-content-center align-items-center rounded mb-3" >
      <h6 class="error no-cursor-change">Login to see Products</h6>
    </div>
    @else
      @php
        $pendingProducts = [];
        $approvedProducts = [];
        $rejectedProducts = [];
      @endphp

      @foreach ($products as $product)
        @if ($product->status === 'approved')
          @php
            $approvedProducts[] = $product;
          @endphp
        @elseif ($product->status === 'rejected')
          @php
            $rejectedProducts[] = $product;
          @endphp
        @else
          @php
            $pendingProducts[] = $product;
          @endphp
        @endif
      @endforeach
      <hr class="my-4">
      <div class="bg-info p-2 text-white d-flex justify-content-center align-items-center rounded mb-3" style="width: 2in;">
        <h2>Pendings</h2>
      </div>
      <!-- Display Pending Products -->
      <div class="row">
        @php $count = 0; @endphp
        @foreach ($pendingProducts as $product)
          @if ($count < 3)
            <div class="col-md-6 col-lg-4"> <!-- Adjust the number of columns as needed -->
              <div class="card product-card">
                <img class="card-img-top" src="{{ asset('productsImages/' . $product->product_image) }}" alt="{{ $product->product_name }}">
                <div class="card-body">
                  <h5 class="card-title">{{ $product->product_name }}</h5>
                  <p class="card-text">{{ $product->product_code }}</p>
                </div>
              </div>
            </div>
            @php $count++; @endphp
          @endif
        @endforeach
      </div>
      <div class="text-center">
        <a href="pending" class="btn btn-success">
          Check All Products
        </a>
      </div>
      <hr class="my-4">
      <div class="bg-success p-2 text-white d-flex justify-content-center align-items-center rounded mb-3" style="width: 2in;">
        <h2>Approved</h2>
      </div>
      <!-- Display Approved Products -->
      <div class="row">
        @php $count = 0; @endphp
        @foreach ($approvedProducts as $product)
          @if ($count < 3)
            <div class="col-md-6 col-lg-4"> <!-- Adjust the number of columns as needed -->
              <div class="card product-card">
                <img class="card-img-top" src="{{ asset('productsImages/' . $product->product_image) }}" alt="{{ $product->product_name }}">
                <div class="card-body">
                  <h5 class="card-title">{{ $product->product_name }}</h5>
                  <p class="card-text">{{ $product->product_code }}</p>
                </div>
              </div>
            </div>
            @php $count++; @endphp
          @endif
        @endforeach
      </div>
      <hr class="my-4">
      <div class="bg-danger  text-white p-2 d-flex justify-content-center align-items-center rounded mb-3" style="width: 2in;">
        <h2>Rejected</h2>
      </div>
      
      
      

      <!-- Display Rejected Products -->
      <div class="row">
        @php $count = 0; @endphp
        @foreach ($rejectedProducts as $product)
          @if ($count < 3)
            <div class="col-md-6 col-lg-4"> <!-- Adjust the number of columns as needed -->
              <div class="card product-card">
                <img class="card-img-top" src="{{ asset('productsImages/' . $product->product_image) }}" alt="{{ $product->product_name }}">
                <div class="card-body">
                  <h5 class="card-title">{{ $product->product_name }}</h5>
                  <p class="card-text">{{ $product->product_code }}</p>
                </div>
              </div>
            </div>
            @php $count++; @endphp
          @endif
        @endforeach
      </div>

      <!-- Add your additional content here -->
      <!-- For example, you can add more rows or content here -->
      <!-- You can also nest additional elements or rows as needed -->
      
    @endguest
  </div>
</div>
 </section>
  <hr>    
  
  @endsection