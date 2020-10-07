@extends('layouts.admin')


@section('part name')
    <h1 class="d-flex justify-content-center mb-5">{{$user->name}} History</h1>
@endsection

@section('content')


    <div class="container">
        {{--<h1>History</h1><br><br><br>--}}

        <div class="container text-center">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th class="w-10"><h3>Username</h3></th>
                        <th class="w-15"><h3>Picture</h3></th>
                        <th class="w-15"><h3>Used Slug</h3></th>
                        <th class="w-15"><h3>Used Token</h3></th>
                        <th class="w-15"><h3>Visitor IP</h3></th>
                        <th class="w-15"><h3>Opration</h3></th>
                    </tr>
                    </thead>
                    @foreach($pictures as $picture)
                        @if($picture->histories)
                            @foreach($picture->histories as $history)
                                <tr>
                                    <td>{{$picture->user->name}}</td>
                                    <td><img src="{{asset('storage/'.$picture->picture_main)}}" alt="" style="width: 100px ;height: 100px;"></td>
                                    <td>{{$picture->slug}}</td>
                                    <td>{{$picture->token}}</td>
                                    <td>{{$history->visitor_ip}}</td>
                                    <td>{{$history->operation}}</td>
                                </tr>
                            @endforeach
                        @endif
                    @endforeach
                </table>
            </div>
        </div>
    </div>

@endsection

