<?php

namespace App\Http\Controllers\Index;

use App\Http\Model\Banner;
use App\Http\Model\BannerSlider;
use App\Http\Model\Category;
use App\Http\Model\Doc;
use App\Http\Model\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class indexController extends Controller
{
  public function view()
  {
    return view('index.woshipm.templates.index');
  }

  public function indexBannerGet(Request $request)
  {

    //$bannerId =Banner::where('name', '首页主轮播')->first()->toArray();

    $sliders = BannerSlider::where('banner_id', 1)->get(['id', 'banner_id', 'img_src', 'title', 'url', 'img_title', 'img_alt'])->toArray();
    $littleSliders = BannerSlider::where('banner_id', 2)->get(['id', 'banner_id', 'img_src', 'title', 'url', 'img_title', 'img_alt'])->toArray();
    return response()->json(['code' => 1, 'data' => $sliders,'littleSlider'=>$littleSliders]);
  }

  public function getIndexList(Request $request)
  {
    $docs = Doc::with(['adminUser'=> function ($query) {
      $query->select('id','avatar');

    },'categorys'=> function ($query) {
      $query->select('slug','name');

    }])->where(['type' => 'post', 'status' => 'published'])->orderBy('published_date', 'desc')->get(['id','publisher_id', 'title', 'published_date', 'category', 'from', 'recommend', 'hot', 'view', 'collection', 'like', 'author',  'keyword', 'abstract', 'preview_img', 'content','created_at']);


    foreach ($docs as $doc) {
     $doc->adminUser;
      $doc->categorys;
    }

    return response()->json(['code' => 1, 'data' => $docs->toArray()]);
  }


  public function getHotDoc(Request $request)
  {
    $docs = Doc::where(['type' => 'post', 'status' => 'published', 'hot' => '是'])->orderBy('published_date', 'desc')->limit(10)->get(['id', 'title', 'published_date', 'category', 'from', 'recommend', 'hot', 'view', 'collection', 'like', 'author',  'keyword', 'abstract', 'preview_img', 'content']);
    return response()->json(['code' => 1, 'data' => $docs]);
  }

  public function getMenu(Request $request)
  {
    $topMenu = Menu::where(['parent' => '0'])->get()->toArray();
    $menu = Menu::all()->toArray();
    return response()->json(['code' => 1, 'topData' => $topMenu,'data'=>$menu]);
  }

  public function isLogin(Request $request)
  {

    if(Auth::check()){
return response()->json(['code'=>1,'msg'=>'已经登录']);
    }else{
      return response()->json(['code'=>0,'msg'=>'未登录']);
    }
  }

}
