<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class users extends Controller
{
   	
   	public function addUserCommit(Request $request)
   	{
   		$this->validate($request,[
   				'name'=>'required',
               'email'=>'required|unique:users',
   				'password'=>'required|confirmed',
   			]);

   		$user = new User();

   		$user->name = $request->name;
   		$user->email = $request->email;
         $user->password = bcrypt($request->password);
         $user->role = $request->role;
   		$user->status = 0;
         $user->save();
         return redirect()->back();
   	}

      public function UpdateUserCommit(Request $request)
      {
            $user = User::find($request->id);

            $user->status = $request->abc;

            $user->update();

            return redirect()->back();

            
      }

}
