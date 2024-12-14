<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $dosen = null;

        if ($user->role == 'admin') {
            $prestasi = Prestasi::all();
        } elseif ($user->role == 'dosen') {
            $prestasi = Prestasi::where('dosen_id', $user->id)->get();
        } else {
            $prestasi = Prestasi::where('mahasiswa_id', $user->id)->get();
            $dosen = Dosen::all();
        }

        return view('prestasi', compact('prestasi', 'dosen'));
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
        // dd($request);

        // $request->validate([
        //     'kategori' => 'required',
        //     'pelaksanaan' => 'required',
        //     'diatas_10PT' => 'required',
        //     'nama_kegiatan' => 'required',
        //     'jumlah_peserta' => 'required',
        //     'capaian' => 'required',
        //     'mulai_pelaksanaan' => 'required',
        //     'selesai_pelaksanaan' => 'required',
        //     'link_sertifikat' => 'required',
        //     'link_penyelenggara' => 'required',
        //     'foto_penyerahan' => 'required',
        //     'surat_tugas_mhs' => 'required',
        //     'dosen_id' => 'required',
        // ]);

        try {
            $baruprestasi = Prestasi::create([
                'mahasiswa_id' => auth()->user()->id,
                'kategori' => $request->kategori,
                'pelaksanaan' => $request->pelaksanaan,
                'diatas_10PT' => ($request->diatas_10PT == true) ? true : false,
                'nama_kegiatan' => $request->nama_kegiatan,
                'jumlah_peserta' => $request->jumlah_peserta,
                'capaian' => $request->capaian,
                'mulai_pelaksanaan' => $request->mulai_pelaksanaan,
                'selesai_pelaksanaan' => $request->selesai_pelaksanaan,
                'link_sertifikat' => $request->link_sertifikat,
                'link_penyelenggara' => $request->link_penyelenggara,
                'foto_penyerahan' => $request->foto_penyerahan,
                'surat_tugas_mhs' => $request->surat_tugas_mhs,
                'dosen_id' => $request->dosen_id,
                'verifikasi' => false,
            ]);

            Log::info('Data saved', ['id' => $baruprestasi->id]);
        } catch (\Throwable $th) {
            Log::error('Error saving data', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan data');
        }

        return redirect()->back()->with('success', 'Data prestasi berhasil ditambahkan');
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
    public function update(Request $request, Prestasi $prestasi)
    {
        $request->validate([
            'surat_tugas_dosen' => 'required',
        ]);

        $prestasi->update([
            'surat_tugas_dosen' => $request->surat_tugas_dosen,
            'verifikasi' => true,
        ]);

        return redirect()->back()->with('success', 'Data prestasi' . $prestasi->nama_kegiatan . 'berhasil diverifikasi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prestasi $prestasi)
    {
        $prestasi->delete();

        return redirect()->back()->with('delete', 'Data mahasiswa ' . $prestasi->nama_kegiatan . ' berhasil dihapus');
    }
}
