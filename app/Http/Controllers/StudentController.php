<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('type', '2')->get();
		
    	return view('student.index')->with('users', $users);
    	
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $user = new User();
        $user->username = $req->username;
        $user->password = $req->password;
        $user->name = $req->name;
        $user->type =  '2';
       
        if($user->save()){
            return redirect()->route('student.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $std = User::find($id);
        return view('student.details')->with('std', $std);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $std = User::find($id);
        return view('student.edit')->with('std', $std);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $req)
    {
        $user = User::find($id);
        $user->username = $req->username;
        $user->password = $req->password;
        $user->save();
    	return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function delete(Student $student)
    {
        $std = User::find($id);
        return view('student.delete')->with('std', $std);
    }
    public function destroy(Student $student)
    {
        //
    }
}
