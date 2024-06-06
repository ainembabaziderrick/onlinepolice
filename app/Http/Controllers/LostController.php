<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Losts;

class LostController extends Controller
{
    public function HomeLost(){
        $getRecord = Losts::latest()->get();
        return view('admin.lost.list', compact('getRecord'));
    }

    public function AddLost(){
        return view('admin.lost.add');
    }

    public function StoreLost(Request $request){

        $lost_image = $request->file('image');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($lost_image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'image/lost/';
        $last_img = $up_location.$img_name;
        $lost_image -> move($up_location, $img_name);

        $save = new Losts;
        $save->title = $request->title;
        $save->text = $request->text;
        
        $save->image = $last_img;
       
        $save->save();

       

        return redirect('admin/lost')->with('success', 'Losts successfully created');
        
    }

    public function EditLost($id){
        $cases = Losts::find($id);
       
        return view('admin.lost.edit', compact('cases'));
     
     }

     public function UpdateLost(Request $request, $id){
    
        $update =   Losts::find($id)->update([
               'title' => $request->title,
               'text' => $request->text,
              
               'image' => $request->image,
                                                   
           ]);
           return redirect('admin/lost')->with('success','Losts Updated succcessfully');
        
        }


    public function DeleteLost($id){
        $delete = Losts::find($id)->Delete();
        return Redirect()->back()->with('success','Losts Deleted succcessfully');
     }

     //Citizen

     public function citizenLost(){
        $getRecord = Losts::latest()->get();
        return view('citizen.lost.list', compact('getRecord'));
    }

    public function citizenAddLost(){
        return view('citizen.lost.add');
    }

    public function citizenStoreLost(Request $request){

        $lost_image = $request->file('image');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($lost_image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'image/lost/';
        $last_img = $up_location.$img_name;
        $lost_image -> move($up_location, $img_name);

        $save = new Losts;
        $save->title = $request->title;
        $save->text = $request->text;
        
        $save->image = $last_img;
       
        $save->save();

       

        return redirect('citizen/lost')->with('success', 'Losts successfully created');
        
    }

    //Police
    public function policeLost(){
        $getRecord = Losts::latest()->get();
        return view('police.lost.list', compact('getRecord'));
    }

    public function AddpoliceLost(){
        return view('police.lost.add');
    }

    public function StorepoliceLost(Request $request){

        $lost_image = $request->file('image');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($lost_image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'image/lost/';
        $last_img = $up_location.$img_name;
        $lost_image -> move($up_location, $img_name);

        $save = new Losts;
        $save->title = $request->title;
        $save->text = $request->text;
        
        $save->image = $last_img;
       
        $save->save();

       

        return redirect('police/lost')->with('success', 'Losts successfully created');
        
    }

    public function EditpoliceLost($id){
        $cases = Losts::find($id);
       
        return view('police.lost.edit', compact('cases'));
     
     }

     public function UpdatepoliceLost(Request $request, $id){
    
        $update =   Losts::find($id)->update([
               'title' => $request->title,
               'text' => $request->text,
              
               'image' => $request->image,
               
              
                      
           ]);
           return redirect('police/lost')->with('success','Losts Updated succcessfully');
        
        }



}
