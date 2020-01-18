<?php

namespace App\Http\Controllers\Admin;

use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $n=1;
        $rows=Order::latest()->paginate(15);
        return view('Admin.part.order.index' , compact('rows','n'));
    }


  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'firstName'=>'required',
            'lastName'=>'required',
            'email'=>'required',
            'category_id'=>'required',
            'mobile'=>'required|regex:/[0-9]{10}/|digits:11',
            'price'=>'required',
            'body'=>'required',
            
 
        ]);

        Order::create([
            'firstName'=>request('firstName'),
            'lastName'=>request('lastName'),
            'category_id'=>request('category_id'),
            'email'=>request('email'),
            'mobile'=>request('mobile'),
            'price'=>request('price'),
            'body'=>request('body')
        ]);
        alert()->success('سفارش شما با موفقیت ثبت شد :)',);
 
         return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view('Admin.part.order.show',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();
        alert()->error('باموفقیت حذف شد!!!');
         return back();
    }
}
