<?php

namespace App\Http\Controllers;

use App\Models\disasterModel;
use Illuminate\Http\Request;

class disasterController extends Controller
{
      // -------Get All---------------
    public function index(){
  
        return view('new',[
            'listings'=> disasterModel::latest()->filter(request(['keyword','search']))->get()
        ]);
    }
   
    // -------Get by id---------------

    public function show(disasterModel $listing){
        return view('nonsidbar',[
            'listing'=> $listing
        ]);
    }

  

// -------Get create---------------
    public function create(){
        return view('create');
    }
    public function update(disasterModel $listing){
        return view('components.edit',['listing'=>$listing]);
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
// -------PUT---------------


public function edit(disasterModel $listing , Request $request){

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
       
    $listing->update($form);
    return redirect('/')->with('success','uploaded');

}


public function destroy(disasterModel $listing){
    $listing->delete();
    return redirect('/');
}

};
