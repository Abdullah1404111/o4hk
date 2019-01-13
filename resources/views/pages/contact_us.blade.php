@extends('layouts.app')

@section('title')
  Contact Us
@endsection
@section('navbar')
      <li><a href="/">Home</a></li>
      <li><a href="/about_us">About Us</a></li>
      <li><a href="/services">Services</a></li>
      <li><a href="/portfolio">Portfolio</a></li>
      <li><a href="/team">Team</a></li>
      <li class="menu-active"><a href="/contact_us">Contact</a></li>    
@endsection 
@section('content')
<main id="main">
  <!--==========================
    Contact Section
  ============================-->
  <section id="contact" class="section-bg wow fadeInUp">
    <div class="container">

      <div class="section-header">
        <h3>Contact Us</h3>
        <p>You can contact us through the address and mobile number provided below.</p>
      </div>

      <div class="row contact-info">

        <div class="col-md-4">
          <div class="contact-address">
            <i class="ion-ios-location-outline"></i>
            <h3>Head Office Address</h3>
                            <address>Rm C03 14/F Chiu Tat Fty Bldg San Po Kong, Kowloon, Hong Kong</address>

                            <!-- <address>Bangladesh Office:
October 04 Limited.
Office: Unit # A-1 and D-1, 1st Floor,
Sanmar RL Park View, 35/25 Jakir Hossain Road,
Khulshi.Chittagong, Bangladesh.</address> -->
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-phone">
            <i class="ion-ios-telephone-outline"></i>
            <h3>Phone Number</h3>
            <p><a href="tel:+155895548855">+852-22593330</a></p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-address">
            <i class="ion-ios-location-outline"></i>
            <h3>Bangladesh Office Address</h3>

          <address>October 04 Limited. Office: Unit # A-1 and D-1, 1st Floor, Sanmar RL Park View, 35/25 Jakir Hossain Road, Khulshi.Chittagong, Bangladesh.</address>
          </div>
        </div>

      </div>

      <!-- <div class="form">
        <div id="sendmessage">Your message has been sent. Thank you!</div>
        <div id="errormessage"></div>
        <form action="" method="post" role="form" class="contactForm">
          <div class="form-row">
            <div class="form-group col-md-6">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="form-group col-md-6">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
            <div class="validation"></div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
            <div class="validation"></div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div> -->

    </div>
  </section><!-- #contact -->

</main>
@endsection
