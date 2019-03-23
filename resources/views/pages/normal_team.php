@extends('layouts.app')
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
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
        #team{
          display:flex;
          flex-wrap: wrap;
          flex-grow:3;
          background:black!important;
        }
        .card {
          width:31%;
          min-width: 200px;
          height: 300px;
          overflow: hidden;
          position: relative;
          /*margin:0 .3% 3% 0;*/
          display:inline-block;
          background:black!important;
          border-radius:50%;
          margin-left:2%;
          
/*            border-radius: 15px 50px 30px;*/
        }

       

        .card img {
          width: 300px;
          height:300px;
          transition:all 1s;
            border-radius:50%;
            margin:0 auto;
        }
        .card:hover img{
         transform:translateX(180px) rotate(60deg);
            transform: rotate(45deg) translateX(180px);
            height: 0px;
            width: 0px;
            
        }

        .data {
          position: absolute;
          bottom: 0;
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
          width: 100%;
          height: 100%;
          bottom: 0;
          opacity: 0.9;
          padding:30px 10%;
            border:10px solid #BBBBBB;
            border-radius: 20%;
            
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
        <section id="team">
        <div class="card">
          <img src="img/CEO.jpg" alt="CEO" />
          <div class="data">
            <h2>MD. Taufikul Ahsan</h2>
            <i>CEO</i>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Etiam sedesmi. Consectetur elit placerat mollis donec dolor.</p>
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-linkedin"></a>
          </div>
        </div>
        <div class="card">
          <img src="img/emon.jpg" alt="Emon" />
          <div class="data">
            <h2>Mostofa Kamal Emon</h2>
            <i>Website Developer</i>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Etiam sedesmi. Consectetur elit placerat mollis donec dolor.</p>
            <a href="www.google.com" class="fa fa-facebook"></a>
            <a href="www.google.com" class="fa fa-twitter"></a>
            <a href="www.google.com" class="fa fa-linkedin"></a>
          </div>
        </div>
        <div class="card">
          <img src="img/emon.jpg" alt="Emon" />
          <div class="data">
            <h2>Mostofa Kamal Emon</h2>
            <i>Website Developer</i>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Etiam sedesmi. Consectetur elit placerat mollis donec dolor.</p>
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-linkedin"></a>

          </div>
        </div>
        </section>
        

</main>




@endsection