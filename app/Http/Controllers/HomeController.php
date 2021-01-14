<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public static function getsetting()
    {
        return Setting::first();
    }
    public static function categoryList()
    {
        return Category::where('parent_id','=',0)->with('children')->get();
    }

    public function index(){
        $setting=Setting::first();
        $slider=Car::select('id','title','image','slug','price','category_id')->limit(4)->get();
        $daily=Car::select('id','title','image','slug')->limit(6)->inRandomOrder()->get();
        $last=Car::select('id','title','image','slug','price','kilometre','yil','motorhacmi','vitestipi','yakittipi','motorgucu','renk')->limit(6)->orderByDesc('id')->get();
        $picked=Car::select('id','title','image','slug','price')->limit(6)->inRandomOrder()->get();
        $data=[
            'setting'=>$setting,
            'daily'=>$daily,
            'last'=>$last,
            'picked'=>$picked,
            'slider'=>$slider,
            'page'=>'home'

        ];
        return view('home.index',$data);
    }
    public function search_page(){
        $setting=Setting::first();
        return view('home.search_page',['setting'=>$setting,'page'=>'home']);
    }
    public function getcar(Request $request)
    {
        $search=$request->input('search');
        $count=Car::where('title','like','%'.$search.'%')->get()->count();
        if($count==1)
        {
            $data=Car::where('title','like','%'.$search.'%')->first();
            return redirect()->route('car',['id'=>$data->id,'slug'=>$data->slug]);
        }
        else
        {
            return redirect()->route('carlist',['search'=>$search]);
        }


    }

    public function carlist($search){
        $datalist=Car::where('title','like','%'.$search.'%')->get();

        return view('home.search_cars',['search'=>$search,'datalist'=>$datalist]);

    }

    public function car($id,$slug){
        $setting=Setting::first();
        $data=Car::find($id);
        $datalist=Image::where('car_id',$id)->get();
        return view('home.car_detail',['setting'=>$setting,'data'=>$data,'datalist'=>$datalist]);

    }
    public function categorycars($id,$slug){
        $setting=Setting::first();
        $datalist=Car::where('category_id',$id)->get();
        $data=Category::find($id);

        return view('home.category_cars',['data'=>$data,'datalist'=>$datalist,'setting'=>$setting]);

    }

    public function aboutus(){
        $setting=Setting::first();
        return view('home.about',['setting'=>$setting,'page'=>'home']);
    }
    public function contact(){
        $setting=Setting::first();
        return view('home.contact',['setting'=>$setting,'page'=>'home']);
    }
    public function faq(){
        $setting=Setting::first();
        $datalist=Faq::all()->sortBy('position');
        return view('home.faq',['datalist'=>$datalist,'setting'=>$setting]);
    }
    public function references(){
        $setting=Setting::first();
        return view('home.references',['setting'=>$setting,'page'=>'home']);
    }
    public function sendmessage(Request $request)
    {
        $data = new Message();

        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');


        $data->save();

        return redirect()->route('contact')->with('success','Mesajınız kaydedilmiştir');
    }
    public function login(){
        return view('admin.login');
    }
    public function logincheck(Request $request)
    {
        if($request->isMethod('post'))
        {
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }

            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
        else
        {
            return view('admin.login');
        }
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
