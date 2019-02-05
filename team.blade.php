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

#portfolio-flters li {
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

}

#portfolio-flters li:hover{
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
       <h1 class="teams"> 🅾🆄🆁 🆃🅴🅰🅼</h1>

	    <!-- <div class="topnav" id="myTopnav">
		  <a href="#home">MANAGEMENT</a>
		  <a href="#news">MERCHANDISING & P.D</a>
		  <a href="#contact">FINANCE & PLANNING</a>
		  <a href="#about">QAA</a>
		  <a href="#about">SAMPLE PATTERN & P.D</a>
		  <a href="#about">HR & ADMIN</a>
		  <a href="#about">SEW FREE</a>

		  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
		    <i class="fa fa-bars"></i>
		  </a>
		</div> -->
    <div class="row">
      <div class="col-lg-12">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">MANAGEMENT</li>
          <li data-filter=".filter-app">MERCHANDISING & P.D</li>
          <li data-filter=".filter-card">FINANCE & PLANNING</li>
          <li data-filter=".filter-web">QAA</li>
          <li data-filter=".filter-web">SAMPLE PATTERN & P.D</li>
          <li data-filter=".filter-web">HR & ADMIN</li>
          <li data-filter=".filter-web">SEW FREE</li>
        </ul>
      </div>
    </div>

        <div class="row">
        <div class="col-lg-12">
          <!-- <ul id="portfolio-flters">

            <li data-filter=".filter-app">Management</li>

             <li class="dropdown">
                <a href="#lala" class="dropdown-toggle" data-toggle="dropdown" >
                   Merchandising & P.D
                   <b class="caret"></b>
                </a>
                <ul class="dropdown-menu" role="listbox" >
                   <li style="margin:0;padding:10px; width:100%;text-align:center;"><a href="#lala1" role="option">Division 1</a></li>
                   <li style="margin:0;padding:10px; width:100%;text-align:center;"><a href="#lala2" role="option">Division 2</a></li>
                   <li style="margin:0;padding:10px; width:100%;text-align:center;"><a href="#lala3" role="option">Division 3</a></li>
                </ul>
             </li>
            <li data-filter=".filter-web">Finance & Planning</li>
            <li data-filter=".filter-web">QAA</li>
            <li class="dropdown">
                <a href="#lala" class="dropdown-toggle" data-toggle="dropdown" >
                   QAA
                   <b class="caret"></b>
                </a>
                <ul class="dropdown-menu" role="listbox" >
                   <li style="margin:0;padding:10px; width:100%;text-align:center;"><a href="#lala1" role="option">In-Line</a></li>
                   <li style="margin:0;padding:10px; width:100%;text-align:center;"><a href="#lala2" role="option">In-House</a></li>
                   <li style="margin:0;padding:10px; width:100%;text-align:center;"><a href="#lala3" role="option">FRI</a></li>
                </ul>
             </li>
            <li data-filter=".filter-web">Sample Pattern & P.D</li>
            <li data-filter=".filter-web">HR & Admin</li>
              <li data-filter=".filter-web">Sew Free</li>
          </ul>
        </div>
      </div> -->
        <section id="team">
        <div class="card card border-0 filter-app">
          <img src="img/CEO.jpg" alt="Emon" />
          <div class="data">
            <h2>Md. Taufikul Ahsan</h2>
            <i>CEO</i>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#taufik" style="outline: none;">View Details</button>
          </div>
        </div>

        <div class="card card border-0">
          <img src="img/emon.jpg" alt="Emon" />
          <div class="data ">
            <h2>Mr. Emon</h2>
            <i>Website Developer</i>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal" style="outline: none;">View Details</button>
          </div>
        </div>

        </section>



</main>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg" style="position:relative;">
    <!-- Modal content-->
    <div class="modal-content" style="text-align: center; ">
      <button type="button" class="close" data-dismiss="modal" style="background: #00A1EF; padding: 15px 18px; color: white; border-radius: 48%; position:absolute; top: -5px; right:-10px; opacity: 1; z-index: 1000;">&times;</button>
        <div class="row">
        <div class="lefts col-lg-5 col-md-5 col-sm-12" style="background: black; color: white; padding-top: 20px;">
          <img src="img/emon.jpg" alt="Mr. Emon" style="width: 70%; padding-top: 10px; height:auto; border-radius: 50%;">
          <div class="soc-link">
            <!-- <h3 style="background: #555; margin-top: 25px; border-radius: 40px; padding: 10px;">Follow Me on Twitter</h3> -->
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-linkedin"></a>
          </div>
        </div>
        <div class="rights col-lg-7 col-md-7 col-sm-12" style="margin-top: 25px;">
          <h2 style="text-align: left; margin-bottom: 5px; float: left; font-weight: 700;color: #000;">Md. Mostofa Kamal</h2>
          <p style="text-align: left; clear: both;">Website Developer</p>
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


<!-- Modal -->
<div id="taufik" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg" style="position:relative;">
    <!-- Modal content-->
    <div class="modal-content" style="text-align: center; ">
      <button type="button" class="close" data-dismiss="modal" style="background: #00A1EF; padding: 15px 18px; color: white; border-radius: 48%; position:absolute; top: -5px; right:-10px; opacity: 1; z-index: 1000;">&times;</button>
        <div class="row">
        <div class="lefts col-lg-5 col-md-5 col-sm-12" style="background: black; color: white; padding-top: 20px;">
          <img src="img/CEO.jpg" alt="Mr. Taufik" style="width: 70%; padding-top: 10px; height:auto; border-radius: 50%;">
          <div class="soc-link">
            <!-- <h3 style="background: #555; margin-top: 25px; border-radius: 40px; padding: 10px;">Follow Me on Twitter</h3> -->
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-linkedin"></a>
          </div>
        </div>
        <div class="rights col-lg-7 col-md-7 col-sm-12" style="margin-top: 25px;">
          <h2 style="text-align: left; margin-bottom: 5px; float: left; font-weight: 1000; color: #000;">Md. Taufikul Ahsan</h2>
          <p style="text-align: left; clear: both;">Chief Executive Officer</p>
          <div style="height: 400px; overflow-y: scroll;">
          <p style="text-align: left;">This firm is brain child dream of Mohammed Taufik Ahsan who is the founder of this company and also CEO and President. About this firm Mr. Ahsan said that, “Capitalizing my last 18 + years of experience in Apparel Manufacturing, Product Development, Innovation and Marketing thenI took on a new challenge and have established October4 HK Ltd He also said that, Things are Going Great and exactly as planned at O4HL, i have one of the best team in the industry and i am so proud of my team. yes some time they make mistakes when they are doing something for the first time but the best part is i managed to let them learn from it. He said, Myself and the entire team are fully convinced and motivated than ever to be able to do even better, and we know that our best are yet to come.” About the timeline of this firm, Mr. Ahsan said- “before established O4HL, I was hired by the US based leading Seam tape and Sewfree Adhesives manufacturer Bemis as to utilize my manufacturing and production development experience to bring a different dynamic to their whole marketing process."</p>
        </div>
        </div>
      </div>

  </div>
  </div>
</div>
@endsection
