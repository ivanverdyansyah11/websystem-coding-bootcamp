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
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection