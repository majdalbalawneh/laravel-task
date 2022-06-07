<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class PostController extends Controller
{
    public function viewdata(){
        $laravel_task=User::all();
        return view('home',compact('laravel_task'));
        }

   //View Data
   public function viewData()
   {
       $update = User::all();
       return view('shop', compact('update'));
   }
   //Create Data
   public function createData(Request $request){
       $create=new User();
       $create->candy_name=$request->input('name');
       $create->candy_quantity=$request->input('quantity');
       $create->candy_price=$request->input('price');
       $create->candy_image=$request->input('image');
       $create->save();
       return redirect('/shop')->with('message','The data has been added successfully');
   }
   //Add data
   public function addData(){
       return view('add');
   }
   //Update Data
   public function editData($id){
        $update = User::find($id);
       return view('update',compact('update'));
   }
   public function updateData(Request $request, $id)
   {
       $update = User::find($id); //Post is the model name
       $update->candy_name=$request->input('name');
       $update->candy_quantity=$request->input('quantity');
       $update->candy_price=$request->input('price');
       $update->update();
       return redirect('/shop')->with('message','The data has been updated successfully');
   }
   //Delete Data
   public function deleteData($id){
       $delete = User::find($id);
       $delete->delete();
       return redirect('/shop')->with('message','The data has been updated successfully');
   }
   public function selectData($id){
       $update= User::find($id);
       return view('showData',compact('update'));
   }
}
}