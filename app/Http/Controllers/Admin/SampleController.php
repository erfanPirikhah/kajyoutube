<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Sample;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

class SampleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $n=1;
        $rows=Sample::latest()->paginate(15);
        return view('Admin.part.sample.index', compact('rows', 'n'));
    }


    public function search()
    {
        $keyword= request('search');
        
        $rows= Sample::Search($keyword)->latest()->paginate(20);
        $n=1;
        return view('Admin.part.sample.index', compact('rows', 'n'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('Admin.part.sample.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
         //......................... Validation .............
        $this->validate(request(), [
            'name'=>'required',
            'category'=>'required',
            'body'=>'required',
            'lang'=>'required',
 
        ]);
        //........................end validation.......................

       
        
       

        $sample=Sample::create([
             'name'=>request('name'),
             'category'=>request('category'),
             'lang'=>request('lang'),
             'body'=>request('body'),
             'imageUrl'=>request('imageUrl'),
             'videoUrl'=>request('videoUrl')
       
         ]);
        //  $sample->category()->attach(request('category'));
        alert()->success('با موفقیت اضافه شد :)', );
        return redirect(Route('sample.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sample  $sample
     * @return \Illuminate\Http\Response
     */
    public function show(Sample $sample)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sample  $sample
     * @return \Illuminate\Http\Response
     */
    public function edit(Sample $sample)
    {
        $categories=Category::all();
        return view('Admin.part.sample.edit', compact('sample', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sample  $sample
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sample $sample)
    {
        $this->validate(request(), [
            'name'=>'required',
            'category'=>'required',
            'lang'=>'required',
 
        ]);
        //........................end validation.......................

        //..................upload image..............
       
        $url= request('imageUrl');
        if ($url=="") {
            $url= $url= $sample->imageUrl;
        } else {
            $url=request('imageUrl');
        }
    
   

        //..................end upload image..............
          
        $sample->update([
            'name'=>request('name'),
             'category'=>request('category'),
             'lang'=>request('lang'),
             'body'=>request('body'),
              'imageUrl'=>request('videoUrl'),
              'imageUrl'=>$url,
            

    ]);
        alert()->success('با موفقیت آپدیت شد :)');
    

        return redirect(Route('sample.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sample  $sample
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sample $sample)
    {
        $sample->delete();
        alert()->error('باموفقیت حذف شد!!!');
        return back();
    }
}
