<?php

namespace App\Http\Controllers;

use App\Exports\UserExport;
use App\Exports\UserWinnerExport;
use App\Models\City;
use App\Models\Department;
use App\Models\User;
use App\Models\UserWinner;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class LandingPageController extends Controller
{
    //
    public function index ()
    {
        $departments = Department::all();
        return view('welcome')->with('departments',$departments);
    }

    public function get_cities ($department_id)
    {
        $cities = City::where('department_id',$department_id)->get();
        return new JsonResponse(json_encode($cities), 200);
    }

    public function export_users_in_excel()
    {
        return Excel::download(new UserExport(), 'users.xlsx');

    }

    public function export_users_winners_in_excel()
    {
        return Excel::download(new UserWinnerExport(), 'user_winners.xlsx');
    }
}
