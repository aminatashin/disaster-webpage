<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\disasterModel;
use App\Models\User;
use Illuminate\Validation\Rule;


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
        $form['user_id']=auth()->id();
    disasterModel::create($form);
    return redirect('/')->with('success','uploaded');
}
// -------PUT---------------
public function update(disasterModel $listing){
    return view('components.edit',['listing'=>$listing]);
}

public function edit(disasterModel $listing , Request $request){

   
   if($listing->user_id != auth()->id()){
    abort(403,"Unauthorised");
   }
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
    if($listing->user_id != auth()->id()){
        abort(403,"Unauthorised");
       }
    $listing->delete();
    return redirect('/');
}

public function manage(){
    return view('manage',[
        'listings'=>auth()->user()->disaster()->get()
    ]);
}

}
