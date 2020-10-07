@extends('layouts.admin')

@section('part name')
    <h1 class="d-flex justify-content-center mb-5">{{$history->user->name}} History</h1>
@endsection

@section('content')

    @dd($item)

@endsection

