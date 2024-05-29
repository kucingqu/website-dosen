<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dosen = Dosen::all();
        return view('dosen.index',['dosen'=>$dosen]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('dosen.create');
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
        $request->validate([
            'nidn' =>'required',
            'nama_dosen' =>'required',
            'alamat' =>'required',
            'usia' =>'required', 
            'jenis_kelamin' =>'required',

        ],[

            'nidn.required' => 'Wajib Diisi',
            'nama_dosen.required' => 'Wajib Diisi',
            'alamat.required' => 'Wajib Diisi',
            'usia.required' => 'Wajib Diisi',
            'jenis_kelamin.required' => 'Wajib Diisi',
        ]);

        $data =[
            'nidn' => $request->input('nidn'),
            'nama_dosen' => $request->input('nama_dosen'),
            'alamat' => $request->input('alamat'),
            'usia' => $request->input('usia'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
        ];
        Dosen::create($data);
        return redirect('dosen')->with('success','Dosen Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function show(Dosen $dosen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = Dosen::where('nidn',$id)->first();
        return view('dosen.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $request->validate([
            'nidn' =>'required',
            'nama_dosen' =>'required',
            'alamat' =>'required',
            'usia' =>'required', 
            'jenis_kelamin' =>'required',

        ],[

            'nidn.required' => 'Wajib Diisi',
            'nama_dosen.required' => 'Wajib Diisi',
            'alamat.required' => 'Wajib Diisi',
            'usia.required' => 'Wajib Diisi',
            'jenis_kelamin.required' => 'Wajib Diisi',
        ]);

        $data =[
            'nidn' => $request->nidn,
            'nama_dosen' => $request->nama_dosen,
            'alamat' => $request->alamat,
            'usia' => $request->usia,
            'jenis_kelamin' => $request->jenis_kelamin,
        ];
        Dosen::where('nidn',$id)->update($data);
        return redirect('dosen')->with('success', 'Dosen Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

         Dosen::where('nidn',$id)->delete();
         return redirect('dosen')->with('success','Dosen Berhasil Dihapus');
    }
}
