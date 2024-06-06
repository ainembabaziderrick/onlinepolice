<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function Dashboard(){
        return view('admin.dashboard.list');
    }

    //citizen

    public function CitizenDashboard(){
        return view('citizen.dashboard.list');
    }

    //police
    public function policeDashboard(){
        return view('police.dashboard.list');
    }

}
