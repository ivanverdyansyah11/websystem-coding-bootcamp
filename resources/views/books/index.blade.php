@extends('layouts.index')

@section('content')
    <div class="row">
        <div class="col-1 d-flex flex-column gap-3">
            <p>List Shown :</p>
            <p>Search :</p>
        </div>
        <div class="col-3">
            <form action="" class="w-100 d-flex flex-column gap-3">
                @csrf
                <div class="input-group">
                    <input type="text" class="form-control">
                </div>
                <div class="input-group">
                    <input type="text" class="form-control">
                </div>
                <button type="submit" class="btn btn-dark">Search Books</button>
            </form>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">Author</th>
                        <th scope="col">Genre</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $i =>$book)
                        <tr>
                            <th>{{ $i + 1 }}</th>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->category->name }}</td>
                            <td>{{ $book->author->username }}</td>
                            <td>{{ $book->genre }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-12 d-flex justify-content-end mt-4">
            {{ $books->links() }}
        </div>
    </div>
@endsection