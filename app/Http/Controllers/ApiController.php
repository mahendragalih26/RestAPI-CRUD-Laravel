<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gudang;

class ApiController extends Controller
{
    public function create(Request $request)
    {
        $barang = new Gudang();
            
        $barang->nama = $request->input('nama');
        $barang->harga = $request->input('harga');
        $barang->item = $request->input('item');
        $barang->jenis = $request->input('jenis');
        
        $barang->save();
        return response()->json($barang);
    }
    
    public function show(Request $request)
    {
        $barang = Gudang::all();
        return response()->json($barang);
    }
    
    public function showbyid($id)
    {
        $barang = Gudang::find($id);
        return response()->json($barang);
    }
    
    public function updatebyid(Request $request, $id)
    {
        $barang = Gudang::find($id);
        
        $barang->nama = $request->input('nama');
        $barang->harga = $request->input('harga');
        $barang->item = $request->input('item');
        $barang->jenis = $request->input('jenis');
        
        $barang->save();
        return response()->json($barang);
    }
    
    public function deletebyid(Request $request, $id)
    {
        $barang = Gudang::find($id);
        $barang->delete();
        
        return response()->json($barang);
    }
}
