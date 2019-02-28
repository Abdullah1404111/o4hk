@extends('admin_layout')
@section('title')
All Team Partners
@endsection

@section('admin_content')
<ul class="breadcrumb">
  <li>
    <i class="icon-home"></i>
    <a href="index.html">Home</a>
    <i class="icon-angle-right"></i>
  </li>
  <li><a href="#">Tables</a></li>
</ul>

<div class="row-fluid sortable">
  <div class="box span12">
    <div class="box-content">
      <table class="table table-responsive table-striped table-bordered bootstrap-datatable datatable">
        <thead>
          <tr>
            <th>Partner Id</th>
            <th>Partner Name</th>
            <th>Partner Designation</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
        @foreach($partners as $partner)
        <tr>
          <td>{{ $partner->partner_id }}</td>
          <td>{{ $partner->partner_name }}</td>
          <td><img class="img-responsive" style='height=100px; width=100px;' src="{{ $partner->partner_img }}" alt="partner image"></td>
          <td class="center">
            <a class="btn btn-info" href='/edit_partner/{{ $partner->partner_id}}'>
              <i class="halflings-icon white edit"></i>
            </a>
            <!-- **************** -->
            <a class="btn btn-danger" href='/delete_partner/{{ $partner->partner_id}}' id="delete"><i class="halflings-icon white trash"></i></a>
          </td>
        </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div><!--/span-->

</div><!--/row-->

@endsection
