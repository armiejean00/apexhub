<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    //
    public function index1(){
        $use = User::all();
        return view('use.index1',['use'=>$use]);
    }
    
     public function destroy(User $use){
        $use->delete();
        return redirect(route('use.index1'))->with('success','User Deleted!');
    
    }

    public function create(){
        return view('use.create');
    }
    public function store(Request $request){
       $data = $request->validate([
        'firstname'=>'required',
        'lastname'=>'required',
        'email'=>['required', 'string', 'email', 'max:255', 'unique:users'],
        'password'=>['required', Password::min(10)->letters()->numbers()->mixedCase()->symbols()],

       ]);

       $newUser = User::create($data);

       return redirect(route('use.index1'));
    }


    public function update($userId){
        $user = User::find($userId);

        if($user){
            if($user->status){
                $user->status = 0;
            }
            else{
                $user->status=1;
            }
            $user->save();
        }
        return back();
    }

    
}
