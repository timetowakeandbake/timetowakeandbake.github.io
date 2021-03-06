<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Mail;
use App\Http\Requests;
use Session;
use Auth;
use App\Models\Post;
use App\Models\CatePost;
use App\Models\Product;
use\App\Models\Banner;
use Illuminate\Support\Facades\Redirect;
session_start();

class CategoryProduct extends Controller
{
    public function AuthLogin(){
 
            $admin_id = Auth::id();
        
            if($admin_id){
                return Redirect::to('dashboard');
            }else{
                return Redirect::to('admin')->send();
            } 
        
       
    }
    public function add_category_product(){
        $this->AuthLogin();

        return view('admin.add_category_product');

    }

    public function all_category_product(){
        $this->AuthLogin();
       $all_category_product = DB::table('tbl_category_product')-> get();
       $manager_category_product = view('admin.all_category_product')-> with('all_category_product',$all_category_product);

       return view('admin_layout')->with('admin.all_category_product',$manager_category_product);
        
    }
    public function save_category_product(Request $request){
        $this->AuthLogin();

        $data = array();
        $data['category_name'] = $request -> category_product_name;
        $data['meta_keywords'] = $request -> category_product_keywords;
        $data['category_desc'] = $request -> category_product_desc;
        $data['category_status'] = $request -> category_product_status;
        $data['category_img'] = $request -> category_img;
        $get_image = $request-> file('category_img');

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image= $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/upload/product',$new_image);
            $data['category_img'] = $new_image; 
            DB ::table('tbl_category_product')-> insert($data);
            Session::put('message', 'Th??m th??nh c??ng');
            return Redirect::to('all-category-product');
        }
        $data['category_img'] = ''; 
        DB ::table('tbl_category_product')-> insert($data);
        Session::put('message', 'Th??m th??nh c??ng');
        return Redirect::to('all-category-product');
    }
    public function unactive_category_product($category_product_id){
        $this->AuthLogin();
        DB::table('tbl_category_product')->where('category_id',$category_product_id)->update(['category_status'=>1]);
        Session::put('message', 'K??ch ho???t danh m???c s???n ph???m');
        return Redirect::to('all-category-product');

    }
    public function active_category_product($category_product_id){
        $this->AuthLogin();
        DB::table('tbl_category_product')->where('category_id',$category_product_id)->update(['category_status'=>0]);
        Session::put('message', 'B??? k??ch ho???t danh m???c s???n ph???m');
        return Redirect::to('all-category-product');
        
    }
    public function edit_category_product($category_product_id){
        $this->AuthLogin();
       $edit_category_product = DB::table('tbl_category_product')->where('category_id',$category_product_id)->get();
       $manager_category_product = view('admin.edit_category_product')-> with('edit_category_product',$edit_category_product);
       return view('admin_layout')->with('admin.edit_category_product',$manager_category_product);
        
    }
    public function update_category_product(Request $request,$category_product_id){
        $this->AuthLogin();
        $data = array();
        $data['category_name'] = $request -> category_product_name;
        $data['meta_keywords'] = $request -> category_product_keywords;
        $data['category_desc'] = $request -> category_product_desc;
        $data['category_img'] = $request -> category_img;

       $get_image = $request-> file('category_img');
       if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image= $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/upload/product',$new_image);
            $data['category_img'] = $new_image; 
            DB ::table('tbl_category_product')->where('category_id',$category_product_id)->update($data);
            Session::put('message', 'C???p nh???t danh m???c s???n ph???m th??nh c??ng');
            return Redirect::to('all-category-product');
        }
            
        DB ::table('tbl_category_product')-> where('category_id',$category_product_id)->update($data);
        Session::put('message', 'C???p nh???t danh m???c s???n ph???m th??nh c??ng');
        return Redirect::to('all-category-product');
    }
    public function delete_category_product(Request $request,$category_product_id){
        $this->AuthLogin();


        DB ::table('tbl_category_product')-> where('category_id',$category_product_id)->delete();
        Session::put('message', 'X??a danh m???c s???n ph???m th??nh c??ng');
        return Redirect::to('all-category-product');
        
    }


    //end admin function


    //Show danh m???c s???n ph???m

    public function show_category(Request $request, $category_id){
       $category_post = CatePost::orderBy('cate_post_id','DESC')->get();
         $slider = Banner::orderBy('slider_id','DESC')->where('slider_status','1')->take(4)->get(); 

        $cate_product  = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','1')->orderby('brand_id','desc')->get();

        $category_by_id =DB::table('tbl_product')->join('tbl_category_product','tbl_product.category_id','=','tbl_category_product.category_id')->where('tbl_product.category_id',$category_id)->limit(8)->get();

        //hi???n t??n c???a danh m???c
        $category_name = DB::table('tbl_category_product')->where('tbl_category_product.category_id',$category_id)->limit(1)->get() ;
             foreach($category_name as $key => $val){
                            //seo 
                $meta_desc = $val->category_desc; 
                $meta_keywords = $val->meta_keywords;
                $meta_title = $val->category_name;
                $url_canonical = $request->url();
                            //--seo
}

        return view('pages.category.show_category')->with('category',$cate_product)->with('brand',$brand_product)->with('category_by_id',$category_by_id)->with('category_name',$category_name)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title )->with('url_canonical',$url_canonical)->with('slider',$slider)->with('category_post',$category_post);
        
    }
     public function show_category2(Request $request,$category_id){
         $category_post = CatePost::orderBy('cate_post_id','DESC')->get();
         $slider = Banner::orderBy('slider_id','DESC')->where('slider_status','1')->take(4)->get(); 

        
        $cate_product  = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','1')->orderby('brand_id','desc')->get();

        $category_by_id =DB::table('tbl_product')->join('tbl_category_product','tbl_product.category_id','=','tbl_category_product.category_id')->where('tbl_product.category_id',$category_id)->limit(9)->get();

        //hi???n t??n c???a danh m???c
        $category_name = DB::table('tbl_category_product')->where('tbl_category_product.category_id',$category_id)->limit(1)->get() ;
             foreach($category_name as $key => $val){
                            //seo 
                $meta_desc = $val->category_desc; 
                $meta_keywords = $val->meta_keywords;
                $meta_title = $val->category_name;
                $url_canonical = $request->url();
                            //--seo
}

        return view('pages.shop_product')->with('category',$cate_product)->with('brand',$brand_product)->with('category_by_id',$category_by_id)->with('category_name',$category_name)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title )->with('url_canonical',$url_canonical)->with('slider',$slider)->with('category_post',$category_post);

        
    }

}
