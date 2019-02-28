@extends('admin_layout')
@section('title')
Add Product
@endsection
@section('admin_content')

<div class="row" style="margin-left: 10px;">
      <h1>Add Product</h1>
      <form class="form-horizontal" method="POST" action='/add_product' enctype="multipart/form-data">
        {{ csrf_field() }}
        <fieldset>
        <div class="control-group">
          <label class="control-label" for="date01">Product Name</label>
          <div class="controls">
          <input type="text" class="input-xlarge" name="product_name" required>
          </div>
        </div>

        <div class="control-group">
						<label class="control-label" for="selectError3">Product Category</label>
            <?php
              $partners = DB::table('partners')->get();
            ?>
						<div class="controls">
						  <select id="selectError3" name="partner_id">
              @foreach($partners as $partner)
							  <option value="{{ $partner->partner_id }}">{{ $partner->partner_name }}</option>
              @endforeach
						  </select>
						</div>
				</div>

        <div class="control-group hidden-phone">
          <label class="control-label" for="textarea2" required>Product Long Description</label>
          <div class="controls">
          <textarea class="cleditor" id="textarea2" rows="3" name="long_desc" placeholder="Product Description" required></textarea>
          </div>
        </div>

        <div class="control-group">
				  <label class="control-label" for="fileInput">Image of the Product:</label>
				  <div class="controls">
					<input class="input-file uniform_on" name="product_image" id="fileInput" type="file">
				  </div>
				</div>


        <div class="form-actions">
          <button type="submit" class="btn btn-primary">Add Product</button>
          <button type="reset" class="btn">Cancel</button>
        </div>
        </fieldset>
      </form>

</div><!--/row-->
@endsection
