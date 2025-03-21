<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class profileController extends Controller
{
    public function index()
    {
        // dd(Profile::all());
        $profiles = Profile::paginate(9);
        return view('profile.profiles', compact('profiles'));
    }
    // public function show(Request $request){
    //     $id=(int)$request->id;
    //     $profile = Profile::findOrfail($id);
    //     return view('profile.show',compact('profile'));
    // }
    public function show(Profile $profile)
    {
        return view('profile.show', compact('profile'));
    }
    public function create()
    {

        return view('profile.create');
    }
    public function store(ProfileRequest $request)
    {
        // $name = $request->name;
        // $email = $request->email;
        // $password = $request->password;
        // $bio = $request->bio;
        //validate
        $formFields=$request->validated();
        //insert
        // Profile::create([
        //     'name'=>$name,
        //     'email'=>$email,
        //     'password'=>$password,
        //     'bio'=>$bio,
        // ]) ;
        $formFields['password']=Hash::make($request->password);
        Profile::create( $formFields);
        //Redirections

        //redirect('b url b7al /home')
        //redirect()->route('....') wla hadi to_route('...') --->hadi a7sen tari9a
        //redirect()->action(...)
        //back()->withInput() retour en arriere
        return redirect()->route('profiles.index')->with('success', 'Your account created successfully');
    }
}
