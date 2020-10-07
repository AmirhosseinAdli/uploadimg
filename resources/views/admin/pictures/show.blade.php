@extends('layouts.admin')

@section('content')

    <div class="container ">
        <div class="row">
            <div class="col-12 d-flex justify-content-between">
                <h1 class="ml-3">History</h1>
                <img class="mr-3" src="{{asset('storage/'.$picture->picture_main)}}" width="70" height="70">
            </div>
            <div class="col-12">
                <h5 class="mt-3 ml-3">{{$picture->user->name}}</h5>
            </div>
        </div>


        <div class="container text-center">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th class="w-20"><h3>Used Slug</h3></th>
                        <th class="w-20"><h3>Used Token</h3></th>
                        <th class="w-20"><h3>Visitor IP</h3></th>
                        <th class="w-20"><h3>Opration</h3></th>
                    </tr>
                    </thead>
                    @if($picture->histories)
                        @foreach($picture->histories as $history)
                            <tr>
                                <td>{{$picture->slug}}</td>
                                <td>{{$picture->token}}</td>
                                <td>{{$history->visitor_ip}}</td>
                                <td>{{$history->operation}}</td>
                            </tr>
                        @endforeach
                    @endif
                </table>
            </div>
        </div>
    </div>

@endsection

