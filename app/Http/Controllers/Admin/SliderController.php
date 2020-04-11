<?php

namespace App\Http\Controllers\Admin;

use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $n=1;
        $rows=Slider::latest()->paginate(10);
        return view('Admin.part.slider.index',compact('rows','n'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('Admin.part.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'title'=>'required',
            'imageurl'=>'mimes:jpeg,png,bmp,gif,svg',
            
 
        ]);
        //........................end validation.......................
       
        
     

        Slider::create([
            'title'=>request('title'),
            'imageUrl'=>request('imageUrl'),


        ]);

        alert()->success('با موفقیت اضافه شد :)', );
        return redirect(Route('slider.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('Admin.part.slider.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $this->validate(request(), [
            'title'=>'required',
            'imageurl'=>'mimes:jpeg,png,bmp,gif,svg',
            
 
        ]);
        //........................end validation.......................
       
        
     

        $slider->update([
            'title'=>request('title'),
            'imageUrl'=>request('imageUrl'),


        ]);

        alert()->success('با موفقیت آپدیت شد :)', );
        return redirect(Route('slider.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
        return back();
    }
}
