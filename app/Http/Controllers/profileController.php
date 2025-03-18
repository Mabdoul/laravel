<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class profileController extends Controller
{
    public function index(){
        // dd(Profile::all());
        $profiles = Profile::paginate(9);
        return view('profile.profiles',compact('profiles'));
    }
    public function show(Request $request){
        $id=(int)$request->id;
        $profile = Profile::find($id);
        return view('profile.show',compact('profile'));
    }
    public function create(){
        
        return view('profile.create');
    }
    public function store(Request $request){
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $bio = $request->bio;
        //validate
        $request->validate([
            'name'=>'required',
            
            ]);
            //insert
            Profile::create([
                'name'=>$name,
                'email'=>$email,
                'password'=>$password,
                'bio'=>$bio,
            ]) ;
            return redirect()->route('profiles.index');
           }
}
