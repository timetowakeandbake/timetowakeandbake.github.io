<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Models\Login;
use App\Http\Requests;
use Session;
use App\Models\Social; //sử dụng model Social
use Socialite; //sử dụng Socialite
use Auth;
    
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{
   public function AuthLogin(){

      $admin_id = Auth::id();
      if($admin_id){
        return Redirect::to('dashboard');
      }else{
        return Redirect::to('admin')->send();
    } 
    }
   public function admin(){
        return view('admin_login');
    }
    public function show_dashboard(){
         $this->AuthLogin();
        return view('admin.dashboard');
    }
     public function dashboard(Request $request){
        $this->AuthLogin();
        $admin_email = $request -> admin_email;  
        $admin_password = md5($request -> admin_password);

        $result = DB::table('tbl_admin')-> where('admin_email',$admin_email)-> where('admin_password',$admin_password)->first();
        if ($result){
            Session::put('admin_name', $result ->admin_name);
            Session::put('admin_id',$result ->admin_id);
            return Redirect::to('/dashboard');
        }else{
            Session::put('message', 'Sai tài khoản ! Xin nhập lại !');
            return Redirect::to('/admin');
        }   

    }
     public function log_out(){
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return Redirect::to('/admin');      
    }



    public function login_facebook(){
        return Socialite::driver('facebook')->redirect();
    }

    public function callback_facebook(){
    $provider = Socialite::driver('facebook')->user();
    $account = Social::where('provider','facebook')->where('provider_user_id',$provider->getId())->first();

    if($account!=NULL){

        $account_name = Login::where('admin_id',$account->user)->first();
        Session::put('admin_name',$account_name->admin_name);
        Session::put('login_normal',true);
        Session::put('admin_id',$account_name->admin_id);
/*        return redirect('/dashboard')->with('message', 'Đăng nhập Admin thành công');*/

    }elseif($account==NULL){

        $admin_login = new Social([
            'provider_user_id' => $provider->getId(),
            'provider_user_email' => $provider->getEmail(),
            'provider' => 'facebook'
        ]);

        $orang = Login::where('admin_email',$provider->getEmail())->first();

        if(!$orang){
            $orang = Login::create([
                'admin_name' => $provider->getName(),
                'admin_email' => $provider->getEmail(),
                'admin_password' => '',
                'admin_phone' => ''

            ]);
        }
        $admin_login->login()->associate($orang);
        $admin_login->save();

        $account_name = Login::where('admin_id',$admin_login->user)->first();
        Session::put('admin_name',$admin_login->admin_name);
        Session::put('login_normal',true);
        Session::put('admin_id',$admin_login->admin_id);
        

    }
    return redirect('/dashboard')->with('message', 'Đăng nhập Admin thành công');


}


    
}
