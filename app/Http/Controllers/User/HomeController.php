<?php

namespace App\Http\Controllers\User;;

use App\Http\Requests\ContactFormRequest;
use App\Http\Requests\FormServiceRequest;
use App\Http\Requests\NewLetterStore;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\Form;
use App\Models\NewLetter;
use App\Models\Review;
use App\Models\Saloon;
use App\Models\Service;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $faqs = Faq::Active()->get();

        return view('user.index', compact('faqs'));
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
        $faqs = Faq::Active()->get();

        return view('user.faq', compact('faqs'));
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

        return redirect()->back()->with('success', 'Your info has been submitted successfully!');
    }
    public function subscribe(NewLetterStore $request)
    {


        NewLetter::create([
            'email' => $request->input('email'),

        ]);

        return redirect()->back()->with('success', 'Your email has been submitted successfully!');
    }
    public function store(FormServiceRequest $request)
    {
        $data = $request->except([
            '_token'
        ]);
        // Create a new record in the database
        Form::create($data);

        // Redirect to a thank you page or back to the form with a success message
        return redirect()->back()->with('success', 'Your information has been submitted successfully.');
    }
}
