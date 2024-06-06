<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;

class HomeController extends Controller
{
    public function HomeSlider(){
        $getRecord = Slider::latest()->get();
        return view('admin.slider.list', compact('getRecord'));
    }

    public function AddSlider(){
        return view('admin.slider.add');
    }

    public function StoreSlider(Request $request){

        $slider_image = $request->file('image');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($slider_image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'image/slider/';
        $last_img = $up_location.$img_name;
        $slider_image -> move($up_location, $img_name);

        $save = new Slider;
        $save->title = $request->title;
        $save->text = $request->text;
        
        $save->image = $last_img;
       
        $save->save();

       

        return redirect('admin/sliders')->with('success', 'Slider successfully created');
        
    }

    public function EditSlider($id){
        $cases = Slider::find($id);
       
        return view('admin.slider.edit', compact('cases'));
     
     }

     public function UpdateSlider(Request $request, $id){
    
        $update =   Slider::find($id)->update([
               'title' => $request->title,
               'text' => $request->text,
              
               'image' => $request->image,
               
              
                      
           ]);
           return redirect('admin/sliders')->with('success','Slider Updated succcessfully');
        
        }


    public function Deletesliders($id){
        $delete = Slider::find($id)->Delete();
        return Redirect()->back()->with('success','Slider Deleted succcessfully');
     }
}
