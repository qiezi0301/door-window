<?php

namespace App\Http\Controllers;

use App\Journalism;
use App\NewType;
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

        $tid = request('tid');
//        dd($tid);
        if($tid){
            $journalisms = Journalism:: orderBy('id','desc')->where('tid',$tid)->paginate(10);
        }else{
            $journalisms = Journalism:: orderBy('id','desc')->paginate(10);
        }

        $newTypes = NewType::all();
        return view('new.index',compact('journalisms', 'newTypes'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Journalism  $journalism
     * @return \Illuminate\Http\Response
     */
    public function show(Journalism $journalism)
    {
        $id = request('id');
        $newTypes = NewType::all();
        $journalism = Journalism::find($id);

        // 获取 “上一篇” 的 ID
        $preNewID = Journalism::where('id', '<', $id)->max('id');
        $pre_new = Journalism::find($preNewID);
        // 同理，获取 “下一篇” 的 ID
        $nextNewId = Journalism::where('id', '>', $id)->min('id');
        $next_new = Journalism::find($nextNewId);
        return view('new.detail', compact('journalism', 'newTypes','pre_new','next_new'));
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
