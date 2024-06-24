<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Hash;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function register()
    {
        $role = DB::table('role_type_users')->get();
        return view('auth.register',compact('role'));
    }
    
    public function storeUser(Request $request)
    {
        $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|string|email|max:255|unique:users',
            'role_name' => 'required|string|max:255',
            'password'  => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);

        $dt       = Carbon::now();
        $todayDate = $dt->toDayDateTimeString();
        $defaultImagePath = public_path('images/photo_defaults.jpg');
        
        $user = User::create([
            'name'      => $request->name,
            'avatar'    => $defaultImagePath,
            'email'     => $request->email,
            'join_date' => $todayDate,
            'role_name' => $request->role_name,
            'password'  => Hash::make($request->password),
        ]);

        $userImagePath = public_path('images\\user_pfp\\' . $user->id . '.jpg');

        // Copy the default image to the new path
        copy($defaultImagePath, $userImagePath);

        $folderPosition = strpos($userImagePath, 'images\\');

        $relativePath = substr($userImagePath, $folderPosition + strlen('images\\'));

        $user->update(['avatar' => $relativePath]);

        Toastr::success('Create new account successfully :)','Success');
        return redirect()->route('login');
    }
}