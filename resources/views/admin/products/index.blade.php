@extends('admin_layout')
@section('title')
All Team Members
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
            <th>Member Id</th>
            <th>Member Name</th>
            <th>Member Designation</th>
            <th>Member Image</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
        <tr>
          <td>{{ $product->p_id }}</td>
          <td>{{ $product->product_name }}</td>
          <td>{{ $product->product_size }}</td>
          <td><img class="img-responsive" style='max-height=200px; max-width=200px;' src="{{ $product->product_image }}" alt="product image"></td>
          <td class="center">            
            <a class="btn btn-info" href='/edit_product/{{ $product->p_id}}'>
              <i class="halflings-icon white edit"></i>
            </a>
            <!-- **************** -->
            <a class="btn btn-danger" href='/delete_product/{{ $product->p_id}}' id="delete"><i class="halflings-icon white trash"></i></a>
          </td>
        </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div><!--/span-->

</div><!--/row-->

@endsection
