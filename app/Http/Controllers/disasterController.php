<?php

namespace App\Http\Controllers;

use App\Models\disasterModel;
use Illuminate\Http\Request;

class disasterController extends Controller
{
    public function index(){
    
        return view('homePage',[
            'listings'=> disasterModel::get()
        ]);
    }
// -------Get create---------------
    public function create(){
        return view('create');
    }

// -------POST---------------

public function store(Request $request){
    $form=$request->validate([
        'title'=>'required',
        'address'=>'required',
        // 'cpuntry'=>'required',
        // 'email'=>['required','email'],
        // 'fullname'=>'required',
        // 'number'=>'required',
        // 'description'=>'required',
       
    ]);
        if($request->hasFile('logo')){
            $form['logo']=$request->file('logo')->store('pics','public');
        };
    disasterModel::create($form);
    return redirect('/')->with('success','uploaded');
}

};
