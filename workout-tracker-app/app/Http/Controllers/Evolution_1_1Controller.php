<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Evolution_1_1;

class Evolution_1_1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('evolution.1-1.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('evolution.1-1.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        Evolution_1_1::Create([
            // Reps
            'bb_press_r_1' => $request->bb_press_r_1,
            'bb_press_r_2' => $request->bb_press_r_2,
            'bb_press_r_3' => $request->bb_press_r_3,
            'bb_press_r_4' => $request->bb_press_r_4,
            'bb_press_r_5' => $request->bb_press_r_5,
            'bb_press_r_6' => $request->bb_press_r_6,
            'bb_press_r_7' => $request->bb_press_r_7,
            // Weight
            'bb_press_w_1' => $request->bb_press_w_1,
            'bb_press_w_2' => $request->bb_press_w_2,
            'bb_press_w_3' => $request->bb_press_w_3,
            'bb_press_w_4' => $request->bb_press_w_4,
            'bb_press_w_5' => $request->bb_press_w_5,
            'bb_press_w_6' => $request->bb_press_w_6,
            'bb_press_w_7' => $request->bb_press_w_7,

        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
