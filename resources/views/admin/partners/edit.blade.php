@extends('admin_layout')
@section('title')
Edit Partner Info
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
    <h1>Edit Partner Info</h1>
    <div class="box-content">
      <form class="form-horizontal" method="POST" action="{{URL::to('/edit_partner')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <fieldset>
        <div class="control-group">
          <label class="control-label" for="date01">Partner Name</label>
          <div class="controls">
          <input type="text" class="input-xlarge" name="partner_name" placeholder="Partner Name" value="{{ $partner->partner_name }}" required>
          </div>
        </div>

        <div class="control-group">
				  <label class="control-label" for="fileInput">Image of the partner:</label>
				  <div class="controls">
					<input class="input-file uniform_on" name="partner_image" id="fileInput" type="file">
				  </div>
				</div>
        <input type="hidden" name="partner_image" value="{{ $partner->partner_img }}"/>


        <input type="hidden" name="p_id" value="{{ $partner->partner_id }}">

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
