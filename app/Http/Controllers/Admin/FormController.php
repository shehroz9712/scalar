<?php

namespace App\Http\Controllers\Admin;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        $forms = Form::all(); // Fetch all forms
        return view('admin.forms.index', compact('forms'));
    }

    public function show($id)
    {
        $form = Form::findOrFail($id); // Fetch form by ID
        return view('admin.forms.show', compact('form'));
    }
}
