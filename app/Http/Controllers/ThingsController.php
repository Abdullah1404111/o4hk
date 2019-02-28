<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use File;
use App\Thing;
use Illuminate\Support\Facades\Redirect;
use Image;

class thingsController extends Controller
{
  public function index()
  {
    $this->AdminAuthCheck();
    $things = Thing::all();
    return view('admin.things.index', compact('things'));
  }

  public function create()
  {
    $this->AdminAuthCheck();
    return view('admin.things.add');
  }

  public function store(Request $request)
  {
    $this->AdminAuthCheck();
    $data = array();

    $data['thing_name'] = $request->product_name;
    $data['partner_id'] = $request->partner_id;
    $data['desc'] = $request->long_desc;

    if ($request->hasFile('product_image')) {
      $image = $request->file('product_image');
      $filename = time().'.'.$image->getClientOriginalExtension();
      $success = Image::make($image)->save( public_path('img/things/'.$filename));
      $image_url = 'img/things/'.$filename;
      if ($success) {
        $data['thing_image'] = $image_url;

        DB::table('things')->insert($data);
        Session::put('message', 'Product Added successfully!');
        return Redirect::to('/all_products');
      } else {
        return "failed";
      }
    }
  }

  public function edit($p_id)
  {
    $this->AdminAuthCheck();
    $thing = Thing::where('thing_id', $p_id)->first();
    return view('admin.things.edit', compact('thing'));
  }

  public function update(Request $request)
  {
      $this->AdminAuthCheck();
      $thingUpdate = Thing::where('thing_id', $request->p_id);


      if ($request->hasFile('thing_image')) {
        $image = $request->file('thing_image');
        $filename = time().'.'.$image->getClientOriginalExtension();
        $success = Image::make($image)->save( public_path('img/things/'.$filename));
        $image_url = 'img/things/'.$filename;
      } else {
        $image_url = $request->thing_image;
      }

      $thingUpdate->update([
          'thing_name' => $request->input('thing_name'),
          'thing_image' => $image_url,
      ]);


      if ($thingUpdate) {
          Session::put('message', 'Product Info updated successfully!!');
      } else {
          Session::put('message', 'Product Info was not updated!!');
      }

      return Redirect::to('/all_products');
  }

  public function delete($product_id)
  {
    $this->AdminAuthCheck();

    $thing = DB::table('things')->where('thing_id', '=', $product_id)->first();

    if ($thing) {

        if (File::delete($thing->thing_image)) {
            Session::put('message', 'Product deleted successfully!!');
        } else {
            Session::put('message', 'Product was not deleted check again or try again!!');
        }
    } else {
        Session::put('message', 'Product was not deleted check again or try again!!');
    }

    DB::table('things')->where('thing_id', '=', $product_id)->delete();
    return Redirect::to('/all_products');
  }


















  public function AdminAuthCheck()
  {
    $adminId = Session::get('admin_id');

    if ($adminId) {
      return;
    } else {
      return Redirect::to('/admin')->send();
    }
  }
}
