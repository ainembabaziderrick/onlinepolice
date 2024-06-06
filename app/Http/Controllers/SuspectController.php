<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuspectModel;
use App\Models\CrimeModel;

class SuspectController extends Controller
{
    public function HomeSuspects()
    {
        $getRecord = SuspectModel::latest()->get();
        return view('admin.suspects.list', compact('getRecord'));
    }

    public function AddSuspects()
    {
        $data['getRecord'] = CrimeModel::get();
        return view('admin.suspects.add', $data);
    }

    public function StoreSuspects(Request $request)
    {

        $news_image = $request->file('image');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($news_image->getClientOriginalExtension());
        $img_name = $name_gen . '.' . $img_ext;
        $up_location = 'image/suspects/';
        $last_img = $up_location . $img_name;
        $news_image->move($up_location, $img_name);

        $save = new SuspectModel;
        $save->name = $request->name;
        $save->age = $request->age;
        $save->image = $last_img;
        $save->crime = $request->crime;
        $save->offender_name = $request->offender_name;
        $save->description = $request->description;
        $save->location = $request->location;
        $save->time = $request->time;
        $save->date = $request->date;

        $save->save();



        return redirect('admin/suspects')->with('success', 'Suspects successfully created');

    }

    public function EditSuspects($id)
    {
        $cases = SuspectModel::find($id);
        $data['getRecord'] = CrimeModel::get();
        return view('admin.suspects.edit', compact('cases'), $data);

    }

    public function UpdateSuspects(Request $request, $id)
    {

        $update = SuspectModel::find($id)->update([
            'name' => $request->name,
            'age' => $request->age,
            'image' => $request->image,
            'crime' => $request->crime,
            'offender_name' => $request->offender_name,
            'description' => $request->description,
            'location' => $request->location,
            'time' => $request->time,
            'date' => $request->date,

        ]);
        return redirect('admin/suspects')->with('success', 'Suspects Updated succcessfully');

    }


    public function DeleteSuspects($id)
    {
        $delete = SuspectModel::find($id)->Delete();
        return Redirect()->back()->with('success', 'Suspects Deleted succcessfully');
    }


    // Police

    public function Home_police_Suspects()
    {
        $getRecord = SuspectModel::latest()->get();
        return view('police.suspects.list', compact('getRecord'));
    }

    public function Add_police_Suspects()
    {
        $data['getRecord'] = CrimeModel::get();
        return view('police.suspects.add', $data);
    }

    public function Store_police_Suspects(Request $request)
    {

        $news_image = $request->file('image');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($news_image->getClientOriginalExtension());
        $img_name = $name_gen . '.' . $img_ext;
        $up_location = 'image/suspects/';
        $last_img = $up_location . $img_name;
        $news_image->move($up_location, $img_name);

        $save = new SuspectModel;
        $save->name = $request->name;
        $save->age = $request->age;
        $save->image = $last_img;
        $save->crime = $request->crime;
        $save->offender_name = $request->offender_name;
        $save->description = $request->description;
        $save->location = $request->location;
        $save->time = $request->time;
        $save->date = $request->date;

        $save->save();



        return redirect('police/suspects')->with('success', 'Suspects successfully created');

    }

}
