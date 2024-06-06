<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CrimeModel;

class CrimeController extends Controller
{
    public function crimes(){
        $data['getRecord'] = CrimeModel::get();
        return view('admin.crimes.list',$data);
    }

    public function add_crimes(Request $request){
        return view('admin.crimes.add');
    }

    public function insert_add_crimes(Request $request){
        $save = new CrimeModel;
        $save->crime_type = $request->crime_type;
        
               
        $save->save();

        return redirect('admin/crimes')->with('success', 'Crime successfully created');
        
    }

    public function Editcrimes($id){
        $crimes = CrimeModel::find($id);
        return view('admin.crimes.edit', compact('crimes'));
     
     }

     public function Updatecrimes(Request $request, $id){
    
        $update =   CrimeModel::find($id)->update([
               'crime_type' => $request->crime_type,
               
              
                      
           ]);
           return redirect('admin/crimes')->with('success','Crime Updated succcessfully');
        
        }

        public function Deletecrimes($id){
            $delete = CrimeModel::find($id)->Delete();
            return Redirect()->back()->with('success','Crime Deleted succcessfully');
         }
}
