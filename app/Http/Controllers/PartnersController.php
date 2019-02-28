<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use File;
use App\Partner;
use Illuminate\Support\Facades\Redirect;
use Image;

class PartnersController extends Controller
{
  public function index()
  {
    $this->AdminAuthCheck();
    $partners = Partner::all();
    return view('admin.partners.index', compact('partners'));
  }

  public function create()
  {
    $this->AdminAuthCheck();
    return view('admin.partners.add_partner');
  }

  public function store(Request $request)
  {
    $this->AdminAuthCheck();
    $data = array();

    $data['partner_name'] = $request->partner_name;

    if ($request->hasFile('parnter_image')) {
      $image = $request->file('parnter_image');
      $filename = time().'.'.$image->getClientOriginalExtension();
      $success = Image::make($image)->save( public_path('img/partners/'.$filename));
      $image_url = 'img/partners/'.$filename;
      if ($success) {
        $data['partner_img'] = $image_url;

        DB::table('partners')->insert($data);
        Session::put('message', 'Partner Added successfully!');
        return Redirect::to('/all_partners');
      } else {
        return "failed";
      }
    }
  }

  public function edit($p_id)
  {
    $this->AdminAuthCheck();
    $partner = Partner::where('partner_id', $p_id)->first();
    return view('admin.partners.edit', compact('partner'));
  }

  public function update(Request $request)
  {
      $this->AdminAuthCheck();
      $partnerUpdate = Partner::where('partner_id', $request->p_id);

      if ($request->hasFile('partner_image')) {
        $image = $request->file('partner_image');
        $filename = time().'.'.$image->getClientOriginalExtension();
        $success = Image::make($image)->save( public_path('img/partners/'.$filename));
        $image_url = 'img/partners/'.$filename;
      }

      $partnerUpdate->update([
          'partner_name' => $request->input('partner_name'),
          'partner_img' => $image_url,
      ]);


      if ($partnerUpdate) {
          Session::put('message', 'Partner Info updated successfully!!');
      } else {
          Session::put('message', 'Partner Info was not updated!!');
      }

      return Redirect::to('/all_partners');
  }

  public function delete($product_id)
  {
    $this->AdminAuthCheck();

    $partner = DB::table('partners')->where('partner_id', '=', $product_id)->first();

    if ($partner) {

        if (File::delete($partner->partner_img)) {
            DB::table('partners')->where('partner_id', '=', $product_id)->delete();
            Session::put('message', 'Partner deleted successfully!!');
        } else {
            Session::put('message', 'Partner was not deleted check again or try again!!');
        }
    } else {
        Session::put('message', 'Partner was not deleted check again or try again!!');
    }

    return Redirect::to('/all_partners');
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
