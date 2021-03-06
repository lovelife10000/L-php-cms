<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use App\Http\Model\AdminUser;
use Gregwar\Captcha\CaptchaBuilder;
use Gregwar\Captcha\PhraseBuilder;

class adminLoginController extends Controller
{
  public $builder;


  function __construct()
  {


  }

  public function view(Request $request)
  {



    return view('admin.admin_login', [

    ]);


  }

  public function gotoLogin()
  {

    return redirect()->route('admin_login');
  }

  public function login(Request $request)
  {
    $username = $request->input('username');
    $password = $request->input('password');
    $code = $request->input('code');

//dd(Crypt::encrypt(''));
    /*
     * 从session中获取code
     * */
    $code_session = $request->session()->get('code');


    if ($code !== $code_session) {
      return response()->json(['code' => 0, 'msg' => '验证码错误！']);

    } else {
      $username_data = DB::table('users')->where('email', $username)->value('email');

      if (!$username_data) {
        return response()->json(['code' => 0, 'msg' => '用户名或密码错误！']);
      } else {
        $password_data = DB::table('users')->where('email', $username)->value('password');

        if ($password !== Crypt::decrypt($password_data)) {
          return response()->json(['code' => 0, 'msg' => '用户名或密码错误！']);

        } else {
          $request->session()->put('email', $username);
          $userInfo = DB::table('users')->where('email', $request->session()->get('email'))->first();
          $request->session()->put('userInfo', $userInfo);
          return response()->json(['code' => 1, 'msg' => '登录成功！']);
        }
      }

    }

    //DB::table('admin_users')
//        $user=AdminUser::first();
//        if($user->username===){
//
//        }
  }


  public function updateCode(Request $request){
    /*
             * 创建验证码
             * */
    $this->builder = new CaptchaBuilder;
    $this->builder->build();


    /*
        * 保存验证码进session
        * */
    $request->session()->put('code', $this->builder->getPhrase());
    $base64=$this->builder->inline();

    return response()->json(['code' => 1, 'base64' => $base64]);

  }


  public function getCode(Request $request){
    /*
            * 创建验证码
            * */
    $this->builder = new CaptchaBuilder;
    $this->builder->build();


    /*
        * 保存验证码进session
        * */
    $request->session()->put('code', $this->builder->getPhrase());
    $base64=$this->builder->inline();
    return response()->json(['code' => 1, 'base64' => $base64]);
  }















}
