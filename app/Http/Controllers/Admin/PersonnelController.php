<?php

namespace App\Http\Controllers\Admin;

use App\Personnel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

class PersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $n=1;
        $rows=Personnel::latest()->paginate(15);
        return view('Admin.part.personnel.index',compact('rows','n'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.part.personnel.create');
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
         $this->validate(request(),[
            'name'=>'required',
            'body'=>'required',
            'post'=>'required',
            'imageurl'=>'required',
            'imageurl'=>'mimes:jpeg,png,bmp,gif,svg',
            'lang'=>'required',
 
        ]);
        //........................end validation.......................

         Personnel::create([
             'name'=>request('name'),
             'body'=>request('body'),
             'post'=>request('post'),
             'lang'=>request('lang'),
             'imageUrl'=>request('imageUrl')
 
         ]);
         alert()->success('با موفقیت اضافه شد :)',);
         return redirect(Route('personnel.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Personnel  $personnel
     * @return \Illuminate\Http\Response
     */
    public function show(Personnel $personnel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Personnel  $personnel
     * @return \Illuminate\Http\Response
     */
    public function edit(Personnel $personnel)
    {
        return view('Admin.part.personnel.edit',compact('personnel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Personnel  $personnel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personnel $personnel)
    {
              //......................... Validation .............

              
              $this->validate(request(),[
                'name'=>'required',
                'body'=>'required',
                'post'=>'required',
                'imageurl'=>'mimes:jpeg,png,bmp,gif,svg',
                'lang'=>'required',
     
            ]);
            //........................end validation.......................

            //..................upload image..............
            
            $url= request('imageUrl');
            if($url==""){
            $url= $url= $personnel->imageUrl;
        }else{
            
            $url=request('imageUrl');
        }
        
       
    
            //..................end upload image..............
              
            $personnel->update([
                'name'=>request('name'),
                'body'=>request('body'),
                'post'=>request('post'),
                'lang'=>request('lang'),
                'imageUrl'=>$url

        ]);
        alert()->success('با موفقیت آپدیت شد :)');
    
        return redirect(Route('personnel.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Personnel  $personnel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personnel $personnel)
    {
        $personnel->delete();
        alert()->error('باموفقیت حذف شد!!!');
        return back();
    }
}
