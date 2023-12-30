<?php

namespace App\Http\Controllers;

use App\Http\Requests\SchoolRequest;
use App\Http\Requests\UpdateSchoolRequest;
use App\Models\User;
use App\Models\Students;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schools = User::where('role','school')->orderBy('created_at', 'desc')->paginate(10);
        $schoolNumbers = $schools->count();

        return view('schools.index',compact('schools','schoolNumbers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('schools.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SchoolRequest $request)
    {
        $data = $request->validated();

        $data['certificate_number'] = 0;

        User::create([
            'code' => $data['code'],
            'name' => $data['name'],
            'phone' => $data['phone'],
            'commune' => $data['commune'],
            'role' => 'school',
            'password' => Hash::make($data['password']),
            'certificate_number' => $data['certificate_number']
        ]);

        return to_route('schools.index')->with('success','تمت اضافة المؤسسة بنجاح ');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $school)
    {
        return view('schools.show',compact('school'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $school)
    {
        return view('schools.edit',compact('school'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSchoolRequest $request, User $school)
    {
        $data = $request->validated();

        // dd($data);

        $school->update($data);

        return to_route('schools.index')->with('success','تم تعديل المؤسسة بنجاح');
    }

    public function students(User $school,Request $request){
        
        $studentsQuery = Students::query();

        // dd($school->id);

        $level = $request->input('level');
        $code = $request->input('code') ?? null;

        if(!empty($level) && $request->input('level') !== 'all'){
            $studentsQuery->where('level','=',$level);
        }
        if($code){
            $studentsQuery->where('code','=',$code);
        }

        $students = $studentsQuery->where('school_id',$school->id)->orderBy('created_at', 'desc')->paginate(10);

        return view('schools.students',compact('students','code','school'));
    }

}
