@extends('admin_layout')
@section('title')
Add Partner
@endsection
@section('admin_content')

<div class="row" style="margin-left: 10px;">
      <h1>Add Partner</h1>
      <form class="form-horizontal" method="POST" action='/add_partner' enctype="multipart/form-data">
        {{ csrf_field() }}
        <fieldset>
        <div class="control-group">
          <label class="control-label" for="date01">Partner Name</label>
          <div class="controls">
          <input type="text" class="input-xlarge" name="partner_name" required>
          </div>
        </div>

        <div class="control-group">
				  <label class="control-label" for="fileInput">Image of the partner:</label>
				  <div class="controls">
					<input class="input-file uniform_on" name="parnter_image" id="fileInput" type="file">
				  </div>
				</div>


        <div class="form-actions">
          <button type="submit" class="btn btn-primary">Add Partner</button>
          <button type="reset" class="btn">Cancel</button>
        </div>
        </fieldset>
      </form>

</div><!--/row-->
@endsection
