<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\pinjamBuku;
use Illuminate\Http\Request;

class bookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = book::all();
        return view('books.index', compact('books'));
    }

     /**
     * Show the form for creating a new resource.
     */
    public function informasi()
    {
        $informasi = pinjamBuku::all();
        return view('books.informasi', compact('informasi'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_buku' => 'required',
            'penulis' => 'required',
            'kategori' => 'required',
            'status' => 'required|boolean',
            'tahun_terbit' => 'required|integer',
            'jumlah_stok' => 'required|integer',
            'deskripsi' => 'required',
        ]);

        book::create($request->all());

        return redirect('books');
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
        $books = book::findOrFail($id);
        return view('books.edit', compact('books'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul_buku' => 'required',
            'penulis' => 'required',
            'kategori' => 'required',
            'status' => 'required|boolean',
            'tahun_terbit' => 'required|integer',
            'jumlah_stok' => 'required|integer',
            'deskripsi' => 'required',
        ]);

        $books = book::findOrFail($id);
        $books->update($request->all());
        return redirect('books');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $books = book::findOrFail($id);
        $books->delete();
        return redirect('books');
    }
}
