<?php

namespace App\Http\Controllers\Admin;

use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $n=1;
        $rows=Page::latest()->paginate(15);
        return view('Admin.part.page.index', compact('rows', 'n'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.part.page.create');
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
            'body'=>'required',
            'url'=>'required',
            'imageurl'=>'mimes:jpeg,png,bmp,gif,svg',
            'audioUrl'=>'mimes::application/octet-stream,audio/mpeg,mpga,mp3,wav',
 
        ]);
        //........................end validation.......................
       
        
        //..................upload audio..............
       
        
        $audioFile=$request->File('audioUrl');
        if ($audioFile!="") {
            $year=Carbon::now()->year;
            $imagepath="/upload/audio/content/$year";
            $imagefilename=$audioFile->getClientOriginalName();
            $imagefilenames=time().$imagefilename;
            $audioFile->move(public_path($imagepath), $imagefilenames);
            $urlaudio=$imagepath.'/'.$imagefilenames;
        } else {
            $urlaudio="";
        }
    
        
        //..................end upload audio..............

        Page::create([
            'title'=>request('title'),
            'url'=>request('url'),
            'body'=>request('body'),
            'imageUrl'=>request('imageUrl'),
            'videoUrl'=>request('videoUrl') ,
            'audioUrl'=>$urlaudio,


        ]);

        
        alert()->success('با موفقیت اضافه شد :)', );
        return redirect(Route('page.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
    }


}
