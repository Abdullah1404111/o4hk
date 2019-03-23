@extends('layouts.app')

@section('title')
  Portfolio
@endsection
@section('navbar')
      <li><a href="/">Home</a></li>
      <li><a href="/about_us">About Us</a></li>
      <li><a href="/services">Scope Of Services</a></li>
      <li class="menu-active"><a href="/portfolio">Partners</a></li>
      <li><a href="/team">Team</a></li>
      <li><a href="/contact_us">Contact</a></li>
@endsection
@section('content')
<main id="main">
  <!--==========================
    Portfolio Section
  ============================-->
  <section id="portfolio"  class="section-bg">
    <div class="container">

      <header class="section-header">
        <h3 class="section-title">Our Portfolio</h3>
      </header>

      <div class="row">
        <div class="col-lg-12">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">Didrikson's</li>
            <li data-filter=".filter-app">Maier Sports</li>
            <li data-filter=".filter-card">Halti</li>
            <li data-filter=".filter-web">Trew Gear</li>
            <li data-filter=".filter-web">Mosko Moto</li>
            <li data-filter=".filter-web">Backcountry</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
          <div class="portfolio-wrap">
            <figure>
              <img src="img/portfolio/app1.jpg" class="img-fluid" alt="">
              <a href="img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
              <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="#">Pant 1</a></h4>
              <p>Pant</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
          <div class="portfolio-wrap">
            <figure>
              <img src="img/portfolio/web3.jpg" class="img-fluid" alt="">
              <a href="img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
              <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="#">T-shirt 3</a></h4>
              <p>T-shirt</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
          <div class="portfolio-wrap">
            <figure>
              <img src="img/portfolio/app2.jpg" class="img-fluid" alt="">
              <a href="img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
              <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="#">Pant 2</a></h4>
              <p>Pant</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
          <div class="portfolio-wrap">
            <figure>
              <img src="img/portfolio/card2.jpg" class="img-fluid" alt="">
              <a href="img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
              <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="#">Jacket 2</a></h4>
              <p>Jacket</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
          <div class="portfolio-wrap">
            <figure>
              <img src="img/portfolio/web2.jpg" class="img-fluid" alt="">
              <a href="img/portfolio/web2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
              <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="#">T-shirt 2</a></h4>
              <p>T-shirt</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
          <div class="portfolio-wrap">
            <figure>
              <img src="img/portfolio/app3.jpg" class="img-fluid" alt="">
              <a href="img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
              <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="#">Pant 3</a></h4>
              <p>Pant</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
          <div class="portfolio-wrap">
            <figure>
              <img src="img/portfolio/card1.jpg" class="img-fluid" alt="">
              <a href="img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
              <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="#">Jacket 1</a></h4>
              <p>Jacket</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
          <div class="portfolio-wrap">
            <figure>
              <img src="img/portfolio/card3.jpg" class="img-fluid" alt="">
              <a href="img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
              <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="#">Jacket 3</a></h4>
              <p>Jacket</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
          <div class="portfolio-wrap">
            <figure>
              <img src="img/portfolio/web1.jpg" class="img-fluid" alt="">
              <a href="img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
              <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="#">T-Shirt 1</a></h4>
              <p>T-Shirt</p>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- #portfolio -->

</main>
@endsection
