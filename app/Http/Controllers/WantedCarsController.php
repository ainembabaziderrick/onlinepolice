<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WantedCars;


class WantedCarsController extends Controller
{
    public function wanted_cars()
    {
        $getRecord = WantedCars::latest()->get();
        return view('admin.wanted_cars.list', compact('getRecord'));
    }

    public function add_wanted_cars()
    {
        return view('admin.wanted_cars.add');
    }

    public function insert_add_wanted_cars(Request $request)
    {

        $news_image = $request->file('image');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($news_image->getClientOriginalExtension());
        $img_name = $name_gen . '.' . $img_ext;
        $up_location = 'image/wanted_cars/';
        $last_img = $up_location . $img_name;
        $news_image->move($up_location, $img_name);

        $save = new WantedCars;
        $save->name = $request->name;
        $save->number = $request->number;
        $save->image = $last_img;
        $save->description = $request->description;
        $save->save();



        return redirect('admin/wanted_cars')->with('success', 'Wanted Car successfully created');

    }

    public function Editwanted_cars($id)
    {
        $cases = WantedCars::find($id);

        return view('admin.wanted_cars.edit', compact('cases'));

    }

    public function Updatewanted_cars(Request $request, $id)
    {

        $update = WantedCars::find($id)->update([
            'name' => $request->name,
            'number' => $request->number,
            'image' => $request->image,
            'description' => $request->description,


        ]);
        return redirect('admin/wanted_cars')->with('success', 'Wanted car Updated succcessfully');

    }


    public function Deletewanted_cars($id)
    {
        $delete = WantedCars::find($id)->Delete();
        return Redirect()->back()->with('success', 'Wanted Car Deleted succcessfully');
    }

    //Police

    public function police_wanted_cars()
    {
        $getRecord = WantedCars::latest()->get();
        return view('police.wanted_cars.list', compact('getRecord'));
    }

    public function police_add_wanted_cars()
    {
        return view('police.wanted_cars.add');
    }

    public function police_insert_wanted_cars(Request $request)
    {

        $news_image = $request->file('image');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($news_image->getClientOriginalExtension());
        $img_name = $name_gen . '.' . $img_ext;
        $up_location = 'image/wanted_cars/';
        $last_img = $up_location . $img_name;
        $news_image->move($up_location, $img_name);

        $save = new WantedCars;
        $save->name = $request->name;
        $save->number = $request->number;
        $save->image = $last_img;
        $save->description = $request->description;
        $save->save();



        return redirect('police/wanted_cars')->with('success', 'Wanted Car successfully created');

    }

}
