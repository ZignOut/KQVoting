<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studentlist = DB::table('student')->get();
        return view('/data/student', ['studentlist'=>$studentlist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     *///
    public function create(Request $request)
    {
        $stuid = $request->input('stuid');
        $name = $request->input('stuname');
        $email = $request->input('stuemail');
        $rollno = $request->input('sturollno');
        $data = array('stuid'=>$stuid, 'name'=>$name, 'email'=>$email, 'rollno'=>$rollno, 'created_at'=>date('Y-m-d H:i:s'), 'modified_at'=>date('Y-m-d H:i:s'));
        DB::table('student')->create($data);
        
        $studentlist = DB::table('student')->get();
        return view('/data/student', ["studentlist"=>$studentlist]);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $studata = DB::table('student')->get()->where('stuid',$id);
        return view('/data/student', ['studata', $studata]);
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
        $studentlist = DB::table('student')->where('stuid', $id);
        return view('studentlist', $studentlist);
    }
}
