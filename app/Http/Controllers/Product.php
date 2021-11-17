<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use App\Models\Roles;
use App\Models\Admin;
use App\Models\CatePost;
use App\Models\Comment;
use App\Models\Rating;
use Auth;
use Session;
class Product extends Controller
{
    public function AuthLogin(){
            $admin_id = Auth::id();
            if($admin_id){
                return Redirect::to('dashboard');
            }else{
                return Redirect::to('admin')->send();
            }  
    }
      public function add_product(){
         $this->AuthLogin();
        $cate_product  = DB::table('tbl_category_product')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->orderby('brand_id','desc')->get();

        
        return view('admin.add_product')->with('cate_product',$cate_product)->with('brand_product',$brand_product);

        

    }

    public function all_product(){
         $this->AuthLogin();
       $all_product = DB::table('tbl_product') 
       ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
       ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
       ->orderby('tbl_product.product_id','desc')->paginate(5);

       $manager_product = view('admin.all_product')-> with('all_product',$all_product);

       return view('admin_layout')->with('admin.all_product',$manager_product);
        
    }
    public function save_product(Request $request){
         $this->AuthLogin();

        $data = array();
        $data['product_name'] = $request -> product_name;
        $data['product_quantity'] = $request -> product_quantity;
        $data['product_price'] = $request -> product_price;
        $data['product_desc'] = $request -> product_desc;
        $data['product_content'] = $request -> product_content;
        $data['category_id'] = $request -> product_cate;
        $data['brand_id'] = $request -> product_brand;
        $data['product_status'] = $request -> product_status;
        $data['product_image'] = $request -> product_image;
        $get_image = $request-> file('product_image');

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image= $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/upload/product',$new_image);
            $data['product_image'] = $new_image; 
            DB ::table('tbl_product')-> insert($data);
            Session::put('message', 'Thêm thành công');
            return Redirect::to('all-product');
        }
        $data['product_image'] = ''; 
        DB ::table('tbl_product')-> insert($data);
        Session::put('message', 'Thêm thành công');
        return Redirect::to('all-product');
    }

    public function unactive_product($product_id){
        DB::table('tbl_product')->where('product_id',$product_id)->update(['product_status'=>1]);
        Session::put('message', 'Kích hoạt danh mục sản phẩm');
        return Redirect::to('all-product');

    }
    public function active_product($product_id){
        DB::table('tbl_product')->where('product_id',$product_id)->update(['product_status'=>0]);
        Session::put('message', 'Bỏ kích hoạt danh mục sản phẩm');
        return Redirect::to('all-product');

    }
    public function edit_product($product_id){
         $this->AuthLogin();

       $cate_product  = DB::table('tbl_category_product')->orderby('category_id','desc')->get();
       $brand_product = DB::table('tbl_brand')->orderby('brand_id','desc')->get();

       $edit_product = DB::table('tbl_product')->where('product_id',$product_id)->get();

       $manager_product = view('admin.edit_product')-> with('edit_product',$edit_product)->with('cate_product',$cate_product)
       ->with('brand_product',$brand_product);
        
       return view('admin_layout')->with('admin.edit_product',$manager_product);
    }
    public function update_product(Request $request,$product_id){
        $this->AuthLogin();
       
        $data = array();
        $data['product_name'] = $request -> product_name;
         $data['product_quantity'] = $request -> product_quantity;
        $data['product_price'] = $request -> product_price;
        $data['product_desc'] = $request -> product_desc;
        $data['product_content'] = $request -> product_content;
        $data['category_id'] = $request -> product_cate;
        $data['brand_id'] = $request -> product_brand;
        $data['product_status'] = $request -> product_status;
       
        $get_image = $request-> file('product_image');
       if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image= $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/upload/product',$new_image);
            $data['product_image'] = $new_image; 
            DB ::table('tbl_product')->where('product_id',$product_id)-> update($data);
            Session::put('message', 'Thêm thành công');
            return Redirect::to('all-product');
        }
       
          DB ::table('tbl_product')->where('product_id',$product_id)-> update($data);
        Session::put('message', 'Cập nhật thành công');
        return Redirect::to('all-product');
    
        
    }
    public function delete_product(Request $request,$product_id){

        DB ::table('tbl_product')-> where('product_id',$product_id)->delete();
        Session::put('message', 'Xóa sản phẩm thành công');
        return Redirect::to('all-product');
        
    }
//end admin


//chi tiết sản phẩm
    public function details_product(Request $request,$product_id){

        $category_post = CatePost::orderBy('cate_post_id','DESC')->get();

         $details_product = DB::table('tbl_product')
        ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
        ->where('tbl_product.product_id',$product_id)->get();

        foreach($details_product as $key => $value){
        $meta_desc = $value->product_desc;
        $meta_keywords = $value->product_id;
        $meta_title = $value->product_name;
        $url_canonical = $request->url();
    }

        $cate_product  = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','1')->orderby('brand_id','desc')->get();


        $details_product = DB::table('tbl_product') 
       ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
       ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
       ->where('tbl_product.product_id',$product_id)->get();


       foreach($details_product as $key =>$value){
       $category_id = $value ->category_id; 
   }
       


         $related_product = DB::table('tbl_product') 
       ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
       ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
       ->where('tbl_category_product.category_id',$category_id)->whereNotIn('tbl_product.product_id',[$product_id])->limit(4)->get();
        $rating = Rating::where('product_id',$product_id)->avg('rating');
        $rating = round($rating);
        
        return view('pages.Product.show_details')->with('category',$cate_product)->with('brand',$brand_product)->with('product_details',$details_product)->with('relate',$related_product)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical)->with('category_post',$category_post)->with('rating',$rating);

    }  


    //comment
    public function reply_comment(Request $request){
        $data = $request->all();
        $comment = new Comment();
        $comment->comment = $data['comment'];
        $comment->comment_product_id = $data['comment_product_id'];
        $comment->comment_parent_comment = $data['comment_id'];
        $comment->comment_status = 0;
        $comment->comment_name = 'Nam Admin';
        $comment->save();

    }
     public function allow_comment(Request $request){
        $data = $request->all();
        $comment = Comment::find($data['comment_id']);
        $comment->comment_status = $data['comment_status'];
        $comment->save();
    }
    public function list_comment(){
        $comment = Comment::with('product')->where('comment_parent_comment','=',0)->orderBy('comment_id','DESC')->get();
        $comment_rep = Comment::with('product')->where('comment_parent_comment','>',0)->get();
        return view('admin.comment.list_comment')->with(compact('comment','comment_rep'));
    }
     public function send_comment(Request $request){
        $product_id = $request->product_id;
        $comment_name = $request->comment_name;
        $comment_content = $request->comment_content;
        $comment = new Comment();
        $comment->comment = $comment_content;
        $comment->comment_name = $comment_name;
        $comment->comment_product_id = $product_id;
        $comment->comment_status = 1;
        $comment->comment_parent_comment = 0;
        $comment->save();
    }

     public function load_comment(Request $request){
        $product_id = $request->product_id;
        $comment = Comment::where('comment_product_id',$product_id)->where('comment_parent_comment','=',0)->where('comment_status',0)->get();
        $comment_rep = Comment::with('product')->where('comment_parent_comment','>',0)->get();
        $output = '';
        foreach($comment as $key => $comm){
            $output.=' 

                     
                                <div class="blog__comment__item">
                                    <div class="blog__comment__item__pic">
                                        <img src="'.url('/public/backend/images/userlogo.png').'" alt="">
                                    </div>
                                         <div class="blog__comment__item__text">
                                            <h6>'.$comm->comment_name.'</h6>
                                            <p>'.$comm->comment.'</p>
                                            <ul>
                                                <li><i class="fa fa-clock-o"></i> '.$comm->comment_date.'</li>
                                                <li><i class="fa fa-heart-o"></i> 0</li>
                                                <li><i class="fa fa-share"></i> 0</li>
                                            </ul>
                            </div> </br>';


                           
                            foreach($comment_rep as $key => $rep_comment) {
                                if($rep_comment->comment_parent_comment==$comm->comment_id)  {
                           $output.= '<div class="blog__comment__item blog__comment__item--reply">
                                <div class="blog__comment__item__pic">
                                    <img src="'.url('/public/backend/images/adminlogo.png').'" alt="">
                                </div>
                                <div class="blog__comment__item__text">
                                    <h6>Nam Đẹp Trai</h6>
                                    <p>'.$rep_comment->comment.'</p>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> '.$comm->comment_date.'</li>
                                        <li><i class="fa fa-heart-o"></i> 999</li>
                                        <li><i class="fa fa-share"></i> 999</li>
                                    </ul>
                                </div>
                            </div>';
                            }
                        }

                     }
        echo $output;

    }
 public function insert_rating(Request $request){
        $data = $request->all();
        $rating = new Rating();
        $rating->product_id = $data['product_id'];
        $rating->rating = $data['index'];
        $rating->save();
        echo 'done';
    }
public function ckeditor_image(Request $request){
       if($request->hasFile('upload')) {

            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
            $request->file('upload')->move('public/uploads/ckeditor', $fileName);
   
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('public/uploads/ckeditor/'.$fileName); 
            $msg = 'Tải ảnh thành công'; 
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;

        }
    }





}
