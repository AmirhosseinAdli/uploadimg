@extends('layouts.admin')
@section('content')


    <div class="container">
        <h1>{{$user->name}} History</h1><br><br><br>

        <div class="container text-center">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th class="w-20"><h3>Picture</h3></th>
                        <th class="w-20"><h3>Used Slug</h3></th>
                        <th class="w-20"><h3>Used Token</h3></th>
                        <th class="w-20"><h3>Visitor IP</h3></th>
                        <th class="w-20"><h3>Operation</h3></th>
                    </tr>
                    </thead>
                    @foreach($pictures as $picture)
                        @if($picture->histories)
                            @foreach($picture->histories as $history)
                                <tr>
                                    <td><img src="{{asset('storage/'.$picture->picture_main)}}" style="width: 100px ;height: 100px;"></td>
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

