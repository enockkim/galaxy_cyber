<?php

namespace App\Http\Controllers;

Use Redirect;
use Illuminate\Http\Request;
use App\Models\orders;
use Illuminate\Routing\Redirector;
// use App\Post;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function order(Request $request)
    {
    
        // Post::create([
    
            // 'user_id' => Auth::user()->id,
            $order = new orders;
            $order -> name=$request->name;
            $order -> phoneNumber=$request->phoneNumber;
            $order -> service=$request->service;
            $order -> description=$request->description;
            $order -> save();
            
            $request->session()->flash('status','success');
            // return redirect()->route('order_successfull');
            return redirect()->back();
            // 'fat' => $request->fat
        // ]);
    
        // return redirect('/');
    
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $orders = Orders::all();
        return view('dashboard', ['orders'=>$orders]);
    }   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function edit(orders $orders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, orders $orders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function destroy(orders $orders)
    {
        //
    }
}
