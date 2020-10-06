@extends('layouts.admin')


@section('content')
    <div class="container">
        <h3 class="container">{{ @username }} | Picture List</h3>
        <a class="container" href="#">+ Upload new picture</a>
        <table class="table table-striped">
            <thead>
            <tr class="container">
                <th scope="col">Token</th>
                <th scope="col">Slug</th>
                <th scope="col">Data</th>
                <th scope="col">expire_data</th>
                <th class="text-center" scope="col">Action</th>
            </tr>
            </thead>

            <tbody>
            @foreach($pictures as $picture)

                <tr>
                    <td>{{$picture->token}}</td>
                    <td>{{$picture->slug}}</td>
                    <td>{{$picture->updated_at}}</td>
                    <td>{{$picture->expire_time}}</td>
                    <td>
                        <div class="container d-inline-flex">
                            <a href="<!-- edit route -->" class="btn btn-primary btn-sm w-25 offset-sm-3">Edit</a>
                            <form action="<!-- destroy route -->" method="post" class="col-5">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm active">Delete</button >
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection