<?php

namespace App\Http\Controllers\Admin;

use App\Content;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

use Artesaos\SEOTools\Facades\SEOTools;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $n=1;
        $rows=Content::latest()->paginate(15);
        return view('Admin.part.content.index', compact('rows', 'n'));
    }

    public function search()
    {
        $keyword= request('search');
        $rows= Content::search($keyword)->latest()->paginate(20);
        $n=1;
        return view('Admin.part.content.index', compact('rows', 'n'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.part.content.create');
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
            'description=>required',
            'imageurl'=>'mimes:jpeg,png,bmp,gif,svg',
            'audioUrl'=>'mimes::application/octet-stream,audio/mpeg,mpga,mp3,wav',
            'lang'=>'required',
            'tags'=>'required',
 
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

        Content::create([
            'title'=>request('title'),
            'description'=>request('discription'),
            'lang'=>request('lang'),
            'body'=>request('body'),
            'imageUrl'=>request('imageUrl'),
            'videoUrl'=>request('videoUrl') ,
            'audioUrl'=>$urlaudio,
            'tags'=>request('tags')


        ]);

        
        alert()->success('با موفقیت اضافه شد :)', );
        return redirect(Route('content.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $content)
    {
        return view('admin.part.content.edit', compact('content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Content $content)
    {
       
        
                 //......................... Validation .............
        $this->validate(request(), [
            'title'=>'required',
            'body'=>'required',
            'description=>required',
            'imageurl'=>'mimes:jpeg,png,bmp,gif,svg',
            'audioUrl'=>'mimes::application/octet-stream,audio/mpeg,mpga,mp3,wav',
            'lang'=>'required',
            'tags'=>'required'
         
                ]);
        //........................end validation.......................

       
        
        $url= request('imageUrl');
        if ($url=="") {
            $url= $url= $content->imageUrl;
        } else {
            $url=request('imageUrl');
        }
   

        //..................end upload image..............

        //..................upload audio..............
       
        
        $audioFile=$request->File('audioUrl');
        if ($audioFile=="") {
            $urlaudio=$content->audioUrl;
        } else {
            $year=Carbon::now()->year;
            $imagepath="/upload/audio/content/$year";
            $imagefilename=$audioFile->getClientOriginalName();
            $imagefilenames=time().$imagefilename;
            $audioFile->move(public_path($imagepath), $imagefilenames);
            $urlaudio=$imagepath.'/'.$imagefilenames;
        }
           
               
        //..................end upload audio..............

        $content->update([
        'title'=>request('title'),
        'description'=>request('discription'),
        'body'=>request('body'),
        'lang'=>request('lang'),
        'imageUrl'=> $url,
        'videoUrl'=>request('videoUrl') ,
        'audioUrl'=>$urlaudio,
        'tags'=>request('tags')

    ]);
        alert()->success('با موفقیت آپدیت شد :)');

        return redirect(Route('content.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content)
    {
        $content->delete() ;
        alert()->error('باموفقیت حذف شد!!!');
        return back();
    }
}
