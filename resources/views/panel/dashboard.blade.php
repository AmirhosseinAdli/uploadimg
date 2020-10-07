@extends('layouts.user')


@section('lang',str_replace('_', '-', app()->getLocale()) )


@section('title',config('app.title', 'Laravel'))

@push('style')
    <style>
        .emp-profile {
            padding: 3%;
            margin-top: 3%;
            margin-bottom: 3%;
            border-radius: 0.5rem;
            background: #fff;
        }
    </style>
@endpush

@section('part name')
    <h1 class="d-flex justify-content-center mb-5">Dashboard</h1>
@endsection

@section('content')

    <div class="row mt-5">
        @foreach($data as $title => $value)
            <div class="mx-5">
                <h2 class=" d-flex justify-content-center ">{{$title}}</h2>
                <h3 class=" d-flex justify-content-center ">{{$value}}</h3>
            </div>
        @endforeach
    </div>
@endsection
