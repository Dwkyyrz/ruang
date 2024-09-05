<?php

namespace App\Http\Controllers;

use App\Models\datasiswa;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'school' => 'required|string|max:255',
            'class' => 'required|string|max:255',
        ]);

        // Simpan data ke database
        $daftar = new datasiswa();
        $daftar->name = $validatedData['name'];
        $daftar->email = $validatedData['email'];
        $daftar->phone = $validatedData['phone'];
        $daftar->school = $validatedData['school'];
        $daftar->class = $validatedData['class'];
        $daftar->save();

        // Redirect atau tampilkan pesan sukses
        return redirect()->back()->with('success', 'Pendaftaran berhasil!');
    }
}
