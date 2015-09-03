<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function index()
    {
        return view('welcome');
    }

    public function area_of_training()
    {
        return view('area_of_training');
    }
    public function target_audience()
    {
        return view('target_audience');
    }
    public function resource_person()
    {
        return view('resource_person');
    }
    public function registration()
    {
        return view('registration');
    }
    public function sponsorship_opportunity()
    {
        return view('sponsorship_opportunity');
    }

}
