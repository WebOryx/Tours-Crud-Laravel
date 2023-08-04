<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class UserController extends Controller
{
    public function new_user()
    {
        return view('admin.pages.new_user'); 
    }

    public function user_save(Request $request)
    {
        $this->validate($request,[
         'name'=>'required',
         'username'=>'required',
         'email' => 'unique:users,email',
         'password'=>'required',
         'status'=>'required',
      ]);
    
        $new=new User();
        $new->name=$request->name;
        $new->user_name=$request->username;
        $new->email=$request->email;
        $new->status=$request->status;
        $new->password=bcrypt($request->password);
        $new->save();
        toast('New user is Added!','success');
        return redirect()->route('user-list');

    }

    public function user_list(Request $request)
    {
        $user_list=User::where('status','=',1)->get();
        return view('admin.pages.all_user',compact('user_list'));
    }

    public function user_edit($id)
    {
         $user_edit=User::where('id',$id)->first();
         return view('admin.pages.user_edit',compact('user_edit'));
    }

    public function user_update(Request $request)
    {
     
         $this->validate($request,[
         'name'=>'required',
         'username'=>'required',
         'email' => 'required',
         'password'=>'required',
         'status'=>'required',
      ]);

        $update=User::where('id',$request->id)->first();
        $update->name=$request->name;
        $update->user_name=$request->username;
        $update->email=$request->email;
        $update->status=$request->status;
        $update->password=bcrypt($request->password);
        $update->save();
        toast('User is Updated Added!','success');
        return redirect()->route('user-list');
    }

    public function user_delete($id)
    {
       
         $user=User::where('id',$id)->delete();
        toast('User is Deleted SuccessFully!','success');
        return redirect()->back();
    }

    public function logout(Request $request) {
         Auth::logout();
          return view('auth.login');
    }
}
