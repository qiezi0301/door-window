<?php

namespace App\Http\Controllers;

use App\Journalism;
use Illuminate\Http\Request;

class JournalismController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $journalisms = Journalism:: orderBy('id','desc')->paginate(10);
//        dd($journalisms);
        return view('new.index')->with('journalisms', $journalisms);
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
     * @param  \App\Journalism  $journalism
     * @return \Illuminate\Http\Response
     */
    public function show(Journalism $journalism)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Journalism  $journalism
     * @return \Illuminate\Http\Response
     */
    public function edit(Journalism $journalism)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Journalism  $journalism
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Journalism $journalism)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Journalism  $journalism
     * @return \Illuminate\Http\Response
     */
    public function destroy(Journalism $journalism)
    {
        //
    }
}
