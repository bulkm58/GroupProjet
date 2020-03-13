<?php

namespace App\Http\Controllers;
use App\User;
use App\Avatar;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index(){
        $administrations = User::all();
        return view('User', compact('administrations'));
    }
    public function create(){
        $avatars = Avatar::all();
        return view('UserAdd',compact('avatars'));
    }
    public function store(Request $request){
             $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email:rfc,dns',
            'age' => 'required|max:140|integer',
            'img' => 'image',
            ]);
       
        $administration = new User();
        $administration->name = $request->input('name');
        $administration->email = $request->input('email');
        $administration->age = $request->input('age');
        $administration->img = $request->input('id_avatar');
        $administration->save();
        return redirect()->route('User');
    }
    public function edit($id){
        $administration = User::find($id);
        return view('Useredit',compact('administration'));
    }
    public function update(Request $request, $id){
      
        $administration = User::find($id);
        $administration->name = $request->input('name');
        $administration->email = $request->input('email');
        $administration->age = $request->input('age');
        $administration->img = $request->input('id_avatar');
        

        $administration->save();
        return redirect()->route('User');
    }
    public function destroy($id){
        $administration = User::find($id);
        Storage::disk('public')->delete($administration->img);
        $administration->delete();
        return redirect()->route('User');
    }
}
