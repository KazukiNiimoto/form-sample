<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function list(){
        $forms = DB::table('forms')->get();
        return view('admin.list', ['forms' => $forms]);
    }

    public function profile(Request $request){
        $profile = DB::table('forms')->where('id', $request['id'])->first();
        return view('admin.profile', ['profile' => $profile]);
    }
}

