<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Success;

class SuccessController extends Controller
{
    public function Homesuccess(){
        $getRecord = Success::latest()->get();
        return view('admin.success.list', compact('getRecord'));
    }

    public function Addsuccess(){
        return view('admin.success.add');
    }

    public function Storesuccess(Request $request){

        $welcome_image = $request->file('image');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($welcome_image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'image/success/';
        $last_img = $up_location.$img_name;
        $welcome_image -> move($up_location, $img_name);

        $save = new Success;
        $save->title = $request->title;
        $save->text = $request->text;
        
        $save->image = $last_img;
       
        $save->save();

       

        return redirect('admin/success')->with('success', 'Success Message successfully created');
        
    }

    public function Editsuccess($id){
        $cases = Success::find($id);
       
        return view('admin.success.edit', compact('cases'));
     
     }

     public function Updatesuccess(Request $request, $id){
    
        $update =   Success::find($id)->update([
               'title' => $request->title,
               'text' => $request->text,
              
               'image' => $request->image,
               
              
                      
           ]);
           return redirect('admin/success')->with('success','Success Message Updated succcessfully');
        
        }


    public function Deletesuccess($id){
        $delete = Success::find($id)->Delete();
        return Redirect()->back()->with('success','Success Message Deleted succcessfully');
     }
}
