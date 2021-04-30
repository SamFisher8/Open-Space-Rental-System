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
            'picture'=>'required',
            
            ]);
            
            $space=new OpenSpace;
            $space->name=$request->input('name');
            $space->address=$request->input('address');
            $space->price=$request->input('price');
            $space->size=$request->input('size');
            
            $space->user_id=Auth::id();
            
           
                $filenamewithExt=$request->file('picture')->getClientOriginalName();
                $filename =pathinfo($filenamewithExt, PATHINFO_FILENAME);
                $extension = $request->file('picture')->getClientOriginalExtension();
                $fileNameToStore= $filename.'_'.time().'.'.$extension;
                $path=$request->file('picture')->storeAs('public/uploads',$fileNameToStore);
                $space->image=$fileNameToStore;
            
           
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
