@extends('layouts.app')
@section('title')
  {{ $member->product_name }}
@endsection

@section('navbar')
	    <li><a href="/">Home</a></li>
      <li><a href="/about_us">About Us</a></li>
      <li><a href="/services">Scope Of Services</a></li>
      <li><a href="/portfolio">Partners</a></li>
      <li><a href="/team">Team</a></li>
      <li><a href="/contact_us">Contact</a></li>
@endsection

@section('content')
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">{{ $member->product_name }}</h3>
            </div>
            <div class="panel-body">
              <div class="row">

                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="{{ URL::asset($member->product_image) }}" class="img-circle img-responsive"> </div>

                <div class=" col-md-9 col-lg-9 ">
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Designation:</td>
                        <td>{{ $member->product_size }}</td>

                      </tr>
                      <tr>
                        <td>Department:</td>
                        <td>{{ $member->department }}</td>
                      </tr>
                      <tr>
                        <td>Hire date:</td>
                        <td>{{ $member->hire_date }}</td>
                      </tr>

                      <tr>
                        <td>Email</td>
                        <td><a href="mailto:{{ $member->email }}">{{ $member->email }}</a></td>
                      </tr>
                      <tr>
                        <td>Phone Number</td>
                        <td></td>
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>

             <div class="panel-footer">
                    <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary" href="mailto:{{ $member->email }}"><i class="glyphicon glyphicon-envelope"></i></a>
                    <span class="pull-right">

                    </span>
                </div>

          </div>
        </div>
      </div>
    </div>
@endsection
