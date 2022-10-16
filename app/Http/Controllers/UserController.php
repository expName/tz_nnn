<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct() { 
        $this->middleware('auth'); 
    } 

    public function views() {
        $result = User::all();
        return view('viewUsers', compact('result'));
    }
    
    public function create() {
        return view('createUser'); 
    }

    public function add(Request $request) {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required'],
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
      
        $input = $request->all();
        
        if($image = $request->file('image'))
        {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
       
        $input['password'] = Hash::make( $input['password']);
        User::create($input);
        return redirect()->route('users.views');
    }
    
    public function show(User $user)
    {
        return view('showUser',compact('user'));
    }
 
    public function edit(User $user) 
    {

       return view('editUser', compact('user'));
    }
    
    public function update(User $user, Request $request) 
    {
        
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required'],
            'dolgnost_id' => ['required'],
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
       
        $input['password'] = Hash::make( $input['password']);
        $user->update($input);
        
         return redirect()->route('users.views');
    }
    
    public function delete(User $user)
    {
        User::destroy($user->id);
        return redirect()->route('users.views');
    }
}
