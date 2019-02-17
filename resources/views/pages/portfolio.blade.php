@extends('layouts.app')
<style>
img{ max-width:100%;}
    li:nth-child(odd) img {
  min-height: 438px;
}
li:nth-child(even) img{
  min-height: auto;
}
.gal_box li{ width:33.3333%; max-width: 100%; display:inline-block; float: left; text-align: center; overflow: hidden;    position: relative;}
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
/*
.gal_box li:nth-child(odd) .box_data{ background:rgba(0,0,0,0.17) }
.gal_box li:nth-child(even) .box_data{ background:rgba(0,44,255,0.27) }
.gal_box .box_data{ position:absolute; top: 0; left: 0; right:0; bottom:0; color:#fff;}
.gal_box .box_data span{ position:absolute; top: 50%; transform: translateY(-50%); left:0 ; right:0; font-size:24px;}
.gal_box li:hover .box_data{ background:rgba(255,0,39,0.55)}
*/
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
        <h3 class="section-title">Our Products</h3>
      </header>

      <div class="row">
        <div class="col-lg-12">
          <ul id="portfolio-flters">
            <li onclick="cardAll()">Didrikson's</li>
            <li onclick="cardfilter('mer')">Maier Sports</li>
            <li onclick="cardfilter('fff')">Halti</li>
            <li onclick="cardfilter('sss')">Trew Gear</li>
            <li onclick="cardfilter('ww')">Mosko Moto</li>
            <li onclick="cardfilter('ee')">Backcountry</li>
          </ul>
        </div>
      </div>

      <div class="row">
        <ul class="gal_box">
        	<li class="card mer">
        		<a href="#0"><img src="img/portfolio/4.jpg">
        		<div class="box_data">
        			<span></span>
        		</div></a>
        	</li>
        		<li class="card">
        		<a href="#0"><img src="img/portfolio/4.jpg">
        		<div class="box_data">
        			<span></span>
        		</div></a>
        	</li>
       		<li class="card mer">
        		<a href="#0"><img src="img/portfolio/4.jpg">
        		<div class="box_data">
        			<span></span>
        		</div></a>
        	</li>
         			<li class="card mer">
        		<a href="#0"><img src="img/portfolio/4.jpg">
        		<div class="box_data">
        			<span></span>
        		</div>
        		</a>
        	</li>
      			<li class="card">
        		<a href="#0"><img src="img/portfolio/5.jpg">
        		<div class="box_data">
        			<span></span>
        		</div></a>
        	</li>
         			<li class="card">
        		<a href="#0"><img src="img/portfolio/4.jpg">
        		<div class="box_data">
        			<span></span>
        		</div></a>
        	</li>
          		<li class="card" style="position: relative;
            ">
        		<a href="#0"><img src="img/portfolio/4.jpg">
        		<div class="box_data">
        			<span></span>
        		</div></a>
        	</li>
      		<li class="card" style="position:relative;top:-438px; ">
        		<a href="#0"><img src="img/portfolio/4.jpg">
        		<div class="box_data">
        			<span></span>
        		</div></a>
        	</li>
        	<!-- <li style="position:relative;">
        		<a href="#0"><img src="img/portfolio/4.jpg">
        		<div class="box_data">
        			<span></span>
        		</div></a>
        	</li>

        	<li style="position:relative;top:-438px; ">
        		<a href="#0"><img src="img/portfolio/4.jpg">
        		<div class="box_data">
        			<span></span>
        		</div></a>
        	</li>
        	<li style="position:relative;top:-438px; ">
        		<a href="#0"><img src="img/portfolio/4.jpg">
        		<div class="box_data">
        			<span></span>
        		</div></a>
        	</li>
        	<li style="position:relative;top:-438px; ">
        		<a href="#0"><img src="img/portfolio/4.jpg">
        		<div class="box_data">
        			<span></span>
        		</div></a>
        	</li>
        	<li style="position:relative;top:-438px; ">
        		<a href="#0"><img src="img/portfolio/4.jpg">
        		<div class="box_data">
        			<span></span>
        		</div></a>
        	</li>
        	<li style="position:relative; ">
        		<a href="#0"><img src="img/portfolio/4.jpg">
        		<div class="box_data">
        			<span></span>
        		</div></a>
        	</li>
-->
        </ul>
      </div>
    </div>
  </section><!-- #portfolio -->

</main>

<script type="text/javascript">
  var x = 1;
  function cardfilter(cardName)
  {
    var cardfilt = document.getElementsByClassName(cardName);
    var cards = document.getElementsByClassName('card');

    for (var i = 0; i < cards.length; i++) {
      cards[i].style.display = "none";
    }

    for (var i = 0; i < cardfilt.length; i++) {
      cardfilt[i].style.display = "";
    }
  }

  function cardAll()
  {
    var cards = document.getElementsByClassName('card');

    for (var i = 0; i < cards.length; i++) {
      cards[i].style.display = "";
    }
  }

  function hides()
  {
    if (x == 1) {
      document.getElementById('portfolio-flters').style.height = "320px";
      x = 0;
    } else {
      document.getElementById('portfolio-flters').style.height = "0px";
      x = 1;
    }

  }

</script>

@endsection
