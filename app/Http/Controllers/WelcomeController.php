<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Welcome;

class WelcomeController extends Controller
{
    public function Homewelcome(){
        $getRecord = Welcome::latest()->get();
        return view('admin.welcome.list', compact('getRecord'));
    }

    public function Addwelcome(){
        return view('admin.welcome.add');
    }

    public function Storewelcome(Request $request){

        $welcome_image = $request->file('image');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($welcome_image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'image/welcome/';
        $last_img = $up_location.$img_name;
        $welcome_image -> move($up_location, $img_name);

        $save = new Welcome;
        $save->title = $request->title;
        $save->text = $request->text;
        
        $save->image = $last_img;
       
        $save->save();

       

        return redirect('admin/welcome')->with('success', 'Message successfully created');
        
    }

    public function Editwelcome($id){
        $cases = Welcome::find($id);
       
        return view('admin.welcome.edit', compact('cases'));
     
     }

     public function Updatewelcome(Request $request, $id){
    
        $update =   Welcome::find($id)->update([
               'title' => $request->title,
               'text' => $request->text,
              
               'image' => $request->image,
               
              
                      
           ]);
           return redirect('admin/welcome')->with('success','Message Updated succcessfully');
        
        }


    public function Deletewelcome($id){
        $delete = Welcome::find($id)->Delete();
        return Redirect()->back()->with('success','Message Deleted succcessfully');
     }
}
