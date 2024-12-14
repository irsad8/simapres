<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Dosen;
use App\Imports\DosenImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class DosenController extends Controller
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

        $dosen = Dosen::all();

        return view('dosen', compact('dosen'));
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
            'data_dosen' => ['required', 'mimes:xlsx,csv'],
        ]);

        // return view('dashboard');

        $import = new DosenImport();
        Excel::import($import, $request->file('data_dosen'));

        // Cek apakah ada kegagalan
        if ($import->getFailures()) {
            $failures = $import->getFailures();
            $errorMessages = [];

            foreach ($failures as $failure) {
                $errorMessages[] = 'Gagal pada baris ' . $failure['row'];
            }

            return redirect()->back()->with('error', ['import' => implode('<br>', $errorMessages)]);
        }

        return redirect()->back()->with('success', 'Data dosen berhasil ditambahkan.');
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
    public function update(Request $request, Dosen $dosen)
    {
        $dosen->update($request->only('nidn'));
        $user = User::find($dosen->user_id);
        $data = $request->only('nama', 'email', 'password');
        if ($request->password) {
            $data['password'] = Hash::make($request->password);
        }
        $user->update($data);

        return redirect()->back()->with('success', 'Data dosen' . $user->nama . ' berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dosen $dosen)
    {
        $dosen->delete();

        return redirect()->back()->with('delete', 'Data dosen ' . $dosen->nama . ' berhasil dihapus');
    }
}
