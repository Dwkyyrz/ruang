<?php

namespace App\Http\Controllers;

use App\Models\datasiswa;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
{
        $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:datasiswa,email',
        'phone' => 'required|string|max:15',
        'school' => 'required|string|max:255',
        'class' => 'required|string|max:255',
    ]);


    // Simpan data ke database
    DataSiswa::create($validatedData);

    // // Redirect kembali dengan pesan sukses
    // return redirect()->back()->with('success', 'Data berhasil disimpan!');
     // Kembalikan respons JSON untuk AJAX
    return response()->json(['message' => 'Data berhasil disimpan!']);
}

    public function index()
    {
        // Ambil data pengguna hanya dengan kolom 'name', 'school', dan 'class'
        $users = DataSiswa::select('name', 'school', 'class')->get();
        // dd($users);
        // Kembalikan data ke tampilan (Blade template)
        return view('welcome', compact('users'));
    }



}
