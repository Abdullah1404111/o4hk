@extends('layouts.app')
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href="https://fonts.googleapis.com/css?family=Niconne" rel="stylesheet">
  <style>

      /*Portfolio Item*/


      	.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 14px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}

.jx ul {
	margin: 0px auto;
	width: 100%;
}

.jx ul li.nav-item {
	padding: 0px 2.3%;
	text-align: center;
	font-size: 14px;
}

#portfolio {
  padding: 60px 0;
}

#portfolio-flters {
  padding: 0;
  margin: 5px 0 35px 0;
  list-style: none;
  text-align: center;
}

#portfolio-flters li, button {
  border: 0;
  cursor: pointer;
  margin: 15px 20px 15px 10px;
  display: inline-block;
  padding: 5px 5px;
  font-size: 15px;
  line-height: 20px;
  color: #666666;
  border-radius: 4px;
  text-transform: uppercase;
  background: #fff;
  margin-bottom: 5px;
  transition: all 0.3s ease-in-out;
    width:100%:

}

#portfolio-flters li:hover{
  background: #BFDAEF;
  color: #fff;
}

#portfolio-flters button:hover{
  background: #BFDAEF;
  color: #fff;
}

#portfolio-flters li:last-child {
  margin-right: 0;
}


      /*Portfolio Item*/


        body{
          margin:0;
          color:#333;
          background:#0e1013;
          font-family:sans-serif;
        }
        .soc-link a {
            margin-top: 40px;
            font-size: 40px;
            padding: 15px;
        }
        h1.teams{
          padding: 10px!important;
          text-align:center;
          font-family: 'Niconne', cursive;
          font-size:3em;
          color:#637E67!important;
          background: #fff!important;
          margin:5px auto;
          margin-bottom: -20px!important;

      text-shadow:-30px -30px 8px rgba(28,110,164,0);


        }
        #team{
/*
          display:flex;
          flex-wrap: wrap;
          flex-grow:3;
*/
          background:#fff!important;
        }
               #team1{

          display:flex;
          flex-wrap: wrap;
          flex-grow:3;

          background:#fff!important;
        }
       .card {
          width:31%;
          min-width: 200px;
          height: 330px;
          overflow: hidden;
          position: relative;
          /*margin:0 .3% 3% 0;*/
          display:inline-block;
          background:#fff!important;
/*          border-radius:50%;*/
          margin-left:2%;
          margin:5px auto;

/*            border-radius: 15px 50px 30px;*/
        }



        .card img {
          width: 250px;
          height:250px;
          transition:all 1s;
            border-radius:50%;
            margin:0 auto;
        }
        .card:hover img{

            transform: rotate(45deg) translate(130px,140px);
            height: 0px;
            width: 0px;

        }

        .data {
          position: absolute;
          bottom: 5px;
          background: #fff;
          opacity: .8;
          text-align:center;
          width: 70%;
          height: 70px;
          overflow: hidden;
          left: 0;
          right: 0;
          margin: 0 auto;
          padding: 10px 5%;
          box-sizing: border-box;
          opacity: 0.8;
          transition: all 0.4s;
          border-radius: 50px 50px ;
        }

        .card:hover .data {
          width: 80%;
          height: 80%;
          opacity: 0.9;
          padding:50px 10%;
          border:5px solid #BBBBBB;
          border-radius: 50%;

        }

        .data h2 {
          margin: 0 0 5px 0;
          transition:color 0.4s;
          font-size:20px;
        }

        .data p {
          opacity: 0;
          text-align:justify;
          transition: all 0.2s;
        }

        .card:hover .data p,.card:hover .data a {
          opacity: 1;
        }

        .card .data button {
            display: none;
        }

        .card:hover .data button {
            opacity: 1;
            display: block;
            width:80%;
            margin: 10% auto;
        }
        .data a{
          color:black;
          text-decoration:none;
          padding:20px;
          opacity:.1;
          font-size: 2em;
        }
        .data a:hover,.card:hover h2{
          color:#38c;
        }
        i{
        display:block;}

    /*Media query for screens(480-767)*/

         @media only screen and (max-width:767px){
      .card {
          width:60%;
          min-width: 200px;
          height: 300px;
          overflow: hidden;
          position: relative;
          margin:0 .3% 3% 0;
          display:inline-block;
        /*border-radius: 15px 50px 30px;   */
          margin: 0 auto;
          margin-bottom:10px;

        }

        .card img {
          width: 90%;
          height:300px;
          transition:all 1s;
          border-radius:50%;
          margin:0 auto;
        }

        .data h2{
        font-size:16px;
        margin-bottom:2px;

      }
      .data i{
        font-size: 12px;
      }
}
      /*Media query for screens(767-1092)*/

       @media (min-width:767px) and (max-width:1091px){
      .card {
          width:50%;
          min-width: 200px;
          height: 300px;
          overflow: hidden;
          position: relative;
          margin:0 .3% 3% 0;
          display:inline-block;
        /*border-radius: 15px 50px 30px;   */
          margin: 0 auto;
          margin-bottom:10px;

        }

        .card img {
          width: 70%;
          height:300px;
          transition:all 1s;
          border-radius:50%;
          margin:0 auto;
        }
}

      @media (min-width:1092px) and (max-width:1180px){
      .data h2{
        font-size:18px;
            }
      .data i{
        font-size: 12px;
      }
}

@media only screen and (max-width:767px){

  .close {
    right: -20px!important;
    top: -7px!important;
  }

  .modal h2, p {
  	text-align: center!important;
  	float: none!important;
  }

  .modal .rights {
  	width: 100%!important;
  }


}

@media screen and (max-width: 654px)
{
  .thisbtn {
    display: block;
    width: 80%;
    margin-left: 10%!important;
    margin-top: 20px!important;
  }

  #portfolio-flters {
    height: 0px;
    transition: 300ms linear all!important;
  }

  ul#portfolio-flters li {
    display: block;
  }
}

@media screen and (min-width: 655px)
{
  .thisbtn {
    display: none!important;
  }

  #portfolio-flters {
    display: block!important;
    height: auto;
    margin-top: 20px!important;
  }

  ul#portfolio-flters li {
    display: inline!important;
  }
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  width:100%;
  z-index: 1;
    background: antiquewhite;
    opacity: ;

}

.dropdown-content a {
  color: black;
  padding: 5px!important;
  text-decoration: none;
  display: block;
    width:100%;
    border-radius: 4px;
}
      i{
          display: block;
      }
.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}

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
<!--
      <h1 class="teams">O͆u͆r͆ T͆e͆a͆m͆ 🅾🆄🆁 🆃🅴🅰🅼</h1>-->
       <!--<h1 class="teams"> 🅾🆄🆁 🆃🅴🅰🅼</h1>-->
       <header class="section-header">
        <h3 class="section-title">Our Portfolio</h3>
      </header>

    <div class="row">
      <div class="col-lg-12">
        <button type="button" name="button" class="btn btn-primary thisbtn" style="margin: 0 auto;" onclick="hides()">Team</button>
        <ul id="portfolio-flters">
          <li onclick="cardAll()">All</li>
          <li onclick="cardfilter('man')">MANAGEMENT</li>
          <li>
          <div class="dropdown">
            <button>MERCHANDISING &nbsp; P.D</button>
            <div class="dropdown-content">
              <a onclick="cardfilter('div1')" href="#">Division 1</a>
              <a onclick="cardfilter('div2')" href="#">Division 2</a>
              <a onclick="cardfilter('mer')" href="#">Division 3</a>
            </div>
          </div>
          </li>
          <li onclick="cardfilter('fin')">FINANCE &nbsp; PLANNING</li>
          <li>
          <div class="dropdown">
            <button style="width:100px;">QAA<b class="caret"></b></button>
            <div class="dropdown-content">
              <a onclick="cardfilter('qaa')" href="#">INLINE</a>
              <a onclick="cardfilter('qaa')" href="#">INHOUSE</a>
              <a onclick="cardfilter('qaa')" href="#">FRI</a>
            </div>
          </div>
          </li>
          
          <li onclick="cardfilter('sam')">SAMPLE PATTERN & P.D</li>
          <li onclick="cardfilter('hra')">HR &nbsp; ADMIN</li>
          <li onclick="cardfilter('sew')">SEW FREE</li>
        </ul>
      </div>
    </div>

        <div class="row">
        <div class="col-lg-12">
<section id="team">
        <div class="card border-0 man">
          <img src="img/CEO.jpg" alt="Emon" />
          <div class="data">
            <h2>Md. Taufikul Ahsan</h2>
            <i>CEO</i>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#taufik" style="outline: none;">View Details</button>
          </div>
        </div>
</section>
<section id="team1">
       @foreach($members as $member)
        <div class="card border-0 div2">
          <img src="{{ $member->product_image }}" alt="{{ $member->nickName }}"/>
          <div class="data ">
            <h2>{{ $member->product_name}}</h2>
            <i>{{ $member->product_size }}</i>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="" style="outline: none;">View Details</button>
          </div>
        </div>
        @endforeach

</section>



</main>

<!-- Modal -->
<div id="" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg" style="position:relative;">
    <!-- Modal content-->
    <div class="modal-content" style="text-align: center; ">
      <button type="button" class="close" data-dismiss="modal" style="background: #00A1EF; padding: 15px 18px; color: white; border-radius: 48%; position:absolute; top: -5px; right:-10px; opacity: 1; z-index: 1000;">&times;</button>
        <div class="row">
        <div class="lefts col-lg-5 col-md-5 col-sm-12" style="background: black; color: white; padding-top: 20px;">
          <img src="img/members/biswajit.png" alt="Mr. Biswajit" style="width: 70%; padding-top: 10px; height:auto; border-radius: 50%;">
          <div class="soc-link">
            <!-- <h3 style="background: #555; margin-top: 25px; border-radius: 40px; padding: 10px;">Follow Me on Twitter</h3> -->
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-linkedin"></a>
          </div>
        </div>
        <div class="rights col-lg-7 col-md-7 col-sm-12" style="margin-top: 25px;">
          <h2 style="text-align: left; margin-bottom: 5px; float: left; font-weight: 700;color: #000;">Mr. Biswajit Das</h2>
          <p style="text-align: left; clear: both;">Merchandiser</p>
          <div style="height: 400px; overflow-y: scroll;">
          <p style="text-align:left">Lorem ipsum dolor sit amet consectetur adipiscing elit Etiam sedesmi. Consectetur elit placerat mollis donec dolor.Lorem ipsum dolor sit amet consectetur adipiscing elit Etiam sedesmi. Consectetur elit placerat mollis donec dolor.Lorem ipsum dolor sit amet consectetur adipiscing elit Etiam sedesmi. Consectetur elit placerat mollis donec dolor.Lorem ipsum dolor sit amet consectetur adipiscing elit Etiam sedesmi. Consectetur elit placerat mollis donec dolor.Lorem ipsum dolor sit amet consectetur adipiscing elit Etiam sedesmi. Consectetur elit placerat mollis donec dolor.
          Lorem ipsum dolor sit amet consectetur adipiscing elit Etiam sedesmi. Consectetur elit placerat mollis donec dolor.Lorem ipsum dolor sit amet consectetur adipiscing elit Etiam sedesmi. Consectetur elit placerat mollis donec dolor.Lorem ipsum dolor sit amet consectetur adipiscing elit Etiam sedesmi. Consectetur elit placerat mollis donec dolor.
        Lorem ipsum dolor sit amet consectetur adipiscing elit Etiam sedesmi. Consectetur elit placerat mollis donec dolor.Lorem ipsum dolor sit amet consectetur adipiscing elit Etiam sedesmi. Consectetur elit placerat mollis donec dolor.</p>
        </div>
        </div>
      </div>

  </div>
  </div>
</div>

                        <!--Modal-->


                      <!--Modal-->
@endsection

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