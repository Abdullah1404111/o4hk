@extends('layouts.app')

@section('title')
  Services
@endsection
@section('navbar')
      <li><a href="/">Home</a></li>
      <li><a href="/about_us">About Us</a></li>
      <li class="menu-active"><a href="/services">Scope Of Services</a></li>
      <li><a href="/portfolio">Partners</a></li>
      <li><a href="/team">Team</a></li>
      <li><a href="/contact_us">Contact</a></li>
@endsection
@section('content')
<main id="main">
</main>
<!--==========================
  Services Section
============================-->
<section id="services">
  <div class="container">

    <header class="section-header wow fadeInUp">
      <h3>Services</h3>
      <p>Below are the services that Octobor 04 HK ltd provides customers including designing, manufacturing and others.</p>
    </header>

    <div class="row">

      <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
        <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
        <h4 class="title"><a href="">Design</a></h4>
        <p class="description">Having the ability to express a brand through product design is by far the most powerful variable in global brands from each other, but also consummates an addictive style that maintains consumer’s loyalty. </p>
      </div>
      <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
        <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
        <h4 class="title"><a href="">Development</a></h4>
        <p class="description">Developing your designs for a new collection involves 3 main components. When starting a collection, new designers need to consider their color story, design functionality, technical package, and garment patterns. Here’s the breakdown of each step in the design development process.</p>
      </div>
      <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
        <div class="icon"><i class="ion-ios-paper-outline"></i></div>
        <h4 class="title"><a href="">Sourcing</a></h4>
        <p class="description">For garment export house fabric and trims are the raw material which needs to be outsourced. Sourcing is basically determining the most cost efficient vendor of materials, production, or finished goods at the specified quality and service level. It is closely associated and an important part of apparel merchandiser’s responsibility.</p>
      </div>
      <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
        <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
        <h4 class="title"><a href="">Manufacturing</a></h4>
        <p class="description">Focuses on Korean garment manufacturing and the feasibility and benefits of introducing an expert system. Reviews previous literature on knowledge‐based system and describes in detail the stages followed in developing, constructing, testing, evaluating, integrating, implementing and maintaining the expert system.</p>
      </div>

    </div>

  </div>
</section><!-- #services -->
@endsection
