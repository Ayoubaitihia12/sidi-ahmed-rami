<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Validation\Rules;

class ChangePasswordController extends Controller
{
    public function changePassword(){
        
        return view('auth.changePassword');
    }

    public function updatePassword(Request $request){
        
        // dd($request);

        $request->validate([
            'oldPassword' => 'required',
            'newPassword' => ['required', 'string', 'confirmed', 'min:8', 'regex:/[A-Z]/', 'regex:/[a-z]/', Rules\Password::defaults()],
        ]);

        if(!Hash::check($request->oldPassword, auth()->user()->password)){
            return back()->with("error", "كلمة السر القديمة خاطئة");
        }

        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->newPassword)
        ]);

        return back()->with("success", "تم تغيير كلمة السر بنجاح");


    }

    public function adminChangePassword(User $school){

        return view('auth.adminChangePassword',compact('school'));
    }

    public function adminUpdatePassword(Request $request,User $school){

        $request->validate([
            'newPassword' => ['required', 'string', 'confirmed', 'min:8', 'regex:/[A-Z]/', 'regex:/[a-z]/', Rules\Password::defaults()],
        ]);

        User::whereId($school->id)->update([
            'password' => Hash::make($request->newPassword)
        ]);

        return back()->with("success", "تم تغيير كلمة السر بنجاح");

        // return view('auth.adminChangePassword');
    }



}
