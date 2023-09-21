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
              <div class="img-box b1">
              <img src="images/details-2.jpg" alt="">
              </div>
              <div class="img-box b2">
                <img src="images/details.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="detail-box about-box">
              <h2>
                About Our Lab
              </h2>
              <p>
                There are many variations of passages of Lorem Ipsum
                There are many variations of
                passages of Lorem Ipsum
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end about section -->


<!-- product section -->
<div class="container">
  <div class="product_heading">
    <h2>Tests</h2>
  </div>
  <div>
    @guest
      <h6 class="error">Login to see Products</h6>
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
    <h1>Pendings</h1>
      <!-- Display Pending Products -->
      <div class="row">
        @foreach ($pendingProducts as $product)
          <div class="col-md-6 col-lg-3">
            <div class="card product-card">
              <img class="card-img-top" src="{{ asset('productsImages/' . $product->product_image) }}" alt="{{ $product->product_name }}">
              <div class="card-body">
                <h5 class="card-title">{{ $product->product_name }}</h5>
                <p class="card-text">{{ $product->product_code }}</p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    <h1>Approved</h1>
      <!-- Display Approved Products -->
      <div class="row">
        @foreach ($approvedProducts as $product)
          <div class="col-md-6 col-lg-3">
            <div class="card product-card">
              <img class="card-img-top" src="{{ asset('productsImages/' . $product->product_image) }}" alt="{{ $product->product_name }}">
              <div class="card-body">
                <h5 class="card-title">{{ $product->product_name }}</h5>
                <p class="card-text">{{ $product->product_code }}</p>
              </div>
            </div>
          </div>
        @endforeach
      </div>

      <!-- Display Rejected Products -->
      <h1>rejected</h1>
      <div class="row">
        @foreach ($rejectedProducts as $product)
          <div class="col-md-6 col-lg-3">
            <div class="card product-card">
              <img class="card-img-top" src="{{ asset('productsImages/' . $product->product_image) }}" alt="{{ $product->product_name }}">
              <div class="card-body">
                <h5 class="card-title">{{ $product->product_name }}</h5>
                <p class="card-text">{{ $product->product_code }}</p>
              </div>
            </div>
          </div>
        @endforeach
      </div>

      <!-- Add your additional content here -->
      <!-- For example, you can add more rows or content here -->
      <!-- You can also nest additional elements or rows as needed -->
      
    @endguest
  </div>
</div>




    <!-- client section -->
    <section class="client_section layout_padding-bottom">
      <div class="container">
        <div class="heading_container heading_center">
          <h2>
            Testimonial
          </h2>
        </div>
      </div>
      <div id="customCarousel2" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-md-10 mx-auto">
                  <div class="box">
                    <div class="img-box">
                      <img src="images/client.jpg" alt="">
                    </div>
                    <div class="detail-box">
                      <div class="client_info">
                        <div class="client_name">
                          <h5>
                            Morojink
                          </h5>
                          <h6>
                            Customer
                          </h6>
                        </div>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                      </div>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum
                        dolore eu fugia
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-md-10 mx-auto">
                  <div class="box">
                    <div class="img-box">
                      <img src="images/client.jpg" alt="">
                    </div>
                    <div class="detail-box">
                      <div class="client_info">
                        <div class="client_name">
                          <h5>
                            Morojink
                          </h5>
                          <h6>
                            Customer
                          </h6>
                        </div>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                      </div>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum
                        dolore eu fugia
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-md-10 mx-auto">
                  <div class="box">
                    <div class="img-box">
                      <img src="images/client.jpg" alt="">
                    </div>
                    <div class="detail-box">
                      <div class="client_info">
                        <div class="client_name">
                          <h5>
                            Morojink
                          </h5>
                          <h6>
                            Customer
                          </h6>
                        </div>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                      </div>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum
                        dolore eu fugia
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel2" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel2" data-slide-to="1"></li>
          <li data-target="#customCarousel2" data-slide-to="2"></li>
        </ol>
      </div>
    </section>
    <!-- end client section -->



  </section>
  <hr>    
  <script>
    // Get all elements with class "open-modal"
    var openModalLinks = document.querySelectorAll(".open-modal");

  // Add click event listener to each link
  openModalLinks.forEach(function(link) {
    link.addEventListener("click", function() {
      // Get the modal ID from the data-modal-id attribute
      var modalId = this.getAttribute("data-modal-id");
      var modal = document.getElementById(modalId);

      // Open the modal
      modal.style.display = "block";
    });
  });

  // Get all elements with class "close"
  var closeButtons = document.querySelectorAll(".close");

  // Add click event listener to each close button
  closeButtons.forEach(function(button) {
    button.addEventListener("click", function() {
      // Get the parent modal
      var modal = this.closest(".modal");

      // Close the modal
      modal.style.display = "none";
    });
  });

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target.classList.contains("modal")) {
      event.target.style.display = "none";
    }
  };

  </script>
  @endsection