<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Mail;
use App\Http\Requests;
use Session;
use\App\Models\CatePost;
use\App\Models\Banner;
use App\Models\Post;
use Illuminate\Support\Facades\Redirect;
session_start();

class HomeController extends Controller
{
    public function index(Request $request){

        $category_post = CatePost::orderBy('cate_post_id','DESC')->get();

        //slider
        $slider = Banner::orderBy('slider_id','DESC')->where('slider_status','1')->take(4)->get();
        //seo
        $meta_desc = "Web bán hàng chuẩn cơm mẹ nấu";
        $meta_keywords = "Quần áo đẳng cấp";
        $meta_title = "Shop quần áo cho mọi lứa tuổi";
        $url_canonical = $request->url();

        //end seo




        $cate_product  = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->limit(4)->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','1')->orderby('brand_id','desc')->get();
        $all_product =DB::table('tbl_product')->where('product_status','1')->orderby('product_id','desc')->limit(16)->get();

        return view('pages.home')->with('category',$cate_product)->with('brand',$brand_product)->with('all_product',$all_product)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title )->with('url_canonical',$url_canonical)->with('slider',$slider)->with('category_post',$category_post);
    }
    public function search(Request $request){
        $category_post = CatePost::orderBy('cate_post_id','DESC')->get();

        //slider
        $slider = Banner::orderBy('slider_id','DESC')->where('slider_status','1')->take(4)->get();

        $meta_desc = "Tìm kiếm sản phẩm"; 
        $meta_keywords = "Tìm kiếm sản phẩm";
        $meta_title = "Tìm kiếm sản phẩm";
        $url_canonical = $request->url();


        $keywords = $request->keywords_submit;

        $cate_product  = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','1')->orderby('brand_id','desc')->get();

        $search_product =DB::table('tbl_product')->where('product_name','like','%'.$keywords.'%')->get();

     /*    $all_product = DB::table('tbl_product') 
       ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
       ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
       ->orderby('tbl_product.product_id','desc')->get();*/
        return view('pages.Product.search')->with('category',$cate_product)->with('brand',$brand_product)->with('search_product',$search_product)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title )->with('url_canonical',$url_canonical)->with('slider',$slider)->with('category_post',$category_post);


    }
    public function send_mail(){
            $to_name = "Hoài Nam";
            $to_email = "znamkhodoz@gmail.com";
            $data = array("name"=>"Mail gửi từ khác hàng","body"=>"Mail gửi về vấn đề hàng hóa");

            Mail::send("pages.send_mail",$data,function($message) use ($to_name,$to_email){
                $message->to($to_email)->subject('Gửi mail google');
                $message->from($to_email,$to_name);
            });
            /*return redirect('/')->with('message','');*/
    }
}
