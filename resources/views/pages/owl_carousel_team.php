/*Team Using owl Carousel and pop up*/

@extends('layouts.app')
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">
    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
     
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style>
    body{
          margin:0;
          color:#333;
          background:#0e1013;
          font-family:sans-serif;
        }
        h1.teams{
          padding: 10px!important;
          text-align:center;
          font-family:serif;
          font-size:3em;
          color:#fff!important;
          background: #000 !important;
          margin:0 auto;
          margin-bottom: -20px!important;
        }
.testimonial{
    background: #fff;
    text-align: center;
    padding: 30px 30px 50px;
    margin: 0 15px 250px;
    position: relative;
    margin-top: 168px;
}
.testimonial:before,
.testimonial:after{
    content: "";
    border-top: 40px solid #fff;
    border-right: 125px solid transparent;
    position: absolute;
    bottom: -40px;
    left: 0;
}
.testimonial:after{
    border-right: none;
    border-left: 125px solid transparent;
    left: auto;
    right: 0;
}
.testimonial .icon{
    display: inline-block;
    font-size: 80px;
    color: #bd986b;
    margin-bottom: 20px;
    opacity: 0.6;
}
.testimonial .description{
    font-size: 16px;
    color: #777;
    text-align: justify;
    margin-bottom: 30px;
    opacity: 0.9;
    letter-spacing: -1px;
}
.testimonial .testimonial-content{
    width: 100%;
    position: absolute;
    left: 0;
}
.testimonial .pic{
    display: inline-block;
    border: 6px solid white;
    border-radius: 50%;
    box-shadow: 0 0 2px 2px #daad86;
    overflow: hidden;
    z-index: 1;
    position: relative;
}
.testimonial .pic img{
    width: 100%;
    height: auto;
}
.testimonial .title{
    font-size: 15px;
    font-weight: bold;
    color: #000;
    text-transform: capitalize;
    margin: 5px 0 5px 0;
}
.testimonial .title::before{
    content:'Mr';
    margin-right: 5px;
}
.testimonial .post{
    display: block;
    font-size: 14px;
    color: #ffd9b8;
    margin-bottom:5px;
}
.testimonial .details{
  font-size:20px;

}
.owl-theme .owl-controls{
    margin-top: 60px;
}
.owl-theme .owl-controls .owl-page span{
    width: 32px;
    height: 10px;
    background: #fff;
    border: 2px solid #bd986b;
    margin: 5px;
    opacity: 1;
}
.owl-theme .owl-controls .owl-page.active span,
.owl-theme .owl-controls.clickable .owl-page:hover span{
    background: #ffd9b8;
    border-color: #fff;
}
    .pic img{
        width: 100px !important;
        height: 100px;
    }
    </style>

@section('title')
  Our Team
@endsection
@section('navbar')
      <li><a href="/">Home</a></li>
      <li><a href="/about_us">About Us</a></li>
      <li><a href="/services">Scope Of Services</a></li>
      <li><a href="/portfolio">Partners</a></li>
      <li class="menu-active"><a href="/team">Team</a></li>
      <li><a href="/contact_us">Contact</a></li>
@endsection
@section('content')
<main id="main">

  <!--==========================
    Team Section
  ============================-->
    <h1 class="teams">Our Team</h1>
        <div class="demo">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="testimonial-slider" class="owl-carousel">
                    <div class="testimonial">
                        <span class="icon fa fa-quote-left"></span>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis sed sagittis at, sagittis quis neque. Praesent.Vivamus arcu metus, mattis sed sagittis at, sagittis quis neque. Praesent.
                        </p>
                        <div class="testimonial-content">
                            <div class="pic"><img src="img/emon.jpg" class=""alt=""></div>
                            <h3 class="title">Emon</h3>
                            <span class="post">Web Developer</span>
                            <button class="details btn">View Details</button>

                        </div>
                    </div>
                    <div class="testimonial">
                        <span class="icon fa fa-quote-left"></span>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis sed sagittis at, sagittis quis neque. Praesent.Vivamus arcu metus, mattis sed sagittis at, sagittis quis neque. Praesent.
                        </p>
                        <div class="testimonial-content">
                            <div class="pic"><img src="img/emon.jpg" alt=""></div>
                            <h3 class="title">Emon</h3>
                            <span class="post">Web Designer</span>
                            <button class="details btn">View Details</button>
                        </div>
                    </div>
                    <div class="testimonial">
                        <span class="icon fa fa-quote-left"></span>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis sed sagittis at, sagittis quis neque. Praesent.Vivamus arcu metus, mattis sed sagittis at, sagittis quis neque. Praesent.
                        </p>
                        <div class="testimonial-content">
                            <div class="pic"><img src="img/emon.jpg" alt=""></div>
                            <h3 class="title">Emon</h3>
                            <span class="post">Web Developer</span>
                            <button class="details btn">View Details</button>
                        </div>
                    </div>
                       
                       <div class="testimonial">
                        <span class="icon fa fa-quote-left"></span>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis sed sagittis at, sagittis quis neque. Praesent.Vivamus arcu metus, mattis sed sagittis at, sagittis quis neque. Praesent.
                        </p>
                        <div class="testimonial-content">
                            <div class="pic"><img src="img/emon.jpg" alt=""></div>
                            <h3 class="title">Emon</h3>
                            <span class="post">Web Developer</span>
                            <button class="details btn">View Details</button>
                        </div>
                    </div>     
                       <div class="testimonial">
                        <span class="icon fa fa-quote-left"></span>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis sed sagittis at, sagittis quis neque. Praesent.Vivamus arcu metus, mattis sed sagittis at, sagittis quis neque. Praesent.
                        </p>
                        <div class="testimonial-content">
                            <div class="pic"><img src="img/emon.jpg" alt=""></div>
                            <h3 class="title">Emon</h3>
                            <span class="post">Web Developer</span>
                            <button class="details btn">View Details</button>
                        </div>
                    </div>     
                       <div class="testimonial">
                        <span class="icon fa fa-quote-left"></span>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis sed sagittis at, sagittis quis neque. Praesent.Vivamus arcu metus, mattis sed sagittis at, sagittis quis neque. Praesent.
                        </p>
                        <div class="testimonial-content">
                            <div class="pic"><img src="img/emon.jpg" alt=""></div>
                            <h3 class="title">Emon</h3>
                            <span class="post">Web Developer</span>
                            <button class="post btn"style="margin:auto;">View Details</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
 <script>
$(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:3,
        itemsDesktop:[1000,3],
        itemsDesktopSmall:[979,2],
        itemsTablet:[768,2],
        itemsMobile:[650,1],
        pagination:true,
        autoPlay:true
    });
});
     </script>
</main>




@endsection