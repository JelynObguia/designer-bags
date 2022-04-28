<?php

namespace App\Http\Controllers;

use App\Models\Bag;
use Illuminate\Http\Request;

class BagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Bag::orderBy('brand')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bag  $bag
     * @return \Illuminate\Http\Response
     */
    public function show(Bag $bag)
    {
        return response()->json($bag);
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bag  $bag
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bag  $bag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bag $bag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bag  $bag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bag $bag)
    {
        //
    }
}
