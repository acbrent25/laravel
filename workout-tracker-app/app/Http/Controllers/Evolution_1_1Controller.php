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
        return view('evolution.wk1-d1.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('evolution.wk1-d1.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $evolution_1_1 = Evolution_1_1::create([
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

        return redirect()->back();

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
        $evolution_1_1 = Evolution_1_1::find($id);

        return view('evolution.wk1-d1.edit')->with('evolution_1_1', $evolution_1_1);
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
        $evolution_1_1 = Evolution_1_1::find($id);

        $evolution_1_1->bb_press_r_1 = $request->bb_press_r_1;
        $evolution_1_1->bb_press_r_2 = $request->bb_press_r_2;
        $evolution_1_1->bb_press_r_3 = $request->bb_press_r_3;
        $evolution_1_1->bb_press_r_4 = $request->bb_press_r_4;
        $evolution_1_1->bb_press_r_5 = $request->bb_press_r_5;
        $evolution_1_1->bb_press_r_6 = $request->bb_press_r_6;
        $evolution_1_1->bb_press_r_7 = $request->bb_press_r_7;
        // Weight
        $evolution_1_1->bb_press_w_1 = $request->bb_press_w_1;
        $evolution_1_1->bb_press_w_2 = $request->bb_press_w_2;
        $evolution_1_1->bb_press_w_3 = $request->bb_press_w_3;
        $evolution_1_1->bb_press_w_4 = $request->bb_press_w_4;
        $evolution_1_1->bb_press_w_5 = $request->bb_press_w_5;
        $evolution_1_1->bb_press_w_6 = $request->bb_press_w_6;
        $evolution_1_1->bb_press_w_7 = $request->bb_press_w_7;

        $evolution_1_1->save();
        return redirect()->back();
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
