<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class MainController extends Controller
{
  public function index()
  {
  $products = DB::select('select * from products order by id desc');

//$products = DB::table('products')->join('users', 'products.user_id', '=', 'users.id')->get();



    return view('products',['products'=>$products]);
  }


  public function search(Request $request)
  {
    if($request->ajax())
{
$output="<div id='from_ajax'>";// class='dropdown-menu' aria-labelledby='dropdownMenuButton'>";
$products=DB::table('products')->where('name','LIKE','%'.$request->search."%")->get();
if($products)
{
foreach ($products as $key => $product) {
  //url()
$output.="<a  href='".url('product/about/'.$product->id)."'>".$product->name."</a>";
}
$output.="</div>";
return Response($output);
}
else{
  $this->index();
}
 }}




  public function about($id)
  {
    $about = DB::select('select * from products where id ='.$id);
    return view('about',['about'=>$about]);
  }
}
