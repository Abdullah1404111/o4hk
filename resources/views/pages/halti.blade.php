@extends('layouts.app')
<style>
   
@import url(https://fonts.googleapis.com/css?family=Roboto+Condensed:700);

html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}

body {
	background-color: #f2f2f2;
}



em {
	color: #232027;
}

.wrapper {
	width: 100%;
	margin-left: 100px;
}

div.gallery {
	margin:10px auto;
}

div.gallery ul {
	list-style-type: none;
/*	margin-left: 35px;*/
}

/* animation */
div.gallery ul li, div.gallery li img {
	-webkit-transition: all 0.1s ease-in-out;
  	-moz-transition: all 0.1s ease-in-out;
  	-o-transition: all 0.1s ease-in-out;
  	transition: all 0.1s ease-in-out;
}

div.gallery ul li {
	position: relative;
	float: left;
	width: 300px;
	height: 300px;
	margin: 5px ;
	padding: 5px;
    align-items: center;
}

/* Make sure z-index is higher on hover */
/* Ensure that hover image overlapped the others */
div.gallery ul li:hover {
	z-index: 5;
}

/* Image is position nicely under li */
div.gallery ul li img {
	position: absolute;
	left: 0;
	top: 0;
	border: 1px solid #dddddd;
	padding: 5px;
	width: 300px;
	height: 300px;
	background: #f0f0f0;
}

div.gallery ul li img:hover {
/*
	width: 400px;
	height: 400px;
*/
    transform: scale(1.5);
/*
	margin-top: -130px;
	margin-left: -130px;
*/
/*
	top: 65%;
	left: 65%;
*/
}

p.attribution {
	font-family: 'Consolas';
	color: #000;
	clear: both;
	text-align: center;
	line-height: 25px;
	padding-top: 30px;
}

p.attribution a {
	color: #4c8d7c;
}

/* Responsive hack */
@media only screen and (min-width: 499px) and (max-width: 1212px) {
	.wrapper {
		width: 500px;
	}
}

@media only screen and (max-width: 498px) {
	.wrapper {
		width: 300px;
	}

	div.gallery ul {
		list-style-type: none;
		margin: 0;
	}
}
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

<!--
      <div class="row">
        <div class="col-lg-12">
          <ul id="portfolio-flters">
            <li data-filter=".filter-app">AW 17</li>
            <li data-filter=".filter-card">SS 17</li>
            <li data-filter=".filter-web">AW 18</li>
            <li data-filter=".filter-web">SS 18</li>
            <li data-filter=".filter-web">AW 19</li>
            <li data-filter=".filter-web">SS 19</li>
          </ul>
        </div>
      </div>
-->
    <div class="wrapper">
		<div class="gallery">
			<ul>
				<li><a href=""><img src="img/portfolio/Halti/caimajacket.jpg"></a></li>
				
				<li><a href=""><img src="img/portfolio/Halti/ellawomensjacket.jpg"></a></li>
				
				<li><a href=""><img src="img/portfolio/Halti/immoMensjacket.jpg"></a></li>
				
				<li><a href=""><img src="img/portfolio/Halti/lexaMensSkijacket.jpg"></a></li>
				
				<li><a href=""><img src="img/portfolio/Halti/pallasMhybridjacket.jpg"></a></li>
				
				<li><a href=""><img src="img/portfolio/Halti/pallasMjacket.jpg"></a></li>
				
				<li><a href=""><img src="img/portfolio/Halti/sorvaMpant.jpg"></a></li>
				
				<li><a href=""><img src="img/portfolio/Halti/vaskiMjacket.jpg"></a></li>
				
			</ul>
		</div>
		<p class="attribution"></p>
	</div>
    </div>
  </section><!-- #portfolio -->

</main>
@endsection
