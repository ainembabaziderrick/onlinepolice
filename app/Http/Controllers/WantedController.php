<?php

namespace App\Http\Controllers;
use App\Models\Wanted;

use Illuminate\Http\Request;

class WantedController extends Controller
{
    public function HomeWanted(){
        $getRecord = Wanted::latest()->get();
        return view('admin.wanted.list', compact('getRecord'));
    }

    public function AddWanted(){
        return view('admin.wanted.add');
    }

    public function StoreWanted(Request $request){

        $news_image = $request->file('image');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($news_image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'image/wanted/';
        $last_img = $up_location.$img_name;
        $news_image -> move($up_location, $img_name);

        $save = new Wanted;
        $save->title = $request->title;
        $save->text = $request->text;
        
        $save->image = $last_img;
       
        $save->save();

       

        return redirect('admin/wanted')->with('success', 'Wanted successfully created');
        
    }

    public function EditWanted($id){
        $cases = Wanted::find($id);
       
        return view('admin.wanted.edit', compact('cases'));
     
     }

     public function UpdateWanted(Request $request, $id){
    
        $update =   Wanted::find($id)->update([
               'title' => $request->title,
               'text' => $request->text,
              
               'image' => $request->image,
               
              
                      
           ]);
           return redirect('admin/wanted')->with('success','Wanted Updated succcessfully');
        
        }


    public function DeleteWanted($id){
        $delete = Wanted::find($id)->Delete();
        return Redirect()->back()->with('success','Wanted Deleted succcessfully');
     }

     //Police

     public function policeWanted(){
        $getRecord = Wanted::latest()->get();
        return view('police.wanted.list', compact('getRecord'));
    }

    public function police_AddWanted(){
        return view('police.wanted.add');
    }

    public function police_StoreWanted(Request $request){

        $news_image = $request->file('image');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($news_image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'image/wanted/';
        $last_img = $up_location.$img_name;
        $news_image -> move($up_location, $img_name);

        $save = new Wanted;
        $save->title = $request->title;
        $save->text = $request->text;
        
        $save->image = $last_img;
       
        $save->save();

       

        return redirect('police/wanted')->with('success', 'Wanted successfully created');
        
    }

}
