<?php

namespace App\Http\Controllers;

use DB;
use App\Stockist;
use Illuminate\Http\Request;

class StockistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stockists = Stockist::all();

        return view('stockists.index',compact('stockists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stockists.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Stockist::create($request->all());
   
        return redirect()->route('stockists.index')
                        ->with('success','Stockist created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stockist  $stockist
     * @return \Illuminate\Http\Response
     */
    public function show(Stockist $stockist)
    {
        return view('stockists.show',compact('stockist'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stockist  $stockist
     * @return \Illuminate\Http\Response
     */
    public function edit(Stockist $stockist)
    {
        return view('stockists.edit',compact('stockist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stockist  $stockist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stockist $stockist)
    {
        $request->validate([
            'name' => 'required',
        ]);

        DB::table('stockists')->where('id',$request->id)->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
        ]);

        return redirect()->route('stockists.index')
                        ->with('success','Stockist updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stockist  $stockist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stockist $stockist)
    {
        $stockist->delete();
  
        return redirect()->route('stockists.index')
                        ->with('success','Stockist deleted successfully');
    }
}
