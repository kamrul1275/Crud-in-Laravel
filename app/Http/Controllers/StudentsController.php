<?php

namespace App\Http\Controllers;
use App\models\students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {

        $student = students::orderByDesc('id')->get();
        return view('crud', compact('student'));
    }


    function store(Request $request){

       $request->validate([
          'Name' =>'required',
           'Class' =>'required',
           'Roll' =>'required',
       ]);

students::insert([

    'Name'=> $request-> Name,
    'Class'=> $request->Class,
    'Roll'=> $request-> Roll,
]);
return redirect()->back()-> with('succes', 'succesfully data added');
    }


    // student edit profile


    public function edit($id)
    {
        $student = students::findOrFail($id)->withDefault();
        return view('edit',compact('student'));
    }


    // 8888888888 data delete 8888888888888

    public function delete($id)
    {
        $student = students::findOrFail($id)->delete();
        return redirect()->back()-> with('delete', 'succesfully data added');
    }
   
}
