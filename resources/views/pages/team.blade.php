@extends('layouts.app')
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>


        .our-team{
            padding:40px;
            background: antiquewhite;
            text-align: center;
            position: relative;
            overflow: hidden;
            min-height: 350px;
            margin-bottom:10px;
        }



        .our-team .pic{
          display: inline-block;

          height: 130px;
            width:130px;

            margin-bottom: 50px;

            position: relative;
            z-index: 1;
           }
            .our-team .pic:before{
            content:"";
            width:100%;
            height: 0;
            border-radius: 50%;
            background: #eb1568;
            position: absolute;
            bottom: 135%;
            right:0;
            left:0;
            transform: scale(3);
            transition: all 0.3s linear 0s;
        }

        .our-team:hover .pic:before{
            height: 100%;
        }

        .our-team .pic:after{
            content: "";
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: #ee4266;
            position: absolute;
            top:0;
            left: 0;
            z-index: -1;

        }

        .our-team .pic img{
            width: 100%;
            height: auto;
            border-radius: 50%;
            transform: scale(1);
            transition: all 0.9s ease 0s;
        }

        .our-team:hover .pic img{
            box-shadow: 0 0 0 14px #f7f5ec;
            transform: scale(0.7);
        }


        .our-team .team-content{
            margin-bottom: 30px;
        }

        .our-team .title{
            font-size: 22px;
            font-weight: 700;
            color: #4e5052;
            letter-spacing: 1px;
            text-transform: capitalize;
            margin-bottom: 5px;

        }

        .our-team .post{
            display: block;
            font-size: 15px;
            color: #4e5052;
            text-transform: capitalize;

        }
        .our-team .social{
            width: 100%;
            padding:0;
            margin: 0;
            background: #eb1768;
            position: absolute;
            bottom: -100px;
            left: 0;
            transition: all 0.5s ease 0s;
        }

        .our-team .social li{
            display: inline-block;
        }

        .our-team:hover .social{
            bottom:0;
        }

        .our-team:hover .social li{
            display: inline-block;


        }

         .our-team:hover .social li a{
            display: block;
            padding: 10px;
            font-size:17px;
            color:white;
            transition: all 0.3s ease 0s;
        }

        .our-team .social li a:hover{
            color:#eb1768;
            background:#f7f5ec;
            text-decoration:none;
        }


        .our-team .pic .link-preview,
        .our-team .pic .link-details {
          position: absolute;
          display: inline-block;
          opacity: 0;
          line-height: 1;
          text-align: center;
          width: 30px;
          height: 30px;
          background: #fff;
          border-radius: 50%;
          transition: 0.2s linear;
        }

        .our-team .pic .link-preview i,
        .our-team .pic .link-details i {
          padding-top: 6px;
          font-size: 30px;
          color: #333;
        }

        .our-team .pic .link-preview {
          left: calc(50% - 38px);
          top: calc(50% - 18px);
        }

        .our-team .pic .link-details {
          right: calc(50% - 38px);
          top: calc(50% - 18px);
        }

        .our-team .pic:hover .link-preview {
          opacity: 1;
          left: calc(50% - 44px);
        }

        .our-team .pic:hover .link-details {
          opacity: 1;
          right: calc(50% - 44px);
        }
        .btn-group button{
        	margin-bottom: 20px;
        	margin-left:60px;
        }
        .dropdown-menu .dropdown-item{
        opacity:.8;
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
  <section id="portfolio" class="section-bg">
    <div class="container">
      <div class="section-header">
        <h3>Team</h3>
        <p>The following persons are the main and leading team members of the company</p>
      </div>

 <div class="btn-group ">
  <button class="btn btn-info btn-lg" type="button">
    Team
</button>
<button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only"></span>
</button>
<div class="dropdown-menu" style="height: 30px;">
    <ul id="portfolio-flters">
        <li data-filter="*" class="dropdown-item" style="margin: 0px; padding:5px;">All</li>
        <li data-filter=".MAN" class="dropdown-item" style="margin: 0px; padding:5px;">Management</li>
        <li data-filter=".filter-merchandising" class="dropdown-item" style="margin: 0px; padding:5px;">Merchandising & P.D</li>
         <li data-filter=".filter-qaa" class="dropdown-item" style="margin: 0px; padding:5px;">QAA</li>
         <li data-filter=".filter-sample" class="dropdown-item" style="margin: 0px; padding:5px;">R & D</li>
         <!-- <li data-filter=".filter-sew" class="dropdown-item" style="margin: 0px; padding:5px;">Sew Free</li> -->
         <li data-filter=".filter-hr" class="dropdown-item" style="margin: 0px; padding:5px;">Accounts,HR & Admin</li>
    </ul>
</div>
</div>

    <div class="container">
        <div class="row portfolio-container">
          @foreach($members as $member)
            <div class="prod col-md-4 col-sm-6 col-lg-3 col-xs-12 {{ $member->s_key }} wow fadeInUp portfolio-item" data-wow-delay="0.2s">
                <div class="our-team" style="min-height: 380px!important;">
                    <div class="pic">
                        <img src="{{ $member->product_image }}" alt="Emon" >
                        <a href="{{ $member->product_image }}" class="link-preview" data-lightbox="portfolio" data-title="{{ $member->product_name }}" title="Preview"><i class="fa fa-file-image-o fa-2x" aria-hidden="true" style="font-size: 16px;"></i></a>

                        <a href="/view_member/{{ $member->p_id }}" class="link-details" title="More Details"><i class="fa fa-info-circle" aria-hidden="true" style="font-size: 20px;"></i></a>

                    </div>
                    <div class="team-content">
                        <h3 class="title" style="min-height: 52px;">{{ $member->nickName }}</h3>
                        <hr>
                        <span class="post">{{ $member->product_size }}</span>
                    </div>
                    <ul class="social">
                        <li><a href="#" class="fa fa-facebook"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-google-plus"></a></li>
                        <li><a href="#" class="fa fa-linkedin"></a></li>
                    </ul>
                </div> 
              </div>
          @endforeach
        </div>
    </div>

       <!-- End of row -->

</div> <!-- End of Container -->

  </section><!-- #team -->

</main>




@endsection
