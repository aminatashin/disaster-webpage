<?php

namespace App\Http\Controllers;

use App\Models\disasterModel;
use Illuminate\Http\Request;

class disasterController extends Controller
{
      // -------Get All---------------
    public function index(){
  
        return view('new',[
            'listings'=> disasterModel::get()
        ]);
    }
   
    // -------Get by id---------------

    public function show(disasterModel $listing){
        return view('listing',[
            'listing'=> $listing
        ]);
    }

  

// -------Get create---------------
    public function create(){
        return view('create');
    }

// -------POST---------------

public function store(Request $request){
    $form=$request->validate([
        'name'=>'required',
        'address'=>'required',
        'significance'=>'required',
        'email'=>['required','email'],
        'fullname'=>'required',
        'number'=>'required',
        'description'=>'required',
        'recomendation'=>'required',
        'use'=>'required',
        'keywords'=>'required',
        'link'=>'required',
        
       
       
    ]);
        if($request->hasFile('logo')){
            $form['logo']=$request->file('logo')->store('pics','public');
        };
        if($request->hasFile('picture')){
            $form['picture']=$request->file('picture')->store('img','public');
        };
    disasterModel::create($form);
    return redirect('/')->with('success','uploaded');
}

};
