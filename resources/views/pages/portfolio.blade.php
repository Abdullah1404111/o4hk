@extends('layouts.app')
<style>
img{ max-width:100%;}

.gal_box li{ width:33.333333%; max-width: 100%; display:inline-block; float: left; text-align: center; overflow: hidden;    position: relative;}
.gal_box{ padding:0;display: flow-root;}

.gal_box li:hover img {
  -moz-transform: scale(1.1);
  -webkit-transform: scale(1.1);
  -ms-transform: scale(1.1);
  -o-transform: scale(1.1);
  transform: scale(1.1);
}
.gal_box li img{-webkit-transition: transform 0.5s ease;
  -o-transition: transform 0.5s ease;
  transition: transform 0.5s ease;}
.gal_box li:nth-child(even) {
  height: 304px;
}
.gal_box li:nth-child(odd) {
  height: 438px;
}
.gal_box li:nth-child(odd) .box_data{ background:rgba(0,0,0,0.17) }
.gal_box li:nth-child(even) .box_data{ background:rgba(0,44,255,0.27) }
.gal_box .box_data{ position:absolute; top: 0; left: 0; right:0; bottom:0; color:#fff;}
.gal_box .box_data span{ position:absolute; top: 50%; transform: translateY(-50%); left:0 ; right:0; font-size:24px;}
.gal_box li:hover .box_data{ background:rgba(255,0,39,0.55)}
</style>
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
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">Pants</li>
            <li data-filter=".filter-card">Jackets</li>
            <li data-filter=".filter-web">T-shirts</li>
          </ul>
        </div>
      </div>

      <div class="row">
        <ul class="gal_box">
        	<li>
        		<a href="#0"><img src="https://picsum.photos/600/700/?random">
        		<div class="box_data">
        			<span>Ravi With Bike</span>
        		</div></a>
        	</li>
        		<li>
        		<a href="#0"><img src="https://picsum.photos/600/701/?random">
        		<div class="box_data">
        			<span>Ravi Singh</span>
        		</div></a>
        	</li>
        		<li>
        		<a href="#0"><img src="https://picsum.photos/600/702/?random">
        		<div class="box_data">
        			<span>White wall</span>
        		</div></a>
        	</li>
        			<li>
        		<a href="#0"><img src="https://picsum.photos/600/703/?random">
        		<div class="box_data">
        			<span>Green Tree</span>
        		</div></a>
        	</li>
        			<li style="    position: relative;
            top: -134px;">
        		<a href="#0"><img src="https://picsum.photos/600/704/?random">
        		<div class="box_data">
        			<span>Blue</span>
        		</div></a>
        	</li>
        			<li>
        		<a href="#0"><img src="https://picsum.photos/600/705/?random">
        		<div class="box_data">
        			<span>Ravi</span>
        		</div></a>
        	</li>
        </ul>
      </div>
    </div>
  </section><!-- #portfolio -->

</main>
@endsection
