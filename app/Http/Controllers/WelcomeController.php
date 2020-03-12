<?php

namespace App\Http\Controllers;
use App\Avatar;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $avatar = Avatar::all();

        return view('welcome',compact('avatar'));
    }
}
