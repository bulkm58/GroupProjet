<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Categorie;

class CategorieController extends Controller
{
    public function index() {
        $theCategorie = Categorie::all();
        
        return view('Categorie',compact('theCategorie'));
    }
    public function create(){
        return view('CategorieAdd');
    }
    public function store(Request $request){
        $request->validate([

             'img' => 'image'
            ]);
        
        $image=Storage::disk('public')->put('',$request->file('img'));
        $lesimageCategorie = basename($image);
        $lesCategorie = new Categorie();

        $lesCategorie->img = $lesimageCategorie;
    
       

        $lesCategorie->save();

        return redirect()->route('Categorie');

    }

    public function edit($id){

        $lesCategorie = Categorie::find($id);

      
        
        return view('CategorieEdit',compact('lesCategorie'));
    }


    public function update(Request $request, $id){
        

        $lesCategorie = Categorie::find($id);
        $image=Storage::disk('public')->put('',$request->file('img'));


        
        $lesimageCategorie = basename($image);
        $lesCategorie->img = $lesimageCategorie;

        
       

        $lesCategorie->save();


        return redirect()->route('Categorie');

    }


    public function destroy($id){

        $lesCategorie = Categorie::find($id);
        Storage::disk('public')->delete($lesCategorie->img);

        $lesCategorie->delete();

        return redirect()->route('Categorie');

    }


}
