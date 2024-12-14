<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use App\Imports\MahasiswaImport;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();

        if (!$user->role == 'admin') {
            return redirect()->route('login')->with('error', 'Anda bukan admin!');
        }

        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'data_mahasiswa' => ['required', 'mimes:xlsx,csv'],
        ]);

        // return view('dashboard');

        $import = new MahasiswaImport();
        Excel::import($import, $request->file('data_mahasiswa'));

        // Cek apakah ada kegagalan
        if ($import->getFailures()) {
            $failures = $import->getFailures();
            $errorMessages = [];

            foreach ($failures as $failure) {
                $errorMessages[] = 'Gagal pada baris ' . $failure['row'];
            }

            return redirect()->back()->with('error', ['import' => implode('<br>', $errorMessages)]);
        }

        return redirect()->back()->with('success', 'Data mahasiswa berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $mahasiswa->update($request->only('nim', 'jurusan_id'));
        $user = User::find($mahasiswa->user_id);
        $data = $request->only('nama', 'email', 'password');
        if ($request->password) {
            $data['password'] = Hash::make($request->password);
        }
        $user->update($data);

        return redirect()->back()->with('success', 'Data mahasiswa' . $user->nama . ' berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();

        return redirect()->back()->with('delete', 'Data mahasiswa ' . $mahasiswa->nama . ' berhasil dihapus');
    }
}
