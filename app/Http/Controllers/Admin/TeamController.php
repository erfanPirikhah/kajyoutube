<?php

namespace App\Http\Controllers\Admin;

use App\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $n=1;
        $rows=Team::latest()->paginate(15);
        return view('Admin.part.teamBranding.index',compact('rows','n'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.part.teamBranding.create');
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
            'lang'=>'required',
            'imageurl'=>'mimes:jpeg,png,bmp,gif,svg',
            
 
        ]);
        //........................end validation.......................
       
        
     

        Team::create([
            'title'=>request('title'),
            'lang'=>request('lang'),
            'body'=>request('body'),
            'icon'=>request('imageUrl'),


        ]);

        alert()->success('با موفقیت اضافه شد :)', );
        return redirect(Route('team.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        
        return view('Admin.part.teamBranding.edit',compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $this->validate(request(), [
            'title'=>'required',
            'lang'=>'required',
            'body'=>'required',
            'imageurl'=>'mimes:jpeg,png,bmp,gif,svg',
            
 
        ]);
        //........................end validation.......................
       
        
     

        $team->update([
            'title'=>request('title'),
            'body'=>request('body'),
            'lang'=>request('lang'),
            'icon'=>request('imageUrl'),


        ]);

        alert()->success('با موفقیت آپدیت شد :)', );
        return redirect(Route('team.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();
        alert()->success('با موفقیت حذف شد :)', );
        return back();
    }
}
