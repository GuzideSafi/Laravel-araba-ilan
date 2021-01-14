<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist=Car::where('user_id',Auth::id())->get();
        return view('home.user_car',['datalist'=>$datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datalist = Category::with('children')->get();
        return view('home.user_car_add', ['datalist' => $datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Car;

        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->address = $request->input('address');
        $data->brand = $request->input('brand');
        $data->series = $request->input('series');
        $data->model = $request->input('model');
        $data->yil = $request->input('yil');
        $data->yakittipi = $request->input('yakittipi');
        $data->vitestipi = $request->input('vitestipi');
        $data->motorhacmi = $request->input('motorhacmi');
        $data->motorgucu = $request->input('motorgucu');
        $data->kilometre = $request->input('kilometre');
        $data->renk = $request->input('renk');
        $data->image = $request->input('image');
        $data->category_id = $request->input('category_id');
        $data->user_id = Auth::id();
        $data->price = $request->input('price');
        $data->detail = $request->input('detail');
        $data->slug = $request->input('slug');
        $data->status = $request->input('status');
        $data->image = Storage::putFile('images', $request->file('image'));
        $data->save();

        return redirect()->route('user_cars');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car, $id)
    {
        $data=Car::find($id);
        $datalist = Category::all();
        return view('home.user_car_edit',['data'=>$data,'datalist'=>$datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car, $id)
    {
        $data=Car::find($id);
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->address = $request->input('address');
        $data->brand = $request->input('brand');
        $data->series = $request->input('series');
        $data->model = $request->input('model');
        $data->yil = $request->input('yil');
        $data->yakittipi = $request->input('yakittipi');
        $data->vitestipi = $request->input('vitestipi');
        $data->motorhacmi = $request->input('motorhacmi');
        $data->motorgucu = $request->input('motorgucu');
        $data->kilometre = $request->input('kilometre');
        $data->renk = $request->input('renk');
        $data->image = $request->input('image');
        $data->category_id = $request->input('category_id');
        $data->user_id = Auth::id();
        $data->price = $request->input('price');
        $data->detail = $request->input('detail');
        $data->slug = $request->input('slug');
        $data->status = $request->input('status');
        if($request->file('image')!=null)
        {
            $data->image = Storage::putFile('images',$request->file('image'));
        }

        $data->save();
        return redirect()->route('user_cars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car,$id)
    {
        DB::table('cars')->where('id','=',$id)->delete();
        return redirect()->route('user_cars');
    }
}
