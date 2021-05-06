<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class frontcontroller extends Controller
{
    public function __construct()
    {
        $categories = DB::table('categories')->where('status','on')->get();
        $setting = DB::table('settings')->first();
        view()->share([
            'categories' => $categories,
            'setting' => $setting,
        ]);
    }
    public function index(){
        $featured = DB::table('posts')->where('category_id', 'LIKE', '%10%')->orderby('pid','DESC')->get();
        $general = DB::table('posts')->where('category_id', 'LIKE', '%9%')->orderby('pid','DESC')->get();
        $bussiness = DB::table('posts')->where('category_id', 'LIKE', '%12%')->orderby('pid','DESC')->get();
        $sports = DB::table('posts')->where('category_id', 'LIKE', '%6%')->orderby('pid','DESC')->get();
        $technolgy = DB::table('posts')->where('category_id', 'LIKE', '%13%')->orderby('pid','DESC')->get();
        $health = DB::table('posts')->where('category_id', 'LIKE', '%3%')->orderby('pid','DESC')->get();
        $travel = DB::table('posts')->where('category_id', 'LIKE', '%8%')->orderby('pid','DESC')->get();
        $entertaiment = DB::table('posts')->where('category_id', 'LIKE', '%7%')->orderby('pid','DESC')->get();
        $politics = DB::table('posts')->where('category_id', 'LIKE', '%1%')->orderby('pid','DESC')->get();
        $edu = DB::table('posts')->where('category_id', 'LIKE', '%5%')->orderby('pid','DESC')->get();
        $crypto = DB::table('posts')->where('category_id', 'LIKE', '%11%')->orderby('pid','DESC')->get();
        return view ('frontend.index',[
            'featured'=>$featured,
            'general'=>$general,
            'bussiness'=>$bussiness,
            'sports'=>$sports,
            'technolgy'=>$technolgy,
            'health'=>$health,
            'travel'=>$travel,
            'entertaiment'=>$entertaiment,
            'edu'=>$edu,
            'crypto'=>$crypto,
            'politics'=>$politics]);
    }

    // public function category($slug){
    //     $cat = DB::table('category')->where('slug',$slug)->first();
    //     $posts = DB::table('posts')->where('category_id','LIKE','%'.$cat->cid.'%')->get();
    //     return view ('frontend.category',['posts'=>$posts,'cat'=>$cat]);
    // }

    public function category($slug){
        $cat = DB::table('categories')->where('slug',$slug)->first();
        $posts = DB::table('posts')->where('category_id','LIKE','%'.$cat->cid.'%')->get();
        $latest = DB::table('posts')->where('status','publish')->orderby('pid','DESC')->get();
        return view ('frontend.category',['posts'=>$posts,'cat'=>$cat,'latest'=>$latest]);
    }

    public function article($slug){
        $data = DB::table('posts')->where('slug',$slug)->first();
        $related = DB::table('posts')->where('category_id','LIKE','%'.$data->category_id.'%')->get();
        $latest = DB::table('posts')->where('status','publish')->orderby('pid','DESC')->get();
        return view ('frontend.article',['data'=>$data,'related'=>$related,'latest'=>$latest]);
    }
}
