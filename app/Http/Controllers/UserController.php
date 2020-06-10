<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function updateIDcardType(Request $request)
    {
        $validatedData = $request->validate([
            'idcard_type' => 'required|string|max:255'
            ]);
            $update = User::where('id',auth()->user()->id)->first();
            $update->idcard_type=$request->idcard_type;
            $update->save();
           
            return redirect()->back()->with('success', 'ID card type was Updated');

    }

    public function updatephoto(Request $request)
    {
        $validatedData = $request->validate([
            'photo' => 'required|image|max:2048',
            ]);
            $update = User::where('id',auth()->user()->id)->first();
            $photo = $request->file('photo');
        $photo_new_name =auth()->user()->id.'profile_photo' . '.' . $photo->getClientOriginalExtension();
        $photo->move(public_path('profile_photo'), $photo_new_name);
        $update->photo='/profile_photo/'.$photo_new_name;
           $update->save();
           return redirect()->back()->with('success', 'Profile photo was Updated');
    }
    public function updateIDcardFront(Request $request)
    {
        $validatedData = $request->validate([
            'idcard_front' => 'required|image|max:2048',
            ]);
            $update = User::where('id',auth()->user()->id)->first();
            $idcard_front = $request->file('idcard_front');
        $id_photo_new_name =auth()->user()->id.'IDfront' . '.' . $idcard_front->getClientOriginalExtension();
        $idcard_front->move(public_path('images_id_card'), $id_photo_new_name);
        $update->idcard_front='/images_id_card/'.$id_photo_new_name;
           $update->save();
          
           return redirect()->back()->with('success', 'ID card type was Updated');
    }

    public function updateIDcardBack(Request $request)
    {
        $validatedData = $request->validate([
            'idcard_back' => 'required|image|max:2048',
            ]);
            $update = User::where('id',auth()->user()->id)->first();
            $idcard_back = $request->file('idcard_back');
        $id_photo_new_name =auth()->user()->id.'IDback' . '.' . $idcard_back->getClientOriginalExtension();
        $idcard_back->move(public_path('images_id_card'), $id_photo_new_name);
        $update->idcard_back="/images_id_card/".$id_photo_new_name;
           $update->save();
           return redirect()->back()->with('success', 'ID card type was Updated');
    }

    public function UpdateAccount(Request $request)
    {
        $validatedData = $request->validate([
            'account_number' => 'required|string|max:11|min:10',
            'bank' => 'required|string|max:100`|min:3'
            ]);
            $update = User::where('id',auth()->user()->id)->first();
            $update->account_number=$request->account_number;
            $update->bank=$request->bank;
            $update->save();
            return response()->json(['message'=>'Account details stored successfully']);
           // return redirect()->back()->with('success', 'ID card type was Updated');

    }
    public function changePassword(Request $request)
    {
        $validatedData = $request->validate([
            'current_password' => ['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);
            if (!(Hash::check($request->current_password, auth()->user()->password))) {
                // The passwords matches
               //return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
               $error = array('current-password' => 'current password incorrect');
               return response()->json(array('errors' => $error), 400);  
            }
            $update = User::where('id',auth()->user()->id)->first();
            $update->password=Hash::make($request->password);
            $update->save();
            return response()->json(['message'=>'Password changed successfully']);
    }

    public function UpdatePersonaLDetails(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'state' => 'required|string|max:100`|min:3',
            'phone' => 'required|string|max:11|min:10',
            'address' => 'required|string'
            ]);
            $update = User::where('id',auth()->user()->id)->first();
            $update->name=$request->name;
            $update->state=$request->state;
            $update->phone=$request->phone;
            $update->address=$request->address;
            $update->save();
           // return response()->json(['message'=>'profile details stored successfully']);
            return redirect()->back()->with('success', 'profile was Updated');

    }
}
