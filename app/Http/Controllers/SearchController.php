<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
class SearchController extends Controller
{
   public function index()
{
return view('search.search');
}
public function search(Request $request)
{
if($request->ajax())
{
$output="";
$products=DB::table('products')->where('product_name','LIKE','%'.$request->search."%")->get();
if($products)
{
foreach ($products as $key => $product) {
$output.='<tr>'.
'<td>'.$product->product_id.'</td>'.
'<td>'.$product->product_name.'</td>'.
'<td>'.$product->product_brand.'</td>'.
'<td>'.$product->product_price.'</td>'.
'</tr>';
}
return Response($output);
   }
   }
}
}
