@extends('layouts.layout')

@section('content')

<div class="container">
    <h4>Tambah Buku</h4>
    @if (count($errors) > 0)
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    
    <form action="{{ route('book.store') }}" method="POST">
        @csrf
        <div>Title <input type="text" name="title"></div>
        <div>Author <input type="text" name="author"></div>
        <div>Price <input type="text" name="price"></div>
        <div>Date Published <input type="text" id="date_published" name="date_published" class="date form-control" placeholder="yyyy/mm/dd"></div>
        <button type="submit">Save</button>
        <a href="{{'/book'}}">Back</a>
    </form>
</div>
@endsection