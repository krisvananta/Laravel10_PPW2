@extends('layouts.layout')

@section('content')

@if (Session::has('success'))
<div class="alert alert-success">{{ Session::get('success') }}</div>
@endif
@if (Session::has('error'))
<div class="alert alert-danger">{{ Session::get('error') }}</div>
@endif

<!-- <form action="{{ route('book.search') }}" method="get">
    @csrf
    <input type="text" name="word" class="form-control" placeholder="Cari ...." style="width: 30%; display: inline; margin-top: 10px; margin-bottom: 10px; float: right;">
</form> -->

<table class="table table-striped table-bordered table-hover datatable">
    <thead class="thead-dark">
        <tr>
            <th scope="">No</th>
            <th scope="col">ID</th>
            <th scope="col">Judul Buku</th>
            <th scope="col">Penulis</th>
            <th scope="col">Harga</th>
            <th scope="col">Tanggal Terbit</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @php
            $rowNumber = 1;
        @endphp
        @foreach ($book_data as $book)
            <tr>
                <td>{{ $rowNumber++ }}</td>
                <td>{{ $book->id }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ "Rp. " . number_format($book->price, 2, ',', '.') }}</td>
                <td>
                        {{ \Carbon\Carbon::parse ($book->date_published)->format('d/m/Y') }}
                </td>
                <td>
                    <!-- Aksi buttons can be added here -->
                    <!-- Tombol Edit -->
                    <form action="{{ route('book.edit', $book->id) }}" method="POST">
                        @csrf
                        @method('POST')
                        <button class="btn btn-sm btn-primary">Edit</button>    
                    </form>

                    <!-- Tombol Delete -->
                    <form action="{{ route('book.destroy', $book->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Confirm delete?')"
                            type="submit">Delete</button>
                    </form>

                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<div>{{ $book_data->links() }}</div>
<div><strong>Jumlah Buku: {{ $book_number }}</strong></div>

<a href="{{ route('book.create') }}" class="btn btn-primary float-end">Add Book</a>


@endsection

