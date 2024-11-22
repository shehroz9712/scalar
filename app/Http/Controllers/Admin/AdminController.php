<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $admins = Admin::all();
        return view('admin.admins.index', compact('admins'));
    }

    public function create()
    {
        return view('admin.admins.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins',
            'phone' => 'nullable|string',
            'password' => 'required|string|min:8',
        ]);

        Admin::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'password' => Hash::make($validatedData['password']),
        ]);

        return redirect()->route('admin.admins.index')->with('success', 'Admin created successfully.');
    }

    public function show(Admin $admin)
    {
        return view('admin.admins.show', compact('admin'));
    }

    public function edit(Admin $admin)
    {
        return view('admin.admins.edit', compact('admin'));
    }

    public function update(Request $request, Admin $admin)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email,' . $admin->id,
            'phone' => 'nullable|string',
            'password' => 'nullable|string|min:8',
        ]);

        $admin->update([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'password' => $validatedData['password'] ? Hash::make($validatedData['password']) : $admin->password,
        ]);

        return redirect()->route('admin.admins.index')->with('success', 'Admin updated successfully.');
    }

    public function destroy(Admin $admin)
    {
        $admin->delete();
        return redirect()->route('admin.admins.index')->with('success', 'Admin deleted successfully.');
    }
}
