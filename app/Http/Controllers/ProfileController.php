<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateSchoolRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    public function show(){

        $user = Auth::user();

        return view('profile.show',compact('user'));
    }
}
