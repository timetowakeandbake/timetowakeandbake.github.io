<?php

use Illuminate\Support\Facades\Route;
//Mail
use App\Http\Controllers\MailController; 

Route::get('/send-coupon-vip/{coupon_time}/{coupon_condition}/{coupon_number}/{coupon_code}','App\Http\Controllers\MailController@send_coupon_vip');
Route::get('/send-coupon/{coupon_time}/{coupon_condition}/{coupon_number}/{coupon_code}','App\Http\Controllers\MailController@send_coupon');

Route::get('/mail-example','App\Http\Controllers\MailController@mail_example');
Route::get('/quen-mat-khau','App\Http\Controllers\MailController@quen_mat_khau');
Route::post('/recover-pass','App\Http\Controllers\MailController@recover_pass');
Route::get('/update-new-pass','App\Http\Controllers\MailController@update_new_pass');
Route::post('/reset-new-pass','App\Http\Controllers\MailController@reset_new_pass');
//Liên hệ
use App\Http\Controllers\ContactController; 
Route::get('/lien-he','App\Http\Controllers\ContactController@lien_he' );
//Post
use App\Http\Controllers\PostController; 
Route::get('/', [Post::class, 'index']);

Route::get('/add-post','App\Http\Controllers\PostController@add_post');
Route::get('/all-post','App\Http\Controllers\PostController@all_post');
Route::get('/delete-post/{post_id}','App\Http\Controllers\PostController@delete_post');
Route::get('/edit-post/{post_id}','App\Http\Controllers\PostController@edit_post');
Route::post('/save-post','App\Http\Controllers\PostController@save_post');
Route::post('/update-post/{post_id}','App\Http\Controllers\PostController@update_post');

Route::get('/danh-muc-bai-viet/{post_slug}','App\Http\Controllers\PostController@danh_muc_bai_viet');
Route::get('/bai-viet/{post_slug}','App\Http\Controllers\PostController@bai_viet');

//CategoryPost
use App\Http\Controllers\CategoryPostController; 
Route::get('/', [CategoryPost::class, 'index']);


Route::get('/add-category-post','App\Http\Controllers\CategoryPost@add_category_post');
Route::get('/all-category-post','App\Http\Controllers\CategoryPost@all_category_post');
Route::get('/edit-category-post/{category_post_id}','App\Http\Controllers\CategoryPost@edit_category_post');

Route::post('/save-category-post','App\Http\Controllers\CategoryPost@save_category_post');
Route::post('/update-category-post/{cate_id}','App\Http\Controllers\CategoryPost@update_category_post');
Route::get('/delete-category-post/{cate_id}','App\Http\Controllers\CategoryPost@delete_category_post');

//User
use App\Http\Controllers\UserController;
Route::get('/users','App\Http\Controllers\UserController@index')->middleware('auth.roles');
Route::get('/add-users','App\Http\Controllers\UserController@add_users')->middleware('auth.roles');
Route::post('/store-users','App\Http\Controllers\UserController@store_users');
Route::post('/assign-roles','App\Http\Controllers\UserController@assign_roles')->middleware('auth.roles');

Route::get('delete-user-roles/{admin_id}','App\Http\Controllers\UserController@delete_user_roles')->middleware('auth.roles');
Route::get('/impersonate/{admin_id}','App\Http\Controllers\UserController@impersonate');
Route::get('/impersonate-destroy','App\Http\Controllers\UserController@impersonate_destroy');

// Authen Roles
use App\Http\Controllers\AuthController; 
Route::get('/', [AuthController::class, 'index']);

Route::get('/register-auth','App\Http\Controllers\AuthController@register_auth');
Route::get('/login-auth','App\Http\Controllers\AuthController@login_auth');
Route::get('/logout-auth','App\Http\Controllers\AuthController@logout_auth');

Route::post('/register','App\Http\Controllers\AuthController@register');
Route::post('/login','App\Http\Controllers\AuthController@login');

//Banner
use App\Http\Controllers\BannerController; 
Route::get('/', [BannerController::class, 'index']);

Route::get('/manage-slider','App\Http\Controllers\BannerController@manage_slider');
Route::get('/add-slider','App\Http\Controllers\BannerController@add_slider');
Route::post('/insert-slider','App\Http\Controllers\BannerController@insert_slider');
Route::get('/delete-slide/{slide_id}','App\Http\Controllers\BannerController@delete_slide');


Route::get('/unactive-slide/{slide_id}','App\Http\Controllers\BannerController@unactive_slide');
Route::get('/active-slide/{slide_id}','App\Http\Controllers\BannerController@active_slide');
//order
use App\Http\Controllers\OrderController; 
Route::get('/', [OrderController::class, 'index']);

Route::get('/manage-order','App\Http\Controllers\OrderController@manage_order');
Route::get('/view-order/{order_code}','App\Http\Controllers\OrderController@view_order');
Route::get('/print-order/{checkout_code}','App\Http\Controllers\OrderController@print_order');
Route::post('/update-order-qty','App\Http\Controllers\OrderController@update_order_qty');
Route::post('/update-qty','App\Http\Controllers\OrderController@update_qty');

Route::get('/view-history-order/{order_code}','App\Http\Controllers\OrderController@view_history_order');
Route::get('/history','App\Http\Controllers\OrderController@history');
 Route::post('/huy-don-hang','App\Http\Controllers\OrderController@huy_don_hang');


//delivery
use App\Http\Controllers\DeliveryController; 
Route::get('/', [DeliveryController::class, 'index']);
Route::get('/delivery','App\Http\Controllers\DeliveryController@delivery');
Route::post('/select-delivery','App\Http\Controllers\DeliveryController@select_delivery');
Route::post('/insert-delivery','App\Http\Controllers\DeliveryController@insert_delivery');
Route::post('/select-feeship','App\Http\Controllers\DeliveryController@select_feeship');
Route::post('/update-delivery','App\Http\Controllers\DeliveryController@update_delivery');
// Backend

use App\Http\Controllers\AdminController; 
Route::get('/', [AdminController::class, 'admin']);
Route::get('/admin','App\Http\Controllers\AdminController@admin');
Route::get('/dashboard','App\Http\Controllers\AdminController@show_dashboard');


Route::get('/logout','App\Http\Controllers\AdminController@log_out');
Route::post('/admin_dashboard','App\Http\Controllers\AdminController@dashboard');

//login fb
Route::get('/login-facebook','App\Http\Controllers\AdminController@login_facebook');
Route::get('/admin/callback','App\Http\Controllers\AdminController@callback_facebook');

//Categoties
use App\Http\Controllers\CategoryProduct; 
Route::get('/', [CategoryProduct::class, 'index']);
Route::get('/add-category-product','App\Http\Controllers\CategoryProduct@add_category_product');

Route::get('/edit-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@edit_category_product');
Route::post('/update-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@update_category_product');
Route::get('/delete-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@delete_category_product');

Route::get('/all-category-product','App\Http\Controllers\CategoryProduct@all_category_product');

Route::get('/unactive-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@unactive_category_product');
Route::get('/active-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@active_category_product');

Route::post('/save-category-product','App\Http\Controllers\CategoryProduct@save_category_product');

Route::get('/danh-muc-san-pham/{category_id}','App\Http\Controllers\CategoryProduct@show_category');

Route::get('/danh-muc-san-pham2/{category_id}','App\Http\Controllers\CategoryProduct@show_category2');

// Thương hiệu

use App\Http\Controllers\BrandProduct; 
Route::get('/', [BrandProduct::class, 'index']);
Route::get('/add-brand-product','App\Http\Controllers\BrandProduct@add_brand_product');

Route::get('/edit-brand-product/{brand_product_id}','App\Http\Controllers\BrandProduct@edit_brand_product');
Route::post('/update-brand-product/{brand_product_id}','App\Http\Controllers\BrandProduct@update_brand_product');
Route::get('/delete-brand-product/{brand_product_id}','App\Http\Controllers\BrandProduct@delete_brand_product');

Route::get('/all-brand-product','App\Http\Controllers\BrandProduct@all_brand_product');

Route::get('/unactive-brand-product/{brand_product_id}','App\Http\Controllers\BrandProduct@unactive_brand_product');
Route::get('/active-brand-product/{brand_product_id}','App\Http\Controllers\BrandProduct@active_brand_product');

Route::post('/save-brand-product','App\Http\Controllers\BrandProduct@save_brand_product');

Route::get('/thuong-hieu-san-pham/{brand_id}','App\Http\Controllers\BrandProduct@show_brand_home');


//Sản Phẩm
use App\Http\Controllers\Product; 
Route::get('/', [Product::class, 'index']);
Route::get('/add-product','App\Http\Controllers\Product@add_product');

Route::get('/edit-product/{product_id}','App\Http\Controllers\Product@edit_product');
Route::post('/update-product/{product_id}','App\Http\Controllers\Product@update_product');
Route::get('/delete-product/{product_id}','App\Http\Controllers\Product@delete_product');

Route::get('/all-product','App\Http\Controllers\Product@all_product');

Route::get('/unactive-product/{product_id}','App\Http\Controllers\Product@unactive_product');
Route::get('/active-product/{product_id}','App\Http\Controllers\Product@active_product');

Route::post('/save-product','App\Http\Controllers\Product@save_product');


Route::get('/chi-tiet-san-pham/{product_id}','App\Http\Controllers\Product@details_product');

Route::group(['middleware' => 'auth.roles'], function () {
	Route::get('/add-product','App\Http\Controllers\Product@add_product');
	Route::get('/edit-product/{product_id}','App\Http\Controllers\Product@edit_product');
});
//coment
Route::get('/comment','App\Http\Controllers\Product@list_comment');
Route::post('/load-comment','App\Http\Controllers\Product@load_comment');
Route::post('/send-comment','App\Http\Controllers\Product@send_comment');
Route::post('/allow-comment','App\Http\Controllers\Product@allow_comment');
Route::post('/reply-comment','App\Http\Controllers\Product@reply_comment');
Route::post('/insert-rating','App\Http\Controllers\Product@insert_rating');
Route::post('/uploads-ckeditor','App\Http\Controllers\Product@ckeditor_image');





// Giỏ hàng


use App\Http\Controllers\CartController; 
Route::get('/', [CartController::class, 'index']);
Route::post('/save-cart','App\Http\Controllers\CartController@save_cart');


Route::get('/show_cart','App\Http\Controllers\CartController@show_cart');
Route::get('/delete-to-cart/{rowId}','App\Http\Controllers\CartController@delete_to_cart');
Route::post('/update-cart-quantity','App\Http\Controllers\CartController@update_cart_quantity');
Route::post('/check-coupon','App\Http\Controllers\CartController@check_coupon');
// Cart ajax
Route::post('/add-cart-ajax','App\Http\Controllers\CartController@add_cart_ajax');
Route::get('/gio-hang','App\Http\Controllers\CartController@gio_hang'); 
Route::post('/update-cart','App\Http\Controllers\CartController@update_cart');
Route::get('/del-product/{session_id}','App\Http\Controllers\CartController@delete_product'); 	
Route::get('/del-all-product','App\Http\Controllers\CartController@delete_all_product'); 	

// mã giảm giá
use App\Http\Controllers\CouponController; 
Route::get('/', [CouponController::class, 'index']);
Route::get('/insert-coupon','App\Http\Controllers\CouponController@insert_coupon');
Route::post('/insert-coupon-code','App\Http\Controllers\CouponController@insert_coupon_code');

Route::get('/list-coupon','App\Http\Controllers\CouponController@list_coupon');
Route::get('/delete-coupon/{coupon_id}','App\Http\Controllers\CouponController@delete_coupon');
Route::get('/unset-coupon','App\Http\Controllers\CouponController@unset_coupon');


//Thanh toán

use App\Http\Controllers\CheckoutController; 
Route::get('/', [CheckoutController::class, 'index']);


Route::get('/checkout','App\Http\Controllers\CheckoutController@show_checkout');
Route::get('/login-checkout','App\Http\Controllers\CheckoutController@login_checkout');
Route::get('/logout-checkout','App\Http\Controllers\CheckoutController@logout_checkout');

Route::get('/resigter-checkout','App\Http\Controllers\CheckoutController@resigter');
Route::get('/payment','App\Http\Controllers\CheckoutController@payment');

Route::post('/add-customer','App\Http\Controllers\CheckoutController@add_customer');
Route::post('/login-customer','App\Http\Controllers\CheckoutController@login_customer');
Route::post('/save-checkout-customer','App\Http\Controllers\CheckoutController@save_checkout_customer');

Route::post('/order-place','App\Http\Controllers\CheckoutController@order_place');
Route::post('/select-delivery-home','App\Http\Controllers\CheckoutController@select_delivery_home');
Route::post('/calculate-fee','App\Http\Controllers\CheckoutController@calculate_fee');
Route::get('/del-fee','App\Http\Controllers\CheckoutController@del_fee');

Route::post('/confirm-order','App\Http\Controllers\CheckoutController@confirm_order');

// Quản lí đơn hàng
/*
Route::get('/manage-order','App\Http\Controllers\CheckoutController@manage_order');

Route::get('/view-order/{order_id}','App\Http\Controllers\CheckoutController@view_order');
*/

use App\Http\Controllers\HomeController; 
Route::get('/', [HomeController::class, 'index']);
Route::get('/trang-chu','App\Http\Controllers\HomeController@index');
Route::post('/tim-kiem','App\Http\Controllers\HomeController@search');
Route::get('/send-mail','App\Http\Controllers\HomeController@send_mail');




