@extends('admin_layout')
@section('title')
Edit Member Info
@endsection
@section('admin_content')
<ul class="breadcrumb">
  <li>
    <i class="icon-home"></i>
    <a href="index.html">Home</a>
    <i class="icon-angle-right"></i>
  </li>
  <li>
    <i class="icon-edit"></i>
    <a href="#">Forms</a>
  </li>
</ul>

<div class="row-fluid sortable">
  <div class="box span12">
    <h1>Edit Team Member Info</h1>
    <div class="box-content">
      <form class="form-horizontal" method="POST" action="{{URL::to('/edit_product')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <fieldset>
        <div class="control-group">
          <label class="control-label" for="date01">Member Name</label>
          <div class="controls">
          <input type="text" class="input-xlarge" name="product_name" placeholder="Member Name" value="{{ $product->product_name }}" required>
          </div>
        </div>

        <div class="control-group">
				  <label class="control-label" for="fileInput">Image of the product:</label>
				  <div class="controls">
					<input class="input-file uniform_on" name="product_image" id="fileInput" type="file">
				  </div>
				</div>
        <input type="hidden" name="product_image" value="{{ $product->product_image }}"/>

        <div class="control-group">
          <label class="control-label" for="date01">Product Size</label>
          <div class="controls">
          <input value="{{ $product->product_size }}" type="text" class="input-xlarge" name="product_size" placeholder="Category Name" required>
          </div>
        </div>

        <input type="hidden" name="p_id" value="{{ $product->p_id }}">

        <div class="form-actions">
          <button type="submit" class="btn btn-primary">Update</button>
          <button type="reset" class="btn">Cancel</button>
        </div>
        </fieldset>
      </form>

    </div>
  </div><!--/span-->

</div><!--/row-->
@endsection
