<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AccidentModel;
use App\Models\CrimeModel;

class AccidentController extends Controller
{
    public function Homeaccidents(){
        $data['getRecord'] = AccidentModel::get();
        return view('admin.accidents.list', $data);
    }

    public function Addaccidents(Request $request){
        $data['getRecord'] = AccidentModel::get();
        return view('admin.accidents.add',$data);
    }

    public function Storeaccidents(Request $request){

        $case_image = $request->file('image');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($case_image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'image/accidents/';
        $last_img = $up_location.$img_name;
        $case_image -> move($up_location, $img_name);

        $save = new AccidentModel;
        $save->victim_name = $request->victim_name;
       
        $save->offender_name = $request->offender_name;
        $save->image = $last_img;
        $save->description = $request->description;
        $save->location = $request->location;
        $save->time = $request->time;
        $save->date = $request->date;   
        $save->save();

       

        return redirect('admin/accidents')->with('success', 'Accident successfully Reported');
        
    }

    public function Editaccidents($id){
        $cases = AccidentModel::find($id);
       
        return view('admin.accidents.edit', compact('cases'));
     
     }

     public function Updateaccidents(Request $request, $id){
    
        $update =   AccidentModel::find($id)->update([
               'victim_name' => $request->victim_name,
               
               'offender_name' => $request->offender_name,
               'image' => $request->image,
               'description' => $request->description,
               'location' => $request->location,
               'time' => $request->time,
               'date' => $request->date,
               
              
                      
           ]);
           return redirect('admin/accidents')->with('success','Accident Updated succcessfully');
        
        }

        public function Deleteaccidents($id){
            $delete = AccidentModel::find($id)->Delete();
            return Redirect()->back()->with('success','Accident Deleted succcessfully');
         }

         //Citizens

         public function citizen_accidents(){
            $data['getRecord'] = AccidentModel::get();
            return view('citizen.accidents.list', $data);
        }
    
        public function citizen_add_accidents(Request $request){
            $data['getRecord'] = AccidentModel::get();
            return view('citizen.accidents.add',$data);
        }
    
        public function citizen_insert_accidents(Request $request){
    
            $case_image = $request->file('image');
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($case_image->getClientOriginalExtension());
            $img_name = $name_gen.'.'.$img_ext;
            $up_location = 'image/accidents/';
            $last_img = $up_location.$img_name;
            $case_image -> move($up_location, $img_name);
    
            $save = new AccidentModel;
            $save->victim_name = $request->victim_name;
           
            $save->offender_name = $request->offender_name;
            $save->image = $last_img;
            $save->description = $request->description;
            $save->location = $request->location;
            $save->time = $request->time;
            $save->date = $request->date;   
            $save->save();
    
           
    
            return redirect('citizen/accidents')->with('success', 'Accident successfully Reported');
            
        }


        //Police

        public function policeaccidents(){
            $data['getRecord'] = AccidentModel::get();
            return view('police.accidents.list', $data);
        }
    
        public function policeAddaccidents(Request $request){
            $data['getRecord'] = AccidentModel::get();
            return view('police.accidents.add',$data);
        }
    
        public function policeStoreaccidents(Request $request){
    
            $case_image = $request->file('image');
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($case_image->getClientOriginalExtension());
            $img_name = $name_gen.'.'.$img_ext;
            $up_location = 'image/accidents/';
            $last_img = $up_location.$img_name;
            $case_image -> move($up_location, $img_name);
    
            $save = new AccidentModel;
            $save->victim_name = $request->victim_name;
           
            $save->offender_name = $request->offender_name;
            $save->image = $last_img;
            $save->description = $request->description;
            $save->location = $request->location;
            $save->time = $request->time;
            $save->date = $request->date;   
            $save->save();
    
           
    
            return redirect('police/accidents')->with('success', 'Accident successfully Reported');
            
        }
    
        public function policeEditaccidents($id){
            $cases = AccidentModel::find($id);
           
            return view('police.accidents.edit', compact('cases'));
         
         }
    
         public function policeUpdateaccidents(Request $request, $id){
        
            $update =   AccidentModel::find($id)->update([
                   'victim_name' => $request->victim_name,
                   
                   'offender_name' => $request->offender_name,
                   'image' => $request->image,
                   'description' => $request->description,
                   'location' => $request->location,
                   'time' => $request->time,
                   'date' => $request->date,
                   
                  
                          
               ]);
               return redirect('police/accidents')->with('success','Accident Updated succcessfully');
            
            }
    
    

}
