<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\infomodel;
use Illuminate\Support\Str;

class addcontroller extends Controller
{
    function save_data_fun(Request $request){
        $request->validate([
            'name'=>['required'],
            'lname'=>['required'],
            'pnumber'=>['required','integer'],
            'email'=>['required','email'],
            'image'=>['required'],
            'slug'=>['required']
        ]);
        
        $file_name= time(). $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('images/'),$file_name);
        $data= new infomodel;
        $data->name= $request->name;
        $data->lname= $request->lname;
        $data->pnumber= $request->pnumber;
        $data->email= $request->email;
        $data->image= $file_name;
        $slug = Str::slug($request->slug);

        $data->slug= $slug;
        $data->save();
        return redirect()->back()->with('msg',"{$request->name} Data is added");
    }
    function show_fun() {
        $data= infomodel::all();
        return view('show',compact('data'));
    }
    function delete_fun($id){
        $data= infomodel::find($id);
        $data->delete();
        return redirect()->back()->with('msg',"Data is Deleted");
    }
    function update_fun( $id){
        $data= infomodel::find($id);
        return view('update_form',compact('data'));
    }
    function update_data_page_fun(Request $request, $id){
        if($request->image !=null){
            $request->validate([
                'name'=>['required'],
                'lname'=>['required'],
                'pnumber'=>['required','integer'],
                'email'=>['required','email'],
                'image'=>['required'],
                'slug'=>['required']
            ]);
            
            $image_path = public_path('images/'.$request->old_image);
            unlink($image_path);
            $file_name= time(). $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images/'),$file_name);

            $data= infomodel::find($id);
            $data->name= $request->name;
            $data->lname= $request->lname;
            $data->pnumber= $request->pnumber;
            $data->email= $request->email;
            $data->image= $file_name;
            $slug = Str::slug($request->slug);
    
            $data->slug= $slug;
            $data->save();
            return redirect('/show')->with('msg',"{$request->name} Data is Updated");
        }else{
            $request->validate([
                'name'=>['required'],
                'lname'=>['required'],
                'pnumber'=>['required','integer'],
                'email'=>['required','email'],
                'slug'=>['required']
            ]);

            $data= infomodel::find($id);
            $data->name= $request->name;
            $data->lname= $request->lname;
            $data->pnumber= $request->pnumber;
            $data->email= $request->email;
            $data->image= $request->old_image;
            $slug = Str::slug($request->slug);
    
            $data->slug= $slug;
            $data->save();
            return redirect('/show')->with('msg',"{$request->name} Data is Updated");
        }
    }

}
