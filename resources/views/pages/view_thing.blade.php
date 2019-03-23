@extends('layouts.app')
<style>

.row { display:flex; flex-wrap: wrap }

.product-display { padding-left:0; display:flex; flex-wrap:wrap; }
#product-image { width:100%; }


#product-logo { position:absolute; border:1px black #333; }
#product-logo img { max-height:100%; max-width:100%; }
.product-data .brand-logo { height:1em; }

    .product-options{
        background-color: beige;
        height: 300px;
    }
.product-options h4 { display:inline-block; margin-top:0; }
.product-options h4 + span { float:right; cursor:pointer; }
.product-options h4 + span:hover { color:#369; }
#colors ul,#sizes ul { margin:0; padding:0; }
#colors li { display:inline-block; margin:0.25em; height:2em; width:2em; border-radius:1em; color:#fff }
#colors li span { top:.375em;left:.5em; }
#sizes li { display:inline-block; margin:0.25em; height:2em; width:2em; border-radius:1em; border:solid 2px #999; color:#999; font-weight:bold; text-align:center; line-height:175%; text-transform:uppercase; cursor:pointer;}
#colors li.active { border:solid 2p #eee; box-shadow: 0 0 0 3px #ace; }
#sizes li.active { background: #369; color:white; border-color:#369; }
#logo-display { margin:0 0 1em; padding:1em; }
.logo { display:block; margin:0 auto; width:100%; }
#text-display { display:block; margin:0.25em; font-size:1.5em; font-family:sans-serif; text-align:center; font-weight:bold;  color:black}
#text-preview-sans { font:bold 1.25em sans-serif; }
#text-preview-serif { font:bold 1.25em serif; margin: 0 0 0 .25em}
#text-preview-italic { font:bold italic 1.25em serif; margin: 0 0 0 .25em }
#text-preview-color { background-color:white; border: solid 1px buttonface; margin: 0 0 0 .25em }
.price { color:#369; }
.price sup { font-size:55%; }

.btn.add { height:1em;width:1em; line-height:.5em; font-size:5em; border-radius:100%; transition:all .3s; transition-timing-function:cubic-bezier(0,.25,.25,3); }

.modal .logo { padding:1em 0; -webkit-filter: drop-shadow( 3px 3px 3px #ccc ); }
.modal .logo.white path { fill:white; ); }

.modal table th { text-align:center; }
.modal table td { padding:.25em; }

@media(max-width:768px) {
  .header .row:first-child { text-align:center; }
}


.zoom-btn { position:absolute; height:2em; width:2em; border:solid 2px #999; padding:.375em; border-radius:100%; line-height:1em; color:#999; z-index:5; }
.zoom-btn.active { background:#999; color:#fff; }
.zoom-view {display:none; position:absolute; height:12em; width:12em; border:solid 2px #999; border-radius:100%; overflow:hiden; z-index:2; }
.zoom-view img { position:absolute; }
.activeZoom { overflow:hidden; }

#zoom-logo { position:absolute; top:0;left:0; border:1px black #333; z-index:2; }
#zoom-logo img { max-height:100%; max-width:100%; z-index:2; }

.sub-images div{
	height: 250px;
	width: 250px;
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

  <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-md-9 col-sm-8 product-display">
                <div class="col-lg-6 product-preview">
                  <div class="zoom-btn">
                      <span class="fa fa-search" aria-hidden="true"></span>
                  </div>
                  <div class="zoom-view">
                      <div id="zoom-logo">

                      </div>
                      <img id="zoom-image" src="{{ asset($product->thing_image) }}" alt="" >
                  </div>
                  <div id="product-logo">
                  </div>
                  <img id="product-image" src="{{ asset($product->thing_image) }}" alt="">

                </div>


                <div class="col-lg-6 product-data">
                   <h3>{{$product->thing_name}}</h3>
                   <img class="brand-logo" src="trew_logo.png" alt="">
                   <h5>Style No.</h5>
                   <div class="product-details">
                       <p>Product Descriptions</p>
                       <ul>
                           <li>1</li>
                           <li>2</li>
                           <li>3</li>
                           <li>4</li>
                           <li>5</li>
                           <li>6</li>
                       </ul>
                   </div>
                   <a href=""data-toggle="collapse" data-target=".size-chart">Size Chart</a>
                   <div class="size-chart collapse">Size Chart goes here!</div>
                </div>
             </div>

            <div class="col-md-3 col-sm-4 product-options well">
               <h4>Product Color</h4>
               <div id="colors">
                   <ul>
                       <li style="background-color:darkblue" data-color="darkblue" data-color-img=""><span class="glyphicon"></span></li>
          <li style="background-color:orangered" data-color="orangered" data-color-img=""><span class="glyphicon"></span></li>

          <li style="background-color:darkgreen" data-color="darkgreen" data-color-img=""><span class="glyphicon"></span></li>

          <li style="background-color:grey" data-color="grey" data-color-img=""><span class="glyphicon"></span></li>

          <li style="background-color:hotpink" data-color="hotpink" data-color-img=""><span class="glyphicon"></span></li>

                   </ul>
               </div>
                <hr>

                <h4>Product Size</h4>
                <div id="sizes">
                    <ul>
                        <li data-size="xs">xs</li>
          <li data-size="s">s</li>
          <li data-size="m">m</li>
          <li data-size="l">l</li>
          <li data-size="xl">xl</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:20px;" class="sub-images">
					@if(isset($product_image->image1))
        	<div class="col-lg-2"><img src="{{ asset($product_image->image1) }}" style="height: 200px; width: 200px;" data-toggle="modal" data-target="#taufik1"></div>
					<div class="col-lg-2"><img src="{{ asset($product_image->image2) }}" style="height: 200px; width: 200px;" data-toggle="modal" data-target="#taufik2"></div>
					<div class="col-lg-2"><img src="{{ asset($product_image->image3) }}" style="height: 200px; width: 200px;" data-toggle="modal" data-target="#taufik3"></div>
					<div class="col-lg-2"><img src="{{ asset($product_image->image4) }}" style="height: 200px; width: 200px;" data-toggle="modal" data-target="#taufik4"></div>
					<div class="col-lg-2"><img src="{{ asset($product_image->image5) }}" style="height: 200px; width: 200px;" data-toggle="modal" data-target="#taufik5"></div>
					<div class="col-lg-2"><img src="{{ asset($product_image->image6) }}" style="height: 200px; width: 200px;" data-toggle="modal" data-target="#taufik6"></div>
					@endif
        </div>
    </div>

               <!-- javascript -->





<!-- #portfolio -->

</main>


<div id="taufik1" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg" style="position:relative;">
    <!-- Modal content-->
    <div class="modal-content" style="text-align: center;" >
      <button type="button" class="close" data-dismiss="modal" style="background: #00A1EF; padding: 15px 18px; color: white; border-radius: 48%; position:absolute; top: -5px; right:-10px; opacity: 1; z-index: 1000;">&times;</button>
        <div class="row">
        <div class="lefts col-lg-5 col-md-5 col-sm-12" style="background: black; color: white; padding-top: 20px;">
          <img src="{{ asset($product_image->image1) }}" alt="" style="width: 70%; padding-top: 10px; height:auto;"></div>
        <div class="rights col-lg-7 col-md-7 col-sm-12" style="margin-top: 25px; height: 300px;">
          <h2 style="text-align: left; margin-bottom: 5px; float: left; font-weight: 1000; color: #000;">{{$product->thing_name}}</h2>
        </div>
      </div>

  </div>
  </div>
</div>

<div id="taufik2" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg" style="position:relative;">
    <!-- Modal content-->
    <div class="modal-content" style="text-align: center;" >
      <button type="button" class="close" data-dismiss="modal" style="background: #00A1EF; padding: 15px 18px; color: white; border-radius: 48%; position:absolute; top: -5px; right:-10px; opacity: 1; z-index: 1000;">&times;</button>
        <div class="row">
        <div class="lefts col-lg-5 col-md-5 col-sm-12" style="background: black; color: white; padding-top: 20px;">
          <img src="{{ asset($product_image->image2) }}" alt="" style="width: 70%; padding-top: 10px; height:auto;"></div>
        <div class="rights col-lg-7 col-md-7 col-sm-12" style="margin-top: 25px; height: 300px;">
          <h2 style="text-align: left; margin-bottom: 5px; float: left; font-weight: 1000; color: #000;">{{$product->thing_name}}</h2>
        </div>
      </div>

  </div>
  </div>
</div>

<div id="taufik3" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg" style="position:relative;">
    <!-- Modal content-->
    <div class="modal-content" style="text-align: center;" >
      <button type="button" class="close" data-dismiss="modal" style="background: #00A1EF; padding: 15px 18px; color: white; border-radius: 48%; position:absolute; top: -5px; right:-10px; opacity: 1; z-index: 1000;">&times;</button>
        <div class="row">
        <div class="lefts col-lg-5 col-md-5 col-sm-12" style="background: black; color: white; padding-top: 20px;">
          <img src="{{ asset($product_image->image3) }}" alt="" style="width: 70%; padding-top: 10px; height:auto;"></div>
        <div class="rights col-lg-7 col-md-7 col-sm-12" style="margin-top: 25px; height: 300px;">
          <h2 style="text-align: left; margin-bottom: 5px; float: left; font-weight: 1000; color: #000;">{{$product->thing_name}}</h2>
        </div>
      </div>

  </div>
  </div>
</div>

<div id="taufik4" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg" style="position:relative;">
    <!-- Modal content-->
    <div class="modal-content" style="text-align: center;" >
      <button type="button" class="close" data-dismiss="modal" style="background: #00A1EF; padding: 15px 18px; color: white; border-radius: 48%; position:absolute; top: -5px; right:-10px; opacity: 1; z-index: 1000;">&times;</button>
        <div class="row">
        <div class="lefts col-lg-5 col-md-5 col-sm-12" style="background: black; color: white; padding-top: 20px;">
          <img src="{{ asset($product_image->image4) }}" alt="" style="width: 70%; padding-top: 10px; height:auto;"></div>
        <div class="rights col-lg-7 col-md-7 col-sm-12" style="margin-top: 25px; height: 300px;">
          <h2 style="text-align: left; margin-bottom: 5px; float: left; font-weight: 1000; color: #000;">{{$product->thing_name}}</h2>
        </div>
      </div>

  </div>
  </div>
</div>


<div id="taufik5" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg" style="position:relative;">
    <!-- Modal content-->
    <div class="modal-content" style="text-align: center;" >
      <button type="button" class="close" data-dismiss="modal" style="background: #00A1EF; padding: 15px 18px; color: white; border-radius: 48%; position:absolute; top: -5px; right:-10px; opacity: 1; z-index: 1000;">&times;</button>
        <div class="row">
        <div class="lefts col-lg-5 col-md-5 col-sm-12" style="background: black; color: white; padding-top: 20px;">
          <img src="{{ asset($product_image->image5) }}" alt="" style="width: 70%; padding-top: 10px; height:auto;"></div>
        <div class="rights col-lg-7 col-md-7 col-sm-12" style="margin-top: 25px; height: 300px;">
          <h2 style="text-align: left; margin-bottom: 5px; float: left; font-weight: 1000; color: #000;">{{$product->thing_name}}</h2>
        </div>
      </div>

  </div>
  </div>
</div>

<div id="taufik6" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg" style="position:relative;">
    <!-- Modal content-->
    <div class="modal-content" style="text-align: center;" >
      <button type="button" class="close" data-dismiss="modal" style="background: #00A1EF; padding: 15px 18px; color: white; border-radius: 48%; position:absolute; top: -5px; right:-10px; opacity: 1; z-index: 1000;">&times;</button>
        <div class="row">
        <div class="lefts col-lg-5 col-md-5 col-sm-12" style="background: black; color: white; padding-top: 20px;">
          <img src="{{ asset($product_image->image6) }}" alt="" style="width: 70%; padding-top: 10px; height:auto;"></div>
        <div class="rights col-lg-7 col-md-7 col-sm-12" style="margin-top: 25px; height: 300px;">
          <h2 style="text-align: left; margin-bottom: 5px; float: left; font-weight: 1000; color: #000;">{{$product->thing_name}}</h2>
        </div>
      </div>

  </div>
  </div>
</div>
@endsection

				<!-- javascript -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {

  $('#mainmenu li').click(function() {
    submenu = $(this).data('submenu');
    $('.submenu.' + submenu).fadeToggle();
  })

  $("#colors li").click(function() {
    color = $(this).data("color");
    img = $(this).data("color-img");
    hex = $(this).css("background-color");
    $("#logo-display").css("background-color", color);
    $("#product-image").attr('src', img);
    $("#colors li span").removeClass('glyphicon-ok');
    $(this).children('span').addClass('glyphicon-ok');
    $("#colors li").css('box-shadow', '');
    $(this).css('box-shadow','0 0 0 2px #eee, 0 0 0 4px '+hex);
  });

  $("#sizes li").click(function() {
    $("#sizes li").removeClass('active');
    $(this).addClass('active');
    sizePrice = $(this).data('price');
    if (!sizePrice) {
      sizePrice = 0;
    }
    quantity = $('.quantity').val();
    price = basePrice + sizePrice;
    $('.price h1').text('$' + (price * quantity).toFixed(2));
  });

  $('#add-text').click(function(){
    text = $(this).text();
    if(text == 'Add Text'){
      $(this).text('Remove Text');
    }
    if(text == 'Remove Text'){
      $(this).text('Add Text');
      $("#text-display").val('');
    }
  });

  $('#text-preview-submit').click(function() {
    text = $('#text-preview-input').val();
    $("#text-display").text(text);
  });

  $('#text-preview-sans').click(function() {
    $("#text-display").css("font-family", "sans-serif");
    $("#text-display").css("font-style", "");
  });
  $('#text-preview-serif').click(function() {
    $("#text-display").css("font-family", "serif");
    $("#text-display").css("font-style", "");
  });
  $('#text-preview-italic').click(function() {
    $("#text-display").css("font-family", "serif");
    $("#text-display").css("font-style", "italic");
  });

  $('#text-preview-color').click(function() {
    color = $("#text-preview-color").data("color");
    if (color == "black" || color == "Black" || color == "000000") {
      $("#text-display").css("color", "white");
      $('#text-preview-color').css("background-color", "black");
      $('#text-preview-color').data("color", "white");
    } else {
      $("#text-display").css("color", "black");
      $('#text-preview-color').css("background-color", "white");
      $('#text-preview-color').data("color", "black");
    }
  });

  $('.modal .logo').click(function() {
    src = $(this).attr('src');
    $('.product-options .logo').attr('src', src);
    $('#product-logo').attr('src', src);
    $('#logosModal').modal('hide');
  });

  // preview image logo placement
  resizeLogo();
  resizeZoomLogo();

  var basePrice = 19.95;
  $('.quantity').on('change', function() {
    quantity = $(this).val();
    sizePrice = $('#sizes ul li.active').data('price');
    if (!sizePrice) {
      sizePrice = 0;
    }
    price = basePrice + sizePrice;
    console.log(sizePrice);
    $('.price h1').text('$' + (price * quantity).toFixed(2));
  })

})

window.onresize = function(event) {
  resizeLogo();
  resizeZoomLogo();
};

position = "left_chest";
placement = {
  "left_chest": {
    "width": "9",
    "height": "9",
    "top": "42",
    "left": "62",
    "rotate": "0",
    "skew-x": "0",
    "skew-y": "0"
  }
};

function resizeLogo() {
  var img = document.getElementById('product-image');
  logo = $('#product-logo');
  var width = img.clientWidth;
  var height = img.clientHeight;
  logo.css('height', height * (placement[position].height / 100));
  logo.css('width', width * (placement[position].width / 100));
  logo.css('top', height * (placement[position].top / 100));
  logo.css('left', width * (placement[position].left / 100));
};


// ZOOM ZOOM !!!

$('.product-preview').click(function(){
  $('.zoom-btn').toggleClass('active');
  $(this).toggleClass('activeZoom');
  $('.zoom-view').toggle();
});

$(document).on('mousemove', '.activeZoom', function(event){
  var relX = event.pageX - $(this).offset().left;
  var relY = event.pageY - $(this).offset().top;
  var relBoxCoords = "(" + relX + "," + relY + ")";

  zoomW =  $('.zoom-view').width();
  zoomH =  $('.zoom-view').height();
  $('.zoom-view').css('top',relY-(zoomH/2));
  $('.zoom-view').css('left',relX-zoomW/2);

  width = $(this).width();
  height = $(this).height();
  pX = (relX/width);
  pY = (relY/height);
  zimgW =  $('#zoom-image').width();
  zimgH =  $('#zoom-image').height();
  zX = (zimgW * pX)-(zoomW/1.375);
  zY = (zimgH * pY)-(zoomH/2);
  $('#zoom-image').css('top', '-' + zY + 'px' );
  $('#zoom-image').css('left', '-' + zX + 'px' );
  resizeZoomLogo();
});

function resizeZoomLogo() {
  img = $('#zoom-image');
  logo = $('#zoom-logo');
  width = img.width();
  height = img.height();
  imgX = img.css('left');
  imgY = img.css('top');

  logo.css('height', height * (placement[position].height / 100));
  logo.css('width', width * (placement[position].width / 100));
  logo.css('top', imgY + (height * (placement[position].top / 100)));
  logo.css('left', imgX + (width * (placement[position].left / 100)));

  console.log(imgX);
  console.log((width * (placement[position].left / 100)));

};</script>

				<!-- javascript -->
