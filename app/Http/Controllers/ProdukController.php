<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\produk;
class ProdukController extends Controller
{
    //untuk menampilkan data yang sudah  di inputkan dari create
    public   function  index()
    {
        $produk = produk::all();
        return view ('/home/produk/index', compact('produk'));
    }

    //untuk menambahkan data 
    public function create ()
    {
        return view('/home/produk/create');
    }
    //untuk meng edit data dari si index
    public function edit($id)
    {
        $produk = produk::find($id);
        return view('/home/produk/edit', compact('produk'));
    }
    //untuk mendelete data / hapus data
    public function  delete($id)
    {
        $produk = produk::find($id);
        $produk->delete();
        return redirect('/home/produk');
    }
    //untuk mengizinkan data dari si create dan di lempar data ke index
    public function post(Request $request)
    {
        $id = $request->get('id');
        if($id){
            $produk =produk::find($id); 
        }else {
            $produk = new produk;
        }
        $produk->nama_produk =$request->nama_produk;
        $produk->harga =$request->harga;

        $produk->save();
        return redirect()->route('/home/produk/index');
    }

}