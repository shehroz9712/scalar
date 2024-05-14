<?php

namespace App\Http\Controllers\User;;

use App\Http\Requests\ContactFormRequest;
use App\Models\Contact;
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
    public function career()
    {
        return view('user.career ');
    }
    public function faq()
    {
        return view('user.faq');
    }
    public function page()
    {
        return view('user.page');
    }


    public function submit(ContactFormRequest $request)
    {
        Contact::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ]);

        return redirect()->back()->with('success', 'Your message has been submitted successfully!');
    }
}
