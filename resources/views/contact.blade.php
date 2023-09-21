@extends('layouts.front-end.header-footer-page')
@section('body-page')
  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Contact Us
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
          <form action="{{ route('contact.store') }}" method="POST">
            

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    @csrf
    <div>
        <input type="text" name="Username" id="Username" placeholder="Your Name" required />
    </div>
    <div>
        <input type="text" name="Userphone" id="Userphone" placeholder="Phone Number" required/>
    </div>
    <div>
        <input type="email" name="Useremail" id="Useremail" placeholder="Email" required />
    </div>
    <div>
        <input type="text" name="Usermessage" id="Usermessage" class="message-box" placeholder="Message" required/>
    </div>
    <div class="btn_box">
        <button type="submit">SEND</button>
    </div>
</form>

          </div>
        </div>
        <div class="col-md-6 ">
          <div class="map_container">
            <div class="map">
              <div id="googleMap"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

@endsection