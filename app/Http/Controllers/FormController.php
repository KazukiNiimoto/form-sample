<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        return view('form.index');
    }

    public function confirm(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email:strict,dns',
            'request' => 'required'
        ]);

        $data = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'request' => $request->get('request')
        ];

        return view('form.confirm',$data);
    }

    public function thanks(Request $request){
        return view('form.thanks');
    }
}
