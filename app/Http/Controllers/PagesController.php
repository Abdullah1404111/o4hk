<?php

namespace App\Http\Controllers;

use App\Product;
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
    return view('pages.portfolio');
  }

  public function team()
  {
    $members = Product::orderBy('sort_val', 'ASC')->get();
    
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
