<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterSurat;
use App\Http\Requests\StoreMasterSuratRequest;
use App\Http\Requests\UpdateMasterSuratRequest;
use App\Http\Controllers\Controller;
use Illuminate\View\View;
use DB;
use Illuminate\Http\RedirectResponse;

class MasterSuratController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $data = MasterSurat::latest()->paginate(5);

        return view('pengajuan.index', compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $id = MasterSurat::latest()->first()->id + 1;
        $surat = MasterSurat::pluck('no_surat', 'no_surat')->all();
        return view('pengajuan.create', compact('surat','id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
            MasterSurat::create([
            'no_surat' => $request->no_surat,
            'klasifikasi' => $request->klasifikasi,
            'lampiran' => $request->lampiran,
            'perihal' => $request->perihal,
            'id_polisi' => $request->nama,
            'pangkat' => $request->pangkat,
            'nrp' => $request->nrp,
            'jabatan' => $request->jabatan,
            'keterangan' => $request->keterangan,
            'tanggal' => $request->tanggal,
            'provinsi' => $request->provinsi,
            'kota' => $request->kota,
            'status' => '1',
        ]);
        return redirect()->route('pengajuan.index')
            ->with('success', 'data created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(MasterSurat $masterSurat, $id)
    {
        $pengajuan = MasterSurat::find($id);
        return view('pengajuan.show', compact('pengajuan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $pengajuan = MasterSurat::findOrFail($id);

        //render view with post
       return view('pengajuan.edit', compact('pengajuan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $MasterSurat = MasterSurat::find($id);
        $MasterSurat->ttd1 = "1";
        $MasterSurat->status = $request->status; //terima
        // dd($MasterSurat->status = $request->status);
        $MasterSurat->Update();
        return redirect()->route('pengajuan.index')->with('success', 'data updated succesfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MasterSurat $masterSurat)
    {
        //
    }
}
