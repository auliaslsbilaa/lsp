<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mapel;
use App\Models\Kelas;
use App\Models\Mengajar;
use App\Models\Guru;

class MengajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('mengajar.index', [
            'mengajar' => Mengajar::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('mengajar.create',[
            'guru' => Guru::all(),
            'mapel' => Mapel::all(),
            'kelas' => Kelas::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data_mengajar = $request ->validate([
            'guru_id' => 'required',
            'mapel_id' => 'required',
            'kelas_id' => 'required'
        ]);
        Mengajar::create($data_mengajar);
        return redirect('/mengajar/index')->with('success', 'Data Mengajar Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Mengajar $mengajar)
    {
        //
        return view('mengajar.edit', [
            'mengajar' => $mengajar,
            'kelas' => Kelas::all(),
            'guru' => Guru::all(),
            'mapel' => Mapel::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mengajar $mengajar)
    {
        //
        $data_mengajar = $request ->validate([
            'guru_id' => 'required',
            'mapel_id' => 'required',
            'kelas_id' => 'required'
        ]);
        $mengajar->update($data_mengajar);
        return redirect('/mengajar/index')->with('success', 'Data Mengajar Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mengajar $mengajar)
    {
        //
        $nilai = Mengajar::where('mengajar_id', $mengajar->id);
        if ($nilai) {
            return back()->with('error', "Data mengajar masih dipakai di menu nilai");
        }
        $mengajar->delete();

        return redirect('/mengajar/index')->with('success', 'Data mengajar berhasil dihapus');
    }
}
