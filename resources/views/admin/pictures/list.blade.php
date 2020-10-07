@extends('layouts.admin')

@section('part name')
    <h1 class="d-flex justify-content-center mb-5">Picture List </h1>
@endsection

@section('content')

    <div class="container">
        {{--<h3 class="container">Picture List</h3>--}}
        <a class="container" href="#">+ Upload new picture</a>
        <table class="table table-striped">
            <thead>
            <tr class="container">
                <th scope="col">Username</th>
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
                    <td>{{$picture->username}}</td> <!--use user_id for username including-->
                    <td>{{$picture->token}}</td>
                    <td>{{$picture->slug}}</td>
                    <td>{{$picture->updated_at}}</td>
                    <td>{{$picture->expire_time}}</td>
                    <td>
                        <div class="container d-inline-flex">
                            <a href="{{route('admin.histories.index')}}" class="btn btn-secondary btn-block">History</a>
                            <a href="{{route('admin.pictures.edit',[$picture])}}" class="btn btn-primary btn-block">Edit</a>
                            <form action="{{route('admin.pictures.expire',[$picture])}}" method="post" class="col-5">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-block active">expire</button >
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
