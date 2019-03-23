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
    .section-bg{
        background: #fff !important;
    }
    .products{
        display: flex;
        flex-wrap: wrap;
    }
    .product-card{
        padding: 1%;
        flex-grow: 1;
        flex-basis: 30%;
        box-shadow: 0px 0px 1px 0px rgba(0,0,0,0.25);
    }
    
    .product-image img{
        max-width: 100%;
       
        
    }
    .product-card .product-info h5{
        margin-top: 10px;
        text-align: center;
        
    }

/* Responsive hack */
@media ( max-width: 920px ) {
	
	.product-card {
		flex: 1 21%;
	}
	
	.products .product-card:first-child, 
	.products .product-card:nth-child(2) {
		flex: 2 46%;
	}
	
}

@media ( max-width: 600px ) {
	
	.product-card {
		flex: 1 46%;
	}
	
}

@media ( max-width: 480px ) {
	
	h1 {
		margin-bottom: 20px;
	}
	
	.product-filter {
		flex-direction: column;
	}
	
	.sort {
		align-self: flex-start;
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

    

    </div>
  
  <section class="products">
     
     <div class="product-card">
         <div class="product-image">
             <img src="img/portfolio/Didriksons/rsz_kure_kids_parka1.jpg" alt="">
             
         </div>
         <div class="product-info">
             <h5>Winter Jacket</h5>
             
         </div>
     </div>
     
     <div class="product-card">
         <div class="product-image">
             <img src="img/portfolio/Didriksons/rsz_kure_kids_parka1.jpg" alt="">
             
         </div>
         <div class="product-info">
             <h5>Winter Jacket</h5>
             
         </div>
     </div>
     
     <div class="product-card">
         <div class="product-image">
             <img src="img/portfolio/Didriksons/rsz_kure_kids_parka1.jpg" alt="">
             
         </div>
         <div class="product-info">
             <h5>Winter Jacket</h5>
            
         </div>
     </div>
     
     <div class="product-card">
         <div class="product-image">
             <img src="img/portfolio/Didriksons/rsz_kure_kids_parka1.jpg" alt="">
             
         </div>
         <div class="product-info">
             <h5>Winter Jacket</h5>
             
         </div>
     </div>
     
     <div class="product-card">
         <div class="product-image">
             <img src="img/portfolio/Didriksons/rsz_kure_kids_parka1.jpg" alt="">
             
         </div>
         <div class="product-info">
             <h5>Winter Jacket</h5>
            
         </div>
     </div>
     
     <div class="product-card">
         <div class="product-image">
             <img src="img/portfolio/Didriksons/rsz_kure_kids_parka1.jpg" alt="">
             
         </div>
         <div class="product-info">
             <h5>Winter Jacket</h5>
            
         </div>
     </div>
     
     
     
     
 </section>    
 </section>
 <!-- #portfolio -->

</main>
@endsection
