@extends('layouts.app')

@section('title')
  About Us
@endsection
@section('navbar')
      <li><a href="/">Home</a></li>
          <li class="menu-active"><a href="/about_us">About Us</a></li>
          <li><a href="/services">Scope of Services</a></li>
          <li><a href="/portfolio">Partners</a></li>
         <li><a href="/team">Team</a></li>
      <!--    <li class="menu-has-children"><a href="/team">Team</a>-->
      <!--      <ul>-->
      <!--        <li><a href="#">Management</a></li>-->
      <!--        <li><a href="#">Merchandising & P.D</a></li>-->
      <!--        <li><a href="#">QAA</a></li>-->
      <!--        <li><a href="#">Sample,Pattern & P.D</a></li>-->
      <!--        <li><a href="#">Sew Free & P.D</a></li>-->
      <!--        <li><a href="#">H.R & Admin</a></li>-->
      <!--      </ul>-->
      <!--</li>-->
          <li><a href="/contact_us">Contact</a></li>
@endsection
@section('content')

<style type="text/css">
  @media(max-width: 575px) {
  .noBorder
  {
    border-right: 0px!important;
    border-bottom: 3px solid green;
    padding-bottom: 10px;
  }

}
mark{
    color:green;
}
</style>
<main id="main">

  <!--==========================
    About Us Section
  ============================-->
  <section id="about">
    <div class="container">

      <header class="section-header">
        <h3>About Us</h3>
      </header>

      <div class="row about-cols">

        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 wow fadeInUp noBorder" style="border-right: 3px solid green;">
              <img src="img/team-2.bmp" style="height: 200px; width: 200px; border-radius: 50%; margin: 0px auto;" alt="" class="img-fluid">
        </div>

        <div class="col-lg-9 col-md-8 col-sm-6 col-xs-6 wow fadeInUp"><p style="margin:30px 20px;">This firm is brain child dream of <strong>Mohammed Taufik Ahsan</strong> who is the founder of this company and also CEO and President. About this firm Mr. Ahsan said that, “Capitalizing my last 18 + years of experience in Apparel Manufacturing, Product Development, Innovation and Marketing thenI took on a new challenge and have established <mark>October4 HK Ltd</mark> He also said that, Things are Going Great and exactly as planned at O4HL, i have one of the best team in the industry and i am so proud of my team. yes some time they make mistakes when they are doing something for the first time but the best part is i managed to let them learn from it. He said, Myself and the entire team are fully convinced and motivated than ever to be able to do even better, and we know that our best are yet to come.” About the timeline of this firm, Mr. Ahsan said- “before established O4HL, I was hired by the US based leading Seam tape and Sewfree Adhesives manufacturer Bemis as to utilize my manufacturing and production development experience to bring a different dynamic to their whole marketing process."</p>
        </div>
        <!-- <div class="col-md-4 wow fadeInUp">
          <div class="about-col">
            <div class="img">
              <img src="img/about-mission.jpg" alt="" class="img-fluid">
              <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
            </div>
            <h2 class="title"><a href="#">Our Mission</a></h2>
            <p style="min-height: 200px;">
              October 04 Ltd. is developing and maintaining its standard in order to ensure continuous progress. October 04 Ltd. is committed to develop high quality garments to our customers while providing a safe, healthy workplace for our employees and acting as a responsible member of our community.
            </p>
          </div>
        </div>

        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
          <div class="about-col">
            <div class="img">
              <img src="img/about-plan.jpg" alt="" class="img-fluid">
              <div class="icon"><i class="ion-ios-list-outline"></i></div>
            </div>
            <h2 class="title"><a href="#">Our Plan</a></h2>
            <p style="min-height: 200px;">
              We beleive in people and their unlimited potential. In content and in focusing on problem solving in team, for effective performance, in the power of the intellect. We endevour to select, train and coach people to obtain higher responsibilities.
            </p>
          </div>
        </div>

        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
          <div class="about-col">
            <div class="img">
              <img src="img/about-vision.jpg" alt="" class="img-fluid">
              <div class="icon"><i class="ion-ios-eye-outline"></i></div>
            </div>
            <h2 class="title"><a href="#">Our Vision</a></h2>
            <p style="min-height: 200px;">
              October 04 Ltd. is developing and maintaining its standard in order to ensure continuous progress. October 04 Ltd. is committed to develop high quality garments to our customers while providing a safe, healthy workplace for our employees and acting as a responsible member of our community.
            </p>
          </div>
        </div> -->

      </div>

    </div>
  </section><!-- #about -->
</main>
@endsection
