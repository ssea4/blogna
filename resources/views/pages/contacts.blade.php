@extends('layouts.app')
    @section('content')
    <h1>{{$title}}</h1>
    <!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  
    <div class="container" data-aos="fade-up">
  
      <div class="section-title">
        <h2>Contact</h2>
        <p>Get intouch with us by leaving a quick message.</p>
      </div>
  
      <div class="row">
  
        <div class="col-lg-5 d-flex align-items-stretch">
          <div class="info">
            <div class="address">
              <i class="fas fa-map-marked-alt"></i>
              <h4>Location:</h4>
              <p>Juba, South Sudan</p>
            </div>
  
            <div class="email">
              <i class="fas fa-envelope"></i>
              <h4>Email us on</h4>
              <p> infossea2020@mail.com</p>
              <p> sseavision2050@gmail.com</p>
            </div>
  
            <div class="phone">
              <i class="fas fa-phone"></i>
              <h4>Reach out to us directly on:</h4>
              <p>+254729445484
              </p>
              <p>+211918367898
              </p>
            </div>
  
            <iframe width="100%" height="290px" id="gmap_canvas" src="https://maps.google.com/maps?q=mobil%20roundabout%20&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>      
            
          </div>
  
        </div>
  
        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="name">Your Name</label>
                <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="form-group col-md-6">
                <label for="name">Your Email</label>
                <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <label for="name">Subject</label>
              <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <label for="name">Message</label>
              <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>
  
      </div>
  
    </div>
  </section><!-- End Contact Section -->
    @endsection

  