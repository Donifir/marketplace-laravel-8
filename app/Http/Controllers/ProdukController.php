<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $produk = Barang::OrderBy('id','desc')->get();
        return view('crudproduk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('crudproduk.create');
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
            'gambar' => 'required|mimes:jpeg,png,jpg,gif,svg|max:1023',
            'nama_barang' => 'required|max:14|min:3',
            'harga' => 'required|min:3|numeric',
            'stok' => 'required|max:255|min:3|numeric   ',
            'keterangan' => 'required|max:255|min:3',
        ]);
        //
        $imgName = $request->gambar->getClientOriginalName() . '-' . time() . '.' . $request->gambar->extension();
         $request->gambar->move(public_path('image'),$imgName);
        //
        Barang::create([
            'nama_barang' => $request -> nama_barang,
            'harga' => $request -> harga,
            'stok' => $request -> stok,
            'keterangan' => $request -> keterangan,
            'gambar' => $imgName,
        ]);
        return redirect('/dashboard');
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
        $produk = Barang::where('id',$id)->first();
        // dd($produk);
        return view('crudproduk.show', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $produk= Barang::find($id);
        return view('crudproduk.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        Barang::find($id)->update([
            'nama_barang'=> $request->nama_barang,
            'harga'=> $request->harga,
            'stok'=> $request->stok,
            'keterangan'=> $request->keterangan,
            ]);
        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Barang::find($id)->delete();
        return redirect('/dashboard');
    }
}
