<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    
    /**
     *  Student Store
     */
    public function resultStore(Request $request){

         // Photo Management System
         $unique_name = '';
         if( $request -> hasFile('photo') ){
 
             $file = $request -> file('photo');
             $unique_name = md5(time() . rand()) . '.' . $file -> getClientOriginalExtension();
             $file -> move(public_path('media/student'), $unique_name);
 
 
         }


        // Result calculation

        $bangla = $request -> bangla;
        $english = $request -> english;
        $math = $request -> math;

        $pluses = $bangla + $english + $math;

        $final_result = $pluses / 3;
        
        return Student::create([
            'name'              => $request -> name,
            'roll_no'           => $request -> roll,
            'regi_no'           => $request -> regi,
            'inst'              => $request -> inst,
            'board'             => $request -> board,
            'year'              => $request -> year,
            'exam'              => $request -> exam,
            'bangla'            => $request -> bangla,
            'english'           => $request -> english,
            'math'              => $request -> math,
            'bgpa'              => $request -> bgpa,
            'egpa'              => $request -> egpa,
            'mgpa'              => $request -> mgpa,
            'cgpa'              => $final_result,
            'photo'             => $unique_name,
        ]);

    }



    public function resultCheck(Request $request){
        
        $year = $request -> year;
        $data = Student::where() -> get();

        $data;
        
    }


    public function result(){
        
        $data = Student::where('roll_no', 112233) -> get();

        return $data;
        
    }



    /**
     *  Result Checking System
     */

    // public function resultCheck(Request $request){

    //     //$all_data = Student::where('name', 'farjana akter') -> get();

    //    // $ex = explode(',', $all_data);
        
    //     $exam = $request -> exam;
    //     $year = $request -> year;
    //     $board = $request -> board;
    //     $roll = $request -> roll;
    //     $regi = $request -> regi;

        
    //     //$all_data = Student::where('exam', $exam) -> andWhere('board', $board) -> andWhere('roll_no', $roll) -> andWhere('regi_no', $regi) -> andWhere('year', $year) -> get();

    //     $all_data = Student::find(2009);


    //     return $all_data;


   //}


}
