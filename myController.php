<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
use Illuminate\Support\Facades\DB;

class myController extends Controller
{
    public function slist(){
 		$student = DB::table('students')->get();

 		return view('show', compact('student'));
    }

    public function save(Request $request){
     
 		$first_name = $request->fname;
 		$last_name = $request->lname;
 		$age = $request->age;
 		$email_add = $request->email;

 		$student = new student ;
 		$student->first_name = $first_name;
 		$student->last_name = $last_name;
 		$student->age = $age;
 		$student->email = $email_add;
 		$student->save(); 	

 		return redirect('/list');
    } 

    public function delete($id){
    	DB::table('students')->where('id' , $id)->delete();

    	return redirect('/list');
    }

    public function edit($id){
    	$student = DB::table('students')->where('id' , $id)->get();

    	return view('update' , compact('student'));
    }

    public function update(Request $request){

    	DB::table('students')->where('id', $request->id)->update([
    		'first_name' => $request->fname ,
    		'last_name' => $request->lname ,
    		'age' => $request->age ,
    		'email' => $request->email
    		]);

    	return redirect('/list');
    }
}
