@extends('admin_layout')
@section('title')
All Products
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
            <th>Product Id</th>
            <th>Product Name</th>
            <th>Product Image</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
        @foreach($things as $thing)
        <tr>
          <td>{{ $thing->thing_id }}</td>
          <td>{{ $thing->thing_name }}</td>
          <td><img class="img-responsive" style='height=100px; width=100px;' src="{{ $thing->thing_image }}" alt="thing image"></td>
          <td class="center">
            <a class="btn btn-info" href='/edit_product/{{ $thing->thing_id}}'>
              <i class="halflings-icon white edit"></i>
            </a>
            <!-- **************** -->
            <a class="btn btn-danger" href='/delete_prod/{{ $thing->thing_id}}' id="delete"><i class="halflings-icon white trash"></i></a>
            <a class="btn btn-danger" href='/add_product_img/{{ $thing->thing_id}}' id="addImg">Img</i></a>
          </td>
        </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div><!--/span-->

</div><!--/row-->

@endsection
