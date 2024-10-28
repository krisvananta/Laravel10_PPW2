<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class BookController extends Controller
{
    public function index()
    {
        $constraint = 100;
        $book_number = Book::count();
        $book_data = Book::orderBy('id', 'desc')->paginate($constraint);
        $number = $constraint * ($book_data->currentPage()-1);
        $total_price = $book_data->sum('price');
        return view('book.index', compact('book_data', 'number', 'book_number'));

        // $book_data = Book::all()->sortByDesc('id');
        // $book_quantity = $book_data->count();
        // $total_price = $book_data->sum('price');

        // return view('book.index', compact('book_data', 'book_quantity', 'total_price'));
    }

    public function search(Request $request)
    {
        $constraint = 100;
        $search = $request->word;
        $book_data = Book::where('title', 'like', "%".$search."%")->orwhere('author', 'like', "%".$search."%")->paginate($constraint);
        $book_number = Book::count();
        $number = $constraint * ($book_data->currentPage()-1);

        return view('book.index', compact('book_data', 'number', 'book_number', 'search'));
    }

    public function create()
    {
        return view('book.create');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'title' => 'required|string',
            'author' => 'required|string|max:30',
            'price' => 'required|numeric',
            'date_published' => 'required|date'
        ], [
            'title.required' => 'Judul harus diisi.',
            'title.string' => 'Judul harus berupa teks.',
            'author.required' => 'Penulis harus diisi.',
            'author.string' => 'Penulis harus berupa teks.',
            'author.max' => 'Nama penulis tidak boleh lebih dari 30 karakter.',
            'price.required' => 'Harga harus diisi.',
            'price.numeric' => 'Harga harus berupa angka.',
            'date_published.required' => 'Tanggal terbit harus diisi.',
            'date_published.date' => 'Tanggal terbit harus berupa tanggal yang valid.'
        ]);

        $book = Book::create($validatedData);
        return redirect('/book')->with('success', 'Book added successfully');
        // $book = new Book();
        // $book->title = $request->input('title');
        // $book->author = $request->input('author');
        // $book->price = $request->input('price');
        // $book->date_published = $request->input('date_published');
        // $book->save();
        // return redirect('/book')->with('success', 'Book added successfully');
    }

    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();

        return redirect('/book')->with('success', 'data deleted successfully');
    }

    public function edit($id)
    {
        $book = Book::find($id);
        if (!$book) {
            return redirect('/book')->with('error', 'Book not found');
        }
        return view('book.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $book = Book::find($id); // Mencari buku berdasarkan ID
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->price = $request->input('price');
        $book->date_published = $request->input('date_published');
        $book->save();
        return redirect('/book')->with('success', 'Book updated successfully');
    }
}
