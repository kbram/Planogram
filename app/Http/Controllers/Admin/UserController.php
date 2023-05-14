<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Gate;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
          $users=User::all();
         if(Gate::allows('edit-users')){
               return view('admin.users.index')->with('users',$users);
         }else{
          return view('welcome')->with('users',$users);
         }
        
     //    return view('home')->with('users',$users);
    }
    public function destroy(User $user){
         $user->roles()->detach();
         $user->delete();
         return redirect()->route('login');
    }
    public function updateRole(Request $request,User $user){
         $user->roles()->sync($request->roles);
         return redirect()->route('login');
    }
}
