<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CaseModel;
use App\Models\CrimeModel;

class CaseController extends Controller
{
    public function cases(){
        $data['getRecord'] = CaseModel::get();
        return view('admin.cases.list', $data);
    }

    public function add_cases(Request $request){
        $data['getRecord'] = CrimeModel::get();
        return view('admin.cases.add',$data);
    }

    public function insert_add_cases(Request $request){

        $case_image = $request->file('image');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($case_image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'image/case/';
        $last_img = $up_location.$img_name;
        $case_image -> move($up_location, $img_name);

        $save = new CaseModel;
        $save->victim_name = $request->victim_name;
        $save->crime = $request->crime;
        $save->offender_name = $request->offender_name;
        $save->image = $last_img;
        $save->description = $request->description;
        $save->location = $request->location;
        $save->time = $request->time;
        $save->date = $request->date;   
        $save->save();

       

        return redirect('admin/cases')->with('success', 'Cases successfully created');
        
    }

    public function Editcases($id){
        $cases = CaseModel::find($id);
        $data['getRecord'] = CrimeModel::get();
        return view('admin.cases.edit', compact('cases'), $data);
     
     }

     public function Updatecases(Request $request, $id){
    
        $update =   CaseModel::find($id)->update([
               'victim_name' => $request->victim_name,
               'crime' => $request->crime,
               'offender_name' => $request->offender_name,
               'image' => $request->image,
               'description' => $request->description,
               'location' => $request->location,
               'time' => $request->time,
               'date' => $request->date,
               
              
                      
           ]);
           return redirect('admin/cases')->with('success','Case Updated succcessfully');
        
        }

        public function Deletecases($id){
            $delete = CaseModel::find($id)->Delete();
            return Redirect()->back()->with('success','Case Deleted succcessfully');
         }

         //Citizen
         public function citizen_add_cases(Request $request){
            $data['getRecord'] = CrimeModel::get();
            return view('citizen.cases.add',$data);
        }

        public function citizen_insert_add_cases(Request $request){

            $case_image = $request->file('image');
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($case_image->getClientOriginalExtension());
            $img_name = $name_gen.'.'.$img_ext;
            $up_location = 'image/case/';
            $last_img = $up_location.$img_name;
            $case_image -> move($up_location, $img_name);
    
            $save = new CaseModel;
            $save->victim_name = $request->victim_name;
            $save->crime = $request->crime;
            $save->offender_name = $request->offender_name;
            $save->image = $last_img;
            $save->description = $request->description;
            $save->location = $request->location;
            $save->time = $request->time;
            $save->date = $request->date;   
            $save->save();
    
           
    
            return redirect('citizen/cases/add')->with('success', 'Case successfully Reported Proceed to Download Letter');
            
        }

        //Police

        public function police_case(){
            $data['getRecord'] = CaseModel::get();
            return view('police.cases.list', $data);
        }

        public function add_police(Request $request){
            $data['getRecord'] = CrimeModel::get();
            return view('police.cases.add',$data);
        }

        public function insert_add_police(Request $request){

            $case_image = $request->file('image');
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($case_image->getClientOriginalExtension());
            $img_name = $name_gen.'.'.$img_ext;
            $up_location = 'image/case/';
            $last_img = $up_location.$img_name;
            $case_image -> move($up_location, $img_name);
    
            $save = new CaseModel;
            $save->victim_name = $request->victim_name;
            $save->crime = $request->crime;
            $save->offender_name = $request->offender_name;
            $save->image = $last_img;
            $save->description = $request->description;
            $save->location = $request->location;
            $save->time = $request->time;
            $save->date = $request->date;   
            $save->save();
    
           
    
            return redirect('police/cases')->with('success', 'Cases successfully created');
            
        }
    

}
