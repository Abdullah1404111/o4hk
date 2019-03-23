<!--/*Team Using owl Carousel and pop up*/-->

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
.testimonial{
    background: #fff;
    text-align: center;
    padding: 30px 30px 50px;
    margin: 0 15px 250px;
    position: relative;
    margin-top: 10px;
    
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
    cursor: pointer;
  transition: 0.3s;
}
.testimonial .pic img{
    width: 100%;
    height: auto;
}

.testimonial .title{
    font-size: 20px;
    font-weight: bold;
    color: #000;
    text-transform: uppercase;
    margin: 5px 0 5px 0;
}
.testimonial .title::before{
    content:'Mr';
    margin-right: 5px;
}
.testimonial .post{
    display: block;
    font-size: 18px;
    color: #ffd9b8;
    font-weight: 700
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
    
/* Hello this is bangladesh   */
    .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 80%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 20px;
  right: 20px;
  color: white;
  font-size: 40px;
  font-weight: 1000;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
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
    <header class="section-header">
        <h3 class="section-title">Our Team</h3>
      </header>
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
                            <div class="pic"><img src="img/members/division 2/adil.jpg" class=""alt="" id="myImg"></div>
                            <h3 class="title" id="title">Mr. Adil</h3>
                            <div id="myModal" class="modal">
                          <span class="close">&times;</span>
                          <img class="modal-content" id="img01">
                           <div id="caption"></div>
                           </div>
                            <span class="post">Asst.Officer</span>
                            <button class="details btn">View Details</button>

                        </div>
                    </div>
<!--
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
                            <div class="pic"><img src="img/emon.jpg" alt="" ></div>
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
-->
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
     
     <script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
</main>




@endsection