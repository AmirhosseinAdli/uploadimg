@extends('layouts.panel')

@section('content')

    <h3 class="container">Picture List</h3>
    <a class="container" href="#">Upload new picture</a>

    <table class="table">
        <thead>

        <tr>
            <th scope="col">#</th>
            <th scope="col">Token</th>
            <th scope="col">Slug</th>
            <th scope="col">Data</th>
            <th scope="col">expire_data</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pictures  as $picture)

            <tr>
                <th scope="row">{{$picture->id}}</th>
                <td>{{$picture->token}}</td>
                <td>{{$picture->slug}}</td>
                <td>{{$picture->updated_at}}</td>
                <td>{{$picture->expire_time}}</td>
                <td><div class="container d-inline-flex">
                        <a href="{{route('panel.pictures.edit',[$picture])}}" class="btn btn-primary btn-sm active"  >Edit</a>

                        <a href="#" class="btn btn-success btn-sm active"  >Expire</a>

                        <form action="{{route('panel.pictures.destroy',[$picture])}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit"  class="btn btn-danger btn-sm active"   > Delete</button >
                        </form>

                    </div>



                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

{{--        <img style="width: 50px;height: 50px" src="{{asset($picture->picture_main)}}" >--}}
{{--        <img style="width: 50px;height: 50px" src="{{asset($picture->picture_deactive)}}" >--}}
@endsection
