  @extends('layouts.front-end.header-footer-page')

  @section('body-page')
      <!-- feedback section -->
      <style>
          .star-label {
              cursor: pointer;
              color: rgba(255, 255, 0, 0.5); /* Slightly visible yellow color */
              transition: color 0.3s;
          }

          .star-label:hover,
          .star-label:hover ~ label,
          .star-label:hover ~ input[type="hidden"] {
              color: yellow;
          }

          .star-label input[type="hidden"] {
              display: none;
          }

          .feedback_section {
              display: flex;
              justify-content: center;
              align-items: center;
              min-height: 100vh; /* Center vertically */
              background-color: #f0f0f0; /* Add a background color */
          }

          .form_container {
              background-color: #fff;
              padding: 20px;
              border-radius: 10px;
              box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
          }

          .form_container form {
              text-align: center;
          }

          .form_container input[type="text"],
          .form_container textarea,
          .form_container button {
              width: 100%;
              margin-bottom: 10px;
              padding: 10px;
              border: 1px solid #ccc;
              border-radius: 5px;
              font-size: 16px;
          }

          .form_container .rating {
              text-align: center;
              margin-bottom: 10px;
          }

          .form_container .stars label {
              font-size: 24px;
          }

          .form_container .btn_box {
              text-align: center;
          }
      </style>

      <section class="feedback_section layout_padding">
          <div class="container">
              <div class="heading_container">
                  <h2>Feedback</h2>
              </div>
              <div class="row">
                  <div class="col-md-6">
                      <div class="form_container">
                          <form action="{{ route('feedback.store') }}" method="POST">
                              @csrf
                              <div>
                                  <input type="text" name="Name" id="Name" placeholder="Your Name" required />
                              </div>
                              <div class="rating">
                                  <label for="Rating">Rating:</label>
                                  <div class="stars" id="star-rating">
                                      <input type="hidden" name="Rating" id="star-rating-value" value="0" required />
                                      <label for="star1" class="star-label"><i value="1" class="fas fa-star"></i></label>
                                      <label for="star2" class="star-label"><i value="2" class="fas fa-star"></i></label>
                                      <label for="star3" class="star-label"><i value="3" class="fas fa-star"></i></label>
                                      <label for="star4" class="star-label"><i value="4" class="fas fa-star"></i></label>
                                      <label for="star5" class="star-label"><i value="5" class="fas fa-star"></i></label>
                                  </div>
                              </div>
                              <div>
                                  <textarea name="Feedback" id="Feedback" class="message-box" placeholder="Feedback"
                                      required></textarea>
                              </div>
                              <div class="btn_box">
                                  <button type="submit">Submit Feedback</button>
                              </div>
                          </form>
                      </div>
                  </div>
                  
                  <div class="col-md-6 w-100">
                    <div class="detail-box">
                      @foreach ($feedbacks as $feedback) <!-- Use 'feedbacks' instead of 'feedback' -->
                      <div class="client_info">
                          <div class="client_name">
                              <h5>{{ $feedback->name }}</h5>
                              <h6>{{ $feedback->user_email }}</h6>
                              <h6>Customer</h6>
                          </div>
                          
                      </div>
                      <p>{{ $feedback->feedback }}</p>
                      <hr>
                  @endforeach 
                    </div>
                </div>
            </div>
                  <!-- You can add a map or any other content in the remaining columns if needed -->
              </div>
          </div>
      
      
    <!-- client section -->
   
       
        
                     
                  
      </div>
        
    </section>
    
      <!-- end client section -->
      <!-- end feedback section -->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script>
        $(document).ready(function () {
            $('.star-label').click(function () {
                // Get the selected star's index (0-based)
                const starIndex = $(this).index();
    
                // Set all stars to the default color
                $('.star-label').css('color', 'rgba(255, 255, 0, 0.5)');
    
                // Set the selected star and all stars to the left to yellow
                $('.star-label:lt(' + (starIndex + 1) + ')').css('color', 'yellow');
    
                // Set the hidden input value to the selected rating
                $('#star-rating-value').val(starIndex + 1);
            });
        });
    </script>
  @endsection
