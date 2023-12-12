@extends('layouts.index')

@section('content')
    <div class="row">
        <div class="col-12">
            <h2>Top 10 Most Famous Author</h2>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Total Rating</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($authors as $i => $author)
                        <tr>
                            <th>{{ $i + 1 }}</th>
                            <td>{{ $author->username }}</td>
                            <td>{{ $author->email }}</td>
                            <td>{{ $author->total_rating }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection