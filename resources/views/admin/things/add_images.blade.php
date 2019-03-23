@extends('admin_layout')
@section('title')
Add Product
@endsection
@section('admin_content')

<div class="row" style="margin-left: 10px;">
      <h1>Add Product</h1>
      <form class="form-horizontal" method="POST" action="/add_product_images" enctype="multipart/form-data">
        {{ csrf_field() }}
        <fieldset>


		<div class="control-group">
		  <label class="control-label" for="fileInput">Add more images of the product:</label>
		  <div class="controls"><br>
      <input type="hidden" name="product_id" value="{{$t_id}}">
			first image:
      <input class="input-file uniform_on" onchange="showImage1.call(this)" name="image1" id="fileInput" type="file"><br>
			second image:
      <input class="input-file uniform_on" onchange="showImage2.call(this)" name="image2" id="fileInput" type="file"><br>
			third image:
      <input class="input-file uniform_on" onchange="showImage3.call(this)" name="image3" id="fileInput" type="file"><br>
      fourth image:
      <input class="input-file uniform_on" onchange="showImage4.call(this)" name="image4" id="fileInput" type="file"><br>
      fifth image:
      <input class="input-file uniform_on" onchange="showImage5.call(this)" name="image5" id="fileInput" type="file"><br>
      sixth image:
      <input class="input-file uniform_on" onchange="showImage6.call(this)" name="image6" id="fileInput" type="file"><br>

      <!-- <img src="" style="display: none; height:auto; width: 33%;"  id="image1">
      <img src="" style="display: none; height:auto; width: 33%;"  id="image2">
      <img src="" style="display: none; height:auto; width: 33%;"  id="image3"> -->
		  </div>
		</div>

        <div class="form-actions">
          <button type="submit" class="btn btn-primary">Add Product Images</button>
          <button type="reset" class="btn">Cancel</button>
        </div>
        </fieldset>
      </form>

</div><!--/row-->

      <script type="text/javascript">
        function showImage()
        {
          if (this.files && this.files[0]) {
            var obj = new FileReader();
            obj.onload = function(data) {
              var image = document.getElementById("image");
              // alert(data.target.result);
              image.src = data.target.result;
              image.style.display = "block";
            }

            obj.readAsDataURL(this.files[0]);
          }
        }

        function showImage1()
        {
          if (this.files && this.files[0]) {
            var obj = new FileReader();
            obj.onload = function(data) {
              var image = document.getElementById("image1");
              // alert(data.target.result);
              image.src = data.target.result;
              image.style.display = "inline";
            }

            obj.readAsDataURL(this.files[0]);
          }
        }

        function showImage2()
        {
          if (this.files && this.files[0]) {
            var obj = new FileReader();
            obj.onload = function(data) {
              var image = document.getElementById("image2");
              // alert(data.target.result);
              image.src = data.target.result;
              image.style.display = "inline";
            }

            obj.readAsDataURL(this.files[0]);
          }
        }

        function showImage3()
        {
          if (this.files && this.files[0]) {
            var obj = new FileReader();
            obj.onload = function(data) {
              var image = document.getElementById("image3");
              // alert(data.target.result);
              image.src = data.target.result;
              image.style.display = "inline";
            }

            obj.readAsDataURL(this.files[0]);
          }
        }
      </script>




@endsection
