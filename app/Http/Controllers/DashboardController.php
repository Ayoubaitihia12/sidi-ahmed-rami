<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function admin(){

        $schools = User::where('role','school')->count();
        return view('dashboard.admin',compact('schools'));
    }

    public function school(){
       
        $id = Auth::id();

        $students = Students::where('school_id',$id)->count();
        
        $registerStudents = Students::where('studing',true)->where('school_id',$id)->count();
        $inregisterStudents = Students::where('studing',false)->where('school_id',$id)->count();

        return view('dashboard.school',compact('students','registerStudents','inregisterStudents'));
    }
}
