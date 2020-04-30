<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class MainController extends Controller
{
  public function index()
  {
  //$products = DB::select('select * from products order by id desc');
$products = DB::table('products')->join('users', 'products.user_id', '=', 'users.id')->get();

    return view('products',['products'=>$products]);
  }


  public function search(Request $request)
  {
    $val = $request->input('search');
    if($val == ''){
      $os="<style> #from_ajax{
        display:none;
      }</style>";
    return Response($os);
    }

    if($request->ajax())
{
$output="<div id='from_ajax'><ul>";// class='dropdown-menu' aria-labelledby='dropdownMenuButton'>";
$products=DB::table('products')->where('product_name','LIKE','%'.$request->search."%")->get();
if($products)
{
foreach ($products as $key => $product) {
  //url()
$output.="<li><a  href='".url('product/about/'.$product->product_id)."'>".$product->product_name."</a></li>";
}
$output.="</ul></div>";
return Response($output);
}

 }}




  public function about($id)
  {
    $about = DB::select('select * from products where product_id ='.$id);
    return view('about',['about'=>$about]);
  }
}
