@extends('layouts.app')
@section('title')
  Octobor 4 hk ltd
@endsection
@section('navbar')
	  <li class="menu-active"><a href="/">Home</a></li>
      <li><a href="/about_us">About Us</a></li>
      <li><a href="/services">Scope Of Services</a></li>
      <li><a href="/portfolio">Partners</a></li>
      <li><a href="/team">Team</a></li>
      <li><a href="/contact_us">Contact</a></li>
@endsection
@section('content')
  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="img/intro-carousel/img1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>We are professional</h2>
                <p>We make quality Jacket for winter time.</p>
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/img2.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Trendy</h2>
                <p>We try our best to provide you products by taking the modern
                trends into consideration.</p>
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/img3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Team Members</h2>
                <p>These are out team memebers. We strive hard to be at your service.</p>
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">
    <!--==========================
      Call To Action Section
    ============================-->

    <!--==========================
      Skills Section
    ============================-->
    <section id="skills" class="wow fadeIn">
      <div class="container">

        <header class="section-header">
          <h3>Our Skills</h3>
          <p>Octobor 4 hk ltd provide the best of services when it comes to making clothes for the customers. We have skilled workers for the job to accomplish our tasks. Below are the sections where we are skilled at and how much skilled we are in each sectoin mentioned below.</p>
        </header>

        <div class="skills-content">

          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Jackets <i class="val">100%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">T-shirt <i class="val">90%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Jeans <i class="val">75%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Others <i class="val">55%</i></span>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!--==========================
      Facts Section
    ============================-->
    <section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
          <h3>Facts</h3>
          <p>Below are some fact about us and what we have accomplised so far.</p>
        </header>

        <div class="row counters">

                <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">8</span>
            <p>Clients</p>
                </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">720</span>
            <p>Projects</p>
                </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">5</span>
            <p>Years Of Support</p>
                </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">40</span>
            <p>Hard Workers</p>
                </div>

            </div>


      </div>
    </section><!-- #facts -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp" >
      <div class="container">

        <header class="section-header">
          <h3>Our Clients</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <a target="_blank" href="https://www.didriksons.com/en"><img src="img/clients/client-1.png" alt="" style="margin-top: 20px; background: rgba(155, 155, 150, 1); border-radius: 20%;"></a>
          <a target="_blank" href="https://www.backcountry.com/"><img src="img/clients/client-2.png" alt="" style="background: rgba(255, 155, 150, 1); border-radius: 20%;"></a>
          <a target="_blank" href="https://halti.com/"><img src="img/clients/client-3.png" alt="" style="margin-top: 17px; background: rgba(124, 255, 150, 1); height: 60px; border-radius: 20%;"></a>
          <!-- <img src="img/clients/client-4.png" alt="">
          <img src="img/clients/client-5.png" alt="">
          <img src="img/clients/client-6.png" alt="">
          <img src="img/clients/client-7.png" alt="">
          <img src="img/clients/client-8.png" alt=""> -->
        </div>

      </div>
    </section><!-- #clients -->
  </main>

@endsection
