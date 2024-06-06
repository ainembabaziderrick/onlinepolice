<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LetterModel;
use App\Models\CrimeModel;

class LetterController extends Controller
{

    public function Homeletter(){
        $data['getRecord'] = LetterModel::get();
        return view('citizen.letter.list', $data);
    }
    public function citizen_add_letter(Request $request){
        $data['getRecord'] = CrimeModel::get();
        return view('citizen.letter.add',$data);
    }

    public function citizen_insert_add_letter(Request $request){

        $save = new LetterModel;
        $save->victim_name = $request->victim_name;
        $save->crime = $request->crime;
        $save->offender_name = $request->offender_name;
       
        $save->description = $request->description;
        $save->location = $request->location;
        $save->time = $request->time;
        $save->date = $request->date;   
        $save->save();

       

        return redirect('citizen/letter')->with('success', 'Report successfully generated');
        
    }


}
