@extends('layouts.admin')

@section('part name')
    <h1 class="d-flex justify-content-center mb-5">History </h1>
@endsection


@section('content')
    <br>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <br>
                <h2>History</h2>
                <span>username</span>
            </div>
            <div class="offset-md-7 col-md-2">
                <img src="" width="100px" height="100px" alt="ldsnldjs" class="thumbnail">
            </div>
        </div>
        <br>
        <div class="row">
        </div>
        <div class="row">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">User Slug</th>
                    <th scope="col">User Token</th>
                    <th scope="col">Visitor Ip</th>
                    <th scope="col">Operation</th>
                </tr>
                </thead>
                <tbody>
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