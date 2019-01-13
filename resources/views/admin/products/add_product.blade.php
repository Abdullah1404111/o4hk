@extends('admin_layout')
@section('title')
Add Member
@endsection
@section('admin_content')

<div class="row" style="margin-left: 10px;">
      <h1>Add Team Member</h1>
      <form class="form-horizontal" method="POST" action="{{URL::to('/add_team')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <fieldset>
        <div class="control-group">
          <label class="control-label" for="date01">Member Name</label>
          <div class="controls">
          <input type="text" class="input-xlarge" name="product_name" required>
          </div>
        </div>

        <div class="control-group">
          <label class="control-label" for="date01">Member Designation</label>
          <div class="controls">
          <input type="text" class="input-xlarge" name="product_size" required>
          </div>
        </div>

        <div class="control-group">
          <label class="control-label" for="date01">Department</label>
          <div class="controls">
          <input type="text" class="input-xlarge" name="department">
          </div>
        </div>

        <div class="control-group">
          <label class="control-label" for="date01">Hire date:</label>
          <div class="controls">
          <input style="height: 30px;" type="date" class="input-xlarge" name="hire_date">
          </div>
        </div>

        <div class="control-group">
          <label class="control-label" for="date01">Email:</label>
          <div class="controls">
          <input type="text" class="input-xlarge" name="email">
          </div>
        </div>

        <div class="control-group">
				  <label class="control-label" for="fileInput">Image of the member:</label>
				  <div class="controls">
					<input class="input-file uniform_on" name="product_image" id="fileInput" type="file">
				  </div>
				</div>


        <div class="form-actions">
          <button type="submit" class="btn btn-primary">Add Member</button>
          <button type="reset" class="btn">Cancel</button>
        </div>
        </fieldset>
      </form>

</div><!--/row-->
@endsection
