<?php

namespace App\Http\Controllers\Admin;

use App\CenterPage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class CenterPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $n=1;
        $rows=CenterPage::latest()->paginate(15);
        return view('Admin.part.centerPage.index',compact('rows','n'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.part.centerPage.create');
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
            'lang'=>'required',
            'body'=>'required',
            'icon'=>'mimes:jpeg,png,bmp,gif,svg',
            'imageurl'=>'mimes:jpeg,png,bmp,gif,svg',
            
 
        ]);
        //........................end validation.......................
       
             
        $iconFile=$request->File('icon');
        if ($iconFile!="") {
            $year=Carbon::now()->year;
            $imagepath="/upload/icon/content/$year";
            $imagefilename=$iconFile->getClientOriginalName();
            $imagefilenames=time().$imagefilename;
            $iconFile->move(public_path($imagepath), $imagefilenames);
            $urlicon=$imagepath.'/'.$imagefilenames;
        } else {
            $urlicon="";
        }
     

        CenterPage::create([
            'title'=>request('title'),
            'lang'=>request('lang'),
            'body'=>request('body'),
            'icon'=> $urlicon,
            'imageUrl'=>request('imageUrl'),


        ]);

        alert()->success('با موفقیت اضافه شد :)', );
        return redirect(Route('centerPage.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CenterPage  $centerPage
     * @return \Illuminate\Http\Response
     */
    public function show(CenterPage $centerPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CenterPage  $centerPage
     * @return \Illuminate\Http\Response
     */
    public function edit(CenterPage $centerPage)
    {
        return view('Admin.part.centerPage.edit',compact('centerPage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CenterPage  $centerPage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CenterPage $centerPage)
    {
        $this->validate(request(), [
            'title'=>'required',
            'lang'=>'required',
            'body'=>'required',
            'icon'=>'mimes:jpeg,png,bmp,gif,svg',
            'imageurl'=>'mimes:jpeg,png,bmp,gif,svg',
            
 
        ]);
        //........................end validation.......................
       
             
        $iconFile=$request->File('icon');
         if ($iconFile=="") {
            $urlicon=$centerPage->icon;
           
        } else {
            $year=Carbon::now()->year;
            $imagepath="/upload/icon/content/$year";
            $imagefilename=$iconFile->getClientOriginalName();
            $imagefilenames=time().$imagefilename;
            $iconFile->move(public_path($imagepath), $imagefilenames);
            $urlicon=$imagepath.'/'.$imagefilenames;
        }
     

        $centerPage->update([
            'title'=>request('title'),
            'lang'=>request('lang'),
            'body'=>request('body'),
            'icon'=> $urlicon,
            'imageUrl'=>request('imageUrl'),


        ]);

        alert()->success('با موفقیت آپدیت شد :)', );
        return redirect(Route('centerPage.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CenterPage  $centerPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(CenterPage $centerPage)
    {
        //
    }
}
