<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
class UsersController extends Controller
{
    public function index(Request $request)
    {
        if (!$request->i) {
            $users=User::latest()->get();
        }else if($request->i=="vendors"){
            $users=User::where('role','Vendor')->latest()->get();
        }else if($request->i=="customers"){
            $users=User::where('role','User')->latest()->get();
        }else if($request->i=='NewVendors'){
            $users=User::where('role','Vendor')->where('status','0')->latest()->get();  
        }
        return view('admin.all-users',compact('users'));
    }


    public function UserProfile($id)
    {
        $user=User::findorFail($id);
        return view('admin.user-profile', compact('user'));
    }  
}
