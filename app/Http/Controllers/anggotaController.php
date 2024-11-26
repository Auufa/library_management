<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\pinjamBuku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class anggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = book::all();
        return view('anggota.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pinjambuku = pinjamBuku::all();
        return view('anggota.create', compact('pinjambuku'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'book_id' => 'required|exists:books,id',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'required|date|after_or_equal:tanggal_pinjaman',
        ]);

        $book = Book::findOrFail($request->book_id);
        if (!$book->status) {
            return back();
        }

        pinjamBuku::create([
            'user_id' => Auth::id(),
            'book_id' => $book->id,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali,
            'status' => 'borrowed',
        ]);

        $book->update([
            'status' => false, //buku tidak tersedia
            'loan_status' => 'borrowed', //buku sedang dipinjam
        ]);

        return redirect()->back();
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
