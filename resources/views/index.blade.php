@extends('layouts.front-end.header-footer')
@section('body')
<style>
  /* Modal styles */
  .modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.7);
  }

  .modal-content {
    background-color: #fff;
    margin: 10% auto;
    padding: 20px;
    max-width: 400px;
    box-shadow: 0px 0px 10px rgba(0,0,0,0.5);
    animation-name: modalFade;
    animation-duration: 0.3s;
  }

  @keyframes modalFade {
    from {
      opacity: 0;
    }
    to {
      opacity: 1;
    }
  }

  /* Close button styles */
  .close {
    float: right;
    cursor: pointer;
  }

  /* Add some styles to the rest of the modal content */
  .modal-header {
    text-align: center;
  }

  .modal-body {
    text-align: center;
  }

  .star_container {
    text-align: center;
  }

  /* Styling for the "Test" link */
  .open-modal {
    text-decoration: none;
    color: #007BFF;
    cursor: pointer;
  }

  .open-modal:hover {
    text-decoration: underline;
  }
</style>


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

  <section class="product_section ">
    <div class="container">
      <div class="product_heading">
        <h2>
          Approved Tests
        </h2>
      </div>
      <div class="product_container">
        <div class="box">
          <div class="box-content">
            <div class="img-box">
              <img src="images/u_10140687.jpg" alt="">
            </div>
            <div class="detail-box">
              <div class="text">
                <h6>
                  Washing Machine
                </h6>
              </div>
              <div class="like">
                <h6>
                  Rating
                </h6>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="btn-box">
            <a href="#" class="open-modal"  data-modal-id="myModal1">
              Details
            </a>
          </div>
        </div>
        
        <!-- Modal -->
        <div id="myModal1" class="modal">
          <div class="modal-content">
            <span class="close">&times;</span>
            <div class="modal-header">
              <h2>Product Details</h2>
            </div>
            <div class="modal-body">
              <h3>Washing Machine</h3>
             <p>This Washing Machine approved because of three main reason</p>
              <!-- Add more product details here -->
            </div>
          </div>
        </div>

        <div class="box">
          <div class="box-content">
            <div class="img-box">
              <img src="images/vacume.webp" alt="">
            </div>
            <div class="detail-box">
              <div class="text">
                <h6>
                  Vacume Clenaer
                </h6>
              </div>
              <div class="like">
                <h6>
                  Rating
                </h6>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                 </div>
              </div>
            </div>
          </div>
          <div class="btn-box">
            <a href="#" class="open-modal"  data-modal-id="myModal2">
              Details
            </a>
          </div>
        </div>
        
        <!-- Modal -->
        <div id="myModal2" class="modal">
          <div class="modal-content">
            <span class="close">&times;</span>
            <div class="modal-header">
              <h2>Product Details</h2>
            </div>
            <div class="modal-body">
              <h3>Vacume Cleaner</h3>
             <p>This Vacume Cleaner approved because of three main reason</p>
              <!-- Add more product details here -->
            </div>
          </div>
        </div>
        <div class="box">
          <div class="box-content">
            <div class="img-box">
              <img src="images/microwave.webp" alt="">
            </div>
            <div class="detail-box">
              <div class="text">
                <h6>
                  Microwave Oven
                </h6>
              </div>
              <div class="like">
                <h6>
                  Rating
                </h6>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="btn-box">
            <a href="#" class="open-modal"  data-modal-id="myModal3">
              Details
            </a>
          </div>
        </div>
        
        <!-- Modal -->
        <div id="myModal3" class="modal">
          <div class="modal-content">
            <span class="close">&times;</span>
            <div class="modal-header">
              <h2>Product Details</h2>
            </div>
            <div class="modal-body">
              <h3>Microwave Oven</h3>
             <p>This Microwave Oven approved because of three main reason</p>
              <!-- Add more product details here -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end product section -->


  <!-- product section -->

  <section class="product_section ">
    <div class="container">
      <div class="product_heading">
        <h2>
          Tests Not Approved
        </h2>
      </div>
      <div class="product_container">
        <div class="box">
          <div class="box-content">
            <div class="img-box">
              <img src="images/tv.png" alt="">
            </div>
            <div class="detail-box">
              <div class="text">
                <h6>
                  Television
                </h6>
              </div>
              <div class="like">
                <h6>
                  Rating
                </h6>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                
                </div>
              </div>
            </div>
          </div>
          <div class="btn-box">
            <a href="#" class="open-modal"  data-modal-id="myModal4">
              Details
            </a>
          </div>
        </div>
        
        <!-- Modal -->
        <div id="myModal4" class="modal">
          <div class="modal-content">
            <span class="close">&times;</span>
            <div class="modal-header">
              <h2>Product Details</h2>
            </div>
            <div class="modal-body">
              <h3>Television</h3>
             <p>This Television was not approved because of three main reason</p>
              <!-- Add more product details here -->
            </div>
          </div>
        </div>

        <div class="box">
          <div class="box-content">
            <div class="img-box">
              <img src="images/smart-vacume.webp" alt="">
            </div>
            <div class="detail-box">
              <div class="text">
                <h6>
                  Smart Vacume
                </h6>
              </div>
              <div class="like">
                <h6>
                  Rating
                </h6>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="btn-box">
            <a href="#" class="open-modal"  data-modal-id="myModal5">
              Details
            </a>
          </div>
        </div>
        
        <!-- Modal -->
        <div id="myModal5" class="modal">
          <div class="modal-content">
            <span class="close">&times;</span>
            <div class="modal-header">
              <h2>Product Details</h2>
            </div>
            <div class="modal-body">
              <h3>Smart Vacume</h3>
             <p>This Smart Vacume was not approved because of three main reason</p>
              <!-- Add more product details here -->
            </div>
          </div>
        </div>
        <div class="box">
          <div class="box-content">
            <div class="img-box">
              <img src="images/fridge.jpg" alt="">
            </div>
            <div class="detail-box">
              <div class="text">
                <h6>
                  Fridge
                </h6>
              </div>
              <div class="like">
                <h6>
                  Rating
                </h6>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                 
                </div>
              </div>
            </div>
          </div>
          <div class="btn-box">
            <a href="#" class="open-modal"  data-modal-id="myModal6">
              Details
            </a>
          </div>
        </div>
        
        <!-- Modal -->
        <div id="myModal6" class="modal">
          <div class="modal-content">
            <span class="close">&times;</span>
            <div class="modal-header">
              <h2>Product Details</h2>
            </div>
            <div class="modal-body">
              <h3>Fridge</h3>
             <p>This Fridge approved because of three main reason</p>
              <!-- Add more product details here -->
            </div>
          </div>
      </div>
    </div>
  </section>


  <!-- end product section -->



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