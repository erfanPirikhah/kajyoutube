<?php

namespace App\Http\Controllers\Admin;

use App\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $n=1;
        
        $rows=Menu::latest()->paginate(15);
           
        return view('Admin.part.menu.index',compact('rows','n'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $chid=Menu::where('chid', '0')->get();
          
        return view('Admin.part.menu.create',compact('chid'));
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
            'url'=>'required',
            'lang'=>'required',
            'chid'=>'required',
            'status'=>'required',
            'sort'=>'required',
        
 
        ]);


        
        Menu::create([
            'title'=>request('title'),
            'url'=>request('url'),
            'lang'=>request('lang'),
            'chid'=>request('chid'),
            'status'=>request('status'),
            'sort'=>request('sort') ,
           


        ]);

        
        alert()->success('با موفقیت اضافه شد :)', );
        return redirect(Route('menu.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        $chid=Menu::where('chid', '0')->get();
        return view('Admin.part.menu.edit',compact('menu','chid'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        
        $this->validate(request(), [
            'title'=>'required',
            'url'=>'required',
            'lang'=>'required',
            'chid'=>'required',
            'status'=>'required',
            'sort'=>'required',
        
 
        ]);


        
        $menu->update([
            'title'=>request('title'),
            'url'=>request('url'),
            'lang'=>request('lang'),
            'chid'=>request('chid'),
            'status'=>request('status'),
            'sort'=>request('sort') ,
           


        ]);

        alert()->success('با موفقیت آپدیت شد :)');

        return redirect(Route('menu.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();
        alert()->error('باموفقیت حذف شد!!!');
        return back();
    }

    

}
