<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{


    public function index(){
        return view('welcome');
    }


    public function submitStudentDetails(Request $request){

$this->validate($request,[
"full_name"=>'required|string',
"age"=>'required|numeric',
"course"=>'required',
"gender"=>'required',
"tel"=>'required|numeric',
"address"=>'required'

]);


$student=new Student();
$student->full_name=$request->full_name;
$student->age=$request->age;
$student->phone_no=$request->tel;
$student->address=$request->address;
$student->gender=$request->gender;
$student->course=$request->course;
$student->save();

return redirect()->back()->with(['success'=>'added succesfully']);
}


public function filterPage(){
    return view('filter');
}

public function query(Request $request){

    if($request->ajax()) {
        $data = Student::where('full_name', 'LIKE',$request->search.'%')->get();
     $output = '';
        if (count($data)>0) {
           
            
            foreach($data as $row){
 $output.='<a href="/filter/'.$row->id.'" class="card" style="margin-bottom:10px 
 ;padding:10px">'.$row->full_name.'</a>
 </div>';
    }
            return $output;
        }else{
      $output='<div class="text-center">No data</div>';
      return $output;
        }
}
}

public function showId($id){

    $student=Student::find($id);

    return view('show',compact('student'));
}


}
