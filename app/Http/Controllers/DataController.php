<?php

namespace App\Http\Controllers;

use App\Models\books;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\DataController;


class DataController extends Controller
{
    public function index(){  
        
        $books = books::all();
        return view('buku.index', compact('books'));
    }

    public function create(){

        return view('buku.create');
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'Judul'     => 'required',
            'penulis'   => 'required',
            'tahun_terbit'   => 'required',
            'image'     => 'required|image|mimes:png,jpg,jpeg',
            'status'   => 'required',
        ]);
    
       
        $extension = $request->file('image')->extension();
        $simpan = $request->Judul. '.' . time() . '.' . $extension;
        $request->file('image')->storeAs('public/blogs', $simpan);
    
        $books = books::create([
            'Judul'     => $request->Judul,
            'penulis'   => $request->penulis,
            'tahun_terbit'   => $request->tahun_terbit,
            'foto'     => $simpan,
            'status'   => $request->satus,
        ]);
    
        if($books){
            Session::flash('success', 'Data Berhasil Di Tambahkan');
            return redirect('/');
        }else{
            Session::flash('failed', 'Data Gagal Di Tambahkan');
            return redirect('/');
        }
    }

    public function destroy($id){
        $hapus = books::findOrFail($id)->delete();
        return redirect('/');
    }

    public function edit($id){

        $books = books::findOrFail($id);
        return view('edit.buku', ["books" => $books]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'Judul' => 'required',
            'penulis' => 'required',
            'tahun_terbit' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ]);

        $books = books::findOrFail($request->id);

        if ($books->foto) {
            Storage::delete('public/books/' . $books->foto);
        }

        if ($request->file('image')) {
            $extension = $request->file('image')->extension();
            $simpan = $request->judul . '.' . time() . '.' . $extension;
            $request->file('image')->storeAs('public/books', $simpan);
        } else {
            $simpan = $books->foto;
        }

        $books->update([
            'Judul'     => $request->Judul,
            'penulis'   => $request->penulis,
            'tahun_terbit'   => $request->tahun_terbit,
            'foto'     => $simpan,
            'status'   => $request->satus,
        ]);

        if ($books) {
            Session::flash('success', 'Data Berhasil Diupdate');
        } else {
            Session::flash('failed', 'Data Gagal Diupdate');
        }

        return redirect('/');
    }
}
