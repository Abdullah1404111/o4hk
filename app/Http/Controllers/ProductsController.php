<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use File;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Image;
session_start();


class ProductsController extends Controller
{
  public function index()
  {
    $this->AdminAuthCheck();
    $products = Product::all();
    return view('admin.products.index', compact('products'));
  }

  public function create()
  {
    $this->AdminAuthCheck();
    return view('admin.products.add_product');
  }

  public function store(Request $request)
  {
    $this->AdminAuthCheck();
    $data = array();

    $data['product_name'] = $request->product_name;
    $data['product_size'] = $request->product_size;
    $data['department'] = $request->department;
    $data['hire_date'] = $request->hire_date;
    $data['email'] = $request->email;
    if ($request->hasFile('product_image')) {
      $image = $request->file('product_image');
      $filename = time().'.'.$image->getClientOriginalExtension();
      $success = Image::make($image)->crop(500, 500)->save( public_path('img/members/'.$filename));
      $image_url = 'img/members/'.$filename;
      if ($success) {
        $data['product_image'] = $image_url;

        DB::table('products')->insert($data);
        Session::put('message', 'Product Added successfully!');
        return Redirect::to('/all_team');
      }
    }

    $data['product_image'] =
                  DB::table('products')->insert($data);
                  Session::put('message', 'Product Added successfully without any image!!');
                  return Redirect::to('/all_team');
  }
  // ***************************
  public function edit($p_id)
  {
    $this->AdminAuthCheck();
    $product = Product::where('p_id', $p_id)->first();
    return view('admin.products.edit', compact('product'));
  }

  //**********************************

  public function update(Request $request)
  {
      $this->AdminAuthCheck();
      $prodUpdate = Product::where('p_id', $request->p_id);

      $prodUpdate->update([
          'product_name' => $request->input('product_name'),
          'product_size' => $request->input('product_size'),
      ]);


      if ($prodUpdate) {
          Session::put('message', 'Product updated successfully!!');
      } else {
          Session::put('message', 'Product was not updated!!');
      }

      return Redirect::to('/all_team');
  }

  //*************************************

  public function delete($product_id)
  {
    $this->AdminAuthCheck();

    $product = DB::table('products')->where('p_id', '=', $product_id)->first();

    if ($product) {

        if (File::delete($product->product_image)) {
            DB::table('products')->where('p_id', '=', $product_id)->delete();
            Session::put('message', 'Product deleted successfully!!');
        } else {
            Session::put('message', 'Product was not deleted check again or try again!!');
        }
    } else {
        Session::put('message', 'Product was not deleted check again or try again!!');
    }

    return Redirect::to('/all_team');
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
