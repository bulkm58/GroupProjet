<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Avatar;

class AvatarController extends Controller
{
    public function index() {
        $theavatar = Avatar::all();
        
        return view('Avatar',compact('theavatar'));
    }
    public function show($id){
    $mesavatar = Avatar::where('id_user','=',$id)->get();
    return view('mesavatar',compact('mesavatar'));
    }
    public function create(){
        return view('AvatarAdd');
    }
    public function store(Request $request){
        $request->validate([
            'nom' => 'required|min:3',
             'img' => 'image'
            ]);
        
        $image=Storage::disk('public')->put('',$request->file('img'));
        $lesimageavatar = basename($image);
        $lesavatar = new Avatar();

        $lesavatar->img = $lesimageavatar;
        $lesavatar->nom = $request->input('nom');
       

        $lesavatar->save();

        return redirect()->route('avatar');

    }

    public function edit($id){

        $lesavatar = Avatar::find($id);

      
        
        return view('AvatarEdit',compact('lesavatar'));
    }


    public function update(Request $request, $id){
        

        $lesavatar = Avatar::find($id);
        $image=Storage::disk('public')->put('',$request->file('img'));


        
        $lesimageavatar = basename($image);
        $lesavatar->img = $lesimageavatar;

        
        $lesavatar->nom = $request->input('nom');

        $lesavatar->save();


        return redirect()->route('avatar');

    }


    public function destroy($id){

        $lesavatar = Avatar::find($id);
        Storage::disk('public')->delete($lesavatar->img);

        $lesavatar->delete();

        return redirect()->route('avatar');

    }


}
