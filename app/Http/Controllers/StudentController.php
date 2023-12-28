<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use Illuminate\Http\Request;
use App\Models\Students;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $id = Auth::id();
        $studentsQuery = Students::query();

        $level = $request->input('level');

        if(!empty($level) && $request->input('level') !== 'all'){
            $studentsQuery->where('level','=',$level);
        }

        $students = $studentsQuery->where('school_id',$id)->orderBy('created_at', 'desc')->paginate(10);

        return view('students.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentRequest $request)
    {

        $id = Auth::id();

        $data = $request->validated();

        if($data['studing'] == "1"){
            $data["studing"] = true;
        }else{
            $data["studing"] = false;
        }

        $data['school_id'] = $id;

        $data['certificate_number'] = 0;

        Students::create($data);

        return to_route('students.index')->with('success','تم اضافة التلميذ (ة) بنجاج');
    }

    /**
     * Display the specified resource.
     */
    public function show(Students $student)
    {

        $this->authorize('view',$student);

        return view('students.show',compact('student'));
    }

    public function certificate(Students $student)
    {
        $user = Auth::user();


        $user->increment('certificate_number');

        // dd($user->certificate_number);


        return view('students.certificate',compact('student','user'));
    }

    public function search(Request $request)
    {
        $id = Auth::id();
        $studentsQuery = Students::query();

        $name = $request->input('name') ?? null;
        $date = $request->input('date');

        if($name){
            $studentsQuery->where('arName','LIKE','%'.$name.'%');
        }

        if($date){
            $studentsQuery->whereDate('dateBirth',$date);
        }
        

        $students = $studentsQuery->orderBy('created_at', 'desc')->get();

        if(empty($name) && empty($date)){
            $students = [];
        }

        return view('students.search',compact('students','name'));
    }

    
}
