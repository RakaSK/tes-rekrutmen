<?php

namespace App\Http\Controllers;

use App\Models\Penulis;
use Illuminate\Http\Request;

class PenulisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['penulis'] = $request->get('penulis');
        $data['penulisku'] = Penulis::where('nama', 'like', '%' . $data['penulis'] . '%')->get();
        return view('penulis.index', $data);
        // $penulisku = Penulis::orderBy('id','asc')->paginate(5);
        // return view('penulis.index',compact('penulisku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Tambah Penulis';
        return view('penulis.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
        ]);

        $customer = new Penulis($request->all());
        $customer->save();
        return redirect('penulis')->with('success', 'Penulis added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penulis  $penulis
     * @return \Illuminate\Http\Response
     */
    public function show(Penulis $penulis)
    {
        return view('penulis.beranda');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penulis  $penulis
     * @return \Illuminate\Http\Response
     */
    public function edit(Penulis $penulis)
    {
        $data['title'] = 'Edit Penulis';
        $data['penulis'] = $penulis;
        return view('penulis.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penulis  $penulis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penulis $penulis)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
        ]);

        $penulis->kode = $request->kode;
        $penulis->nama = $request->nama;
        $penulis->alamat = $request->alamat;
        $penulis->tanggallahir = $request->tanggallahir;
        $penulis->save();
        return redirect('penulis')->with('success', 'Penulis updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penulis  $penulis
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penulis = Penulis::find($id); 
        $penulis->delete();
        return redirect('penulis')->with('success', 'Penulis deleted successfully');
    }
}
