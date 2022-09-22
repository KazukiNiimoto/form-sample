<?php

namespace App\Http\Controllers;

use App\Models\Form;
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
            'inquiry' => 'required'
        ]);

        $data = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'inquiry' => $request->get('inquiry'),
        ];

        return view('form.confirm',$data);
    }

    public function thanks(Request $request){
        $form = new Form();
        $form->name = $request->name;
        $form->email = $request->email;
        $form->inquiry = $request->inquiry;
        $form->save();

        $request->session()->regenerateToken();
        return view('form.thanks');
    }
}
