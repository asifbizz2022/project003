<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Session;
class UsersController extends Controller
{
    public function dashboard()
    {
        $result = session()->all();

         return view('admin.dashboard')->with('result', $result);
    }
    public function login_page()
    {
        return view('admin.login');
    }

    
    public function register_page()
    {
        return view('admin.register');
    } 
     
    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        
        $user = User::where('email', $request->email)->first();
        if(!$user || !Hash::check($request->password, $user->password)){
            return false;
        } else { 
           Session::put(
                [   

                    'email'=>$request->email,
                    'code'=>1,
                ]
            );
            return true;
        }
    }

    
    public function register(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            
        ]);

        $result = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
             
        ]);

        if($result){
            Session::put('username',$request->name);
            return true;
        }
    }
    public function user_list()
    {
        return view('admin/table');
    }
    public function get_user_data(Request $request)
    {
        $data = User::all();
        return response()->json([
            'data'=>$data,
        ]);
    }

    public function edit_profile($id)
    {  
        $result = User::where('email', $id)->get();
        return view('admin.profile')->with('result',$result);
    }

     
    public function update_profile(Request $request)
    {
        $request->validate([
            
            'firstname'=>['required'],
            'lastname'=>['required'],
            'image'=>['required'],
        ]);

        $id = $request->id; 
        $loc = 'http://localhost/Traits/storage/app/profile/';
        $image = $request->image;
        $name = time().'.'.$image->getClientOriginalExtension();

        $image->storeAs('profile', $name);
        $result = User::where('id',$id)->update([
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            
            'email'=>$request->email,
            'image'=>$loc.$name,
        ]);
        
        return true;
    }

     
    public function logout()
    {
         session()->forget(['email','code','username']);
         return redirect('login/page');
    }
}
