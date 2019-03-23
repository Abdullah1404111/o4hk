<?php

namespace App\Http\Controllers;

use App\Product;
use App\Partner;
use DB;
use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function about_us()
  {
    return view('pages.about_us');
  }

  public function services()
  {
    return view('pages.services');
  }

  public function portfolio()
  {
    $partners = Partner::all();
    return view('pages.portfolio', compact('partners'));
  }

  public function portfolio_show($p_id)
  {
    $products = DB::table('things')->where('partner_id', $p_id)->get();

    return view('pages.things', compact('products'));

  }

  public function show_prod_details($p_id)
  {
    $product = DB::table('things')->where('thing_id', $p_id)->first();
    $brands = DB::table('partners')->where('partner_id', $product->partner_id)->get();
    $product_image = DB::table('products_images')->where('product_id', $p_id)->first();
    return view('pages.view_thing', compact('product', 'brands', 'product_image'));
  }

  public function team()
  {
    $members = Product::orderBy('order_cat', 'ASC')->get();

    return view('pages.team', compact('members'));
  }

  public function contact_us()
  {
    return view('pages.contact_us');
  }

  public function show_member_details($member_id)
  {
    $member = Product::where('p_id', $member_id)->first();

    return view('member_profile', compact('member'));
  }
}
