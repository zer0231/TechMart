<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    private function generate_string() {
       $input_length = 10;
       $random_string = '';
       for($i = 0; $i < 10; $i++) {
           $random_character = mt_rand(0, $input_length - 1);
           $random_string .= $random_character;
       }

       return $random_string;
   }

   public function upload(Request $request)
   {
     $data = $request->input('product_image');
     $photo = $this->generate_string().'.png';
     $destination = base_path() . '/public/images';
     $request->file('image')->move($destination, $photo);
     $image_name='images/'.$photo;
     $product_name = $request->input('product_name');
     $product_price = $request->input('product_price');
     $data=array('product_name'=>$product_name,'product_brand'=>'test','product_img_path'=>$image_name,'product_quantity'=>'2','product_price'=>$product_price,'user_id'=>$request->input('user_id'));
     DB::table('products')->insert($data);
     echo "Record inserted successfully.<br/>";
     echo '<a href = "/home">Click Here</a> to go back.';
   }
}
