<?php

namespace App\Http\Controllers\Admin;

use App\Us;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class UsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $n=1;
       $rows=Us::latest()->paginate(15);
       return view('Admin.part.us.index',compact('rows','n'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name'=>'required',
            'email'=>'required',
            'mobile'=>'required|regex:/[0-9]{10}/|digits:11',
            'description'=>'required',
            'body'=>'required',
            
 
        ]);

        Us::create([
            'name'=>request('name'),
            'email'=>request('email'),
            'mobile'=>request('mobile'),
            'description'=>request('description'),
            'body'=>request('body')
        ]);
        alert()->success('با موفقیت اضافه شد :)',);
         return back();
         
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Us  $us
     * @return \Illuminate\Http\Response
     */
    public function show(Us $us)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Us  $us
     * @return \Illuminate\Http\Response
     */
    public function edit(Us $us)
    {
        return view('Admin.part.us.show',compact('us'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Us  $us
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Us $us)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Us  $us
     * @return \Illuminate\Http\Response
     */
    public function destroy(Us $us)
    {
        $us->delete();
        alert()->error('باموفقیت حذف شد!!!');
        return back();
    }
}
