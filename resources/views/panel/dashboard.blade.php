@extends('layouts.user')

@section('lang',str_replace('_', '-', app()->getLocale()) )


@section('title',config('app.title', 'Laravel'))

@push('style')
    <style>
        .emp-profile{
            padding: 3%;
            margin-top: 3%;
            margin-bottom: 3%;
            border-radius: 0.5rem;
            background: #fff;
        }
    </style>
@endpush


@section('content')


    Dashboard-User-Panel


@endsection
