@extends('admin_layout')
@section('title')
Edit Product Info
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
    <h1>Edit thing Info</h1>
    <div class="box-content">
      <form class="form-horizontal" method="POST" action="{{URL::to('/edit_product')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <fieldset>
        <div class="control-group">
          <label class="control-label" for="date01">Product Name</label>
          <div class="controls">
          <input type="text" class="input-xlarge" name="thing_name" placeholder="thing Name" value="{{ $thing->thing_name }}" required>
          </div>
        </div>

        <div class="control-group">
						<label class="control-label" for="selectError3">Product Category</label>
            <?php
              $partners = DB::table('partners')->get();
              // foreach ($partners as $partner) {
              //   if ($partner->partner_id == $thing->partner_id) {
              //     echo "Hello world!!".$partner->partner_id;
              //   }
              // }
            ?>

						<div class="controls">
						  <select id="selectError3" name="partner_id">
              @foreach($partners as $partner)
							  <option value="{{ $partner->partner_id }}"
                  @if($partner->partner_id == $thing->partner_id)
                    selected
                  @elif

                  @endif
                >{{ $partner->partner_name }}</option>

              @endforeach
						  </select>
						</div>
				</div>

        <div class="control-group hidden-phone">
          <label class="control-label" for="textarea2" required>Product Long Description</label>
          <div class="controls">
          <textarea class="cleditor" id="textarea2" rows="3" name="long_desc" placeholder="Product Description" required>{{$thing->desc}}</textarea>
          </div>
        </div>

        <div class="control-group">
				  <label class="control-label" for="fileInput">Image of the Product:</label>
				  <div class="controls">
					<input class="input-file uniform_on" name="thing_image" id="fileInput" type="file">
				  </div>
				</div>
        <input type="hidden" name="thing_image" value="{{ $thing->thing_image }}"/>


        <input type="hidden" name="p_id" value="{{ $thing->thing_id }}">

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
