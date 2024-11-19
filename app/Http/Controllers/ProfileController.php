<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function upload(Request $request){
        $request->validate(['photo' => 'required']);
        $request->file('photo')->store('profiles');
        return redirect('profile');
    }
}
