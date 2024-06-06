<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StolenCars;

class StolenCarsController extends Controller
{
    public function stolen_cars()
    {
        $getRecord = StolenCars::latest()->get();
        return view('admin.stolen_cars.list', compact('getRecord'));
    }

    public function add_stolen_cars()
    {
        return view('admin.stolen_cars.add');
    }

    public function insert_stolen_cars(Request $request)
    {

        $news_image = $request->file('image');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($news_image->getClientOriginalExtension());
        $img_name = $name_gen . '.' . $img_ext;
        $up_location = 'image/stolen_cars/';
        $last_img = $up_location . $img_name;
        $news_image->move($up_location, $img_name);

        $save = new StolenCars;
        $save->name = $request->name;
        $save->number = $request->number;
        $save->image = $last_img;
        $save->description = $request->description;
        $save->save();



        return redirect('admin/stolen_cars')->with('success', 'Wanted Car successfully created');

    }

    public function Editstolen_cars($id)
    {
        $cases = StolenCars::find($id);

        return view('admin.stolen_cars.edit', compact('cases'));

    }

    public function Updatestolen_cars(Request $request, $id)
    {

        $update = StolenCars::find($id)->update([
            'name' => $request->name,
            'number' => $request->number,
            'image' => $request->image,
            'description' => $request->description,


        ]);
        return redirect('admin/stolen_cars')->with('success', 'Wanted car Updated succcessfully');

    }


    public function Deletestolen_cars($id)
    {
        $delete = StolenCars::find($id)->Delete();
        return Redirect()->back()->with('success', 'Wanted Car Deleted succcessfully');
    }

    //Police

    public function police_stolen_cars()
    {
        $getRecord = StolenCars::latest()->get();
        return view('police.stolen_cars.list', compact('getRecord'));
    }

    public function police_add_stolen_cars()
    {
        return view('police.stolen_cars.add');
    }

    public function police_insert_stolen_cars(Request $request)
    {

        $news_image = $request->file('image');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($news_image->getClientOriginalExtension());
        $img_name = $name_gen . '.' . $img_ext;
        $up_location = 'image/stolen_cars/';
        $last_img = $up_location . $img_name;
        $news_image->move($up_location, $img_name);

        $save = new StolenCars;
        $save->name = $request->name;
        $save->number = $request->number;
        $save->image = $last_img;
        $save->description = $request->description;
        $save->save();



        return redirect('police/stolen_cars')->with('success', 'Wanted Car successfully created');

    }

}
