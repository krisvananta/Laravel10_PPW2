@extends('layouts.layout')

@section('content')

<div class="container">
    <h4>Edit Buku</h4>
    <form action="{{ route('book.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>Title <input type="text" name="title" value="{{ $book->title }}"></div>
        <div>Author <input type="text" name="author" value="{{ $book->author }}"></div>
        <div>Price <input type="text" name="price" value="{{ $book->price }}"></div>
        <div>Date Published <input type="text" id="date_published" name="date_published" class="date form-control" placeholder="yyyy/mm/dd" value="{{ $book->date_published }}"></div>
        <button type="submit">Save</button>
        <a href="{{'/book'}}">Back</a>
    </form>
</div>

@endsection
