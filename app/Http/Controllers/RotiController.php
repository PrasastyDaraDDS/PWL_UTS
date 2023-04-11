<?php

namespace App\Http\Controllers;

use App\Models\Roti;
use Illuminate\Http\Request;

class RotiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $roti = Roti::latest();
        if (request('search')) {
            $roti->where('rotierk','like','%'. request('search').'%');
        }
        $roti = $roti->paginate(3);
        return view('roti.roti')
            ->with('roti',$roti);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('roti.create_roti')
            ->with('url_form', url('/roti'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $request->validate([
            'merk'=>'required|string|max:50',
            'tipe'=>'required|string|max:50',
            'warna'=>'required|string|max:50',
            'jml_penumpang'=>'required|string',
            'harga'=>'required|int',
            'qty'=>'required|int'

            
        ]);
        $data = Roti::create($request->except(['_token']));
        //jika data berhasil ditambahkan, maka akan kembali ke halaman utama
        return redirect('roti')
            ->with('success','Roti Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Roti  $Roti
     * @return \Illuminate\Http\Response
     */
    public function show(Roti $Roti)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Roti  $Roti
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Roti = Roti::find($id);
        return view('roti.create_roti')
        ->with('m', $Roti)
        ->with('url_form', url('/roti/'. $id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Roti  $Roti
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'merk'=>'required|string|max:50,'.$id,
            'tipe'=>'required|string|max:50',
            'warna'=>'required|string|max:50',
            'jml_penumpang'=>'required|string',
            'harga'=>'required|int',
            'qty'=>'required|int'
        ]);
        
        $data = Roti::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('roti')
            ->with('success', 'Roti Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Roti  $Roti
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Roti::where('id', '=', $id)->delete();
        return redirect('roti')
        ->with('success','Roti Berhasil Dihapus');
    }
}
