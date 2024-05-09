<?php

namespace App\Http\Controllers\User;;

use App\Models\Review;
use App\Models\Saloon;
use App\Models\Service;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('user.index');
    }
    public function about()
    {
        return view('user.about');
    }
    public function contact()
    {
        return view('user.contact');
    }
    public function form()
    {
        return view('user.form');
    }

    public function home()
    {
        return view('user.index');
    }
}
