<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OpenSpace;
use Auth;
class OpenSpaceController extends Controller
{   

    public function view(){
        return view('createPost');
    }
    public function browselist(){
        $space=OpenSpace::all();
        return view('browselist',['space'=>$space]);
            
            }

    public function store(Request $request){
       
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'price' => 'required',
            'size'=> 'required',
            'image'=>'required',
            
            ]);
            
            $space=new OpenSpace;
            $space->name=$request->input('name');
            $space->address=$request->input('address');
            $space->price=$request->input('price');
            $space->size=$request->input('size');
            $space->image=$request->input('image');
            $space->user_id=Auth::id();
            
            $space->save();
            return redirect()->route('home');

    }
    public function editForm(){

    }

    public function update(){
        
    }


    public function destroy(){

    }


}
