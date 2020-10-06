@extends('layouts.app')




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




    <div class="container-fluid text-center" style="margin-top: 70px">
        <div class="row content">
            <div class="col-sm-2 sidenav" style="margin-top:90px">
                <h1>Admin-panel</h1>
                <p style="margin-top: 50px"><a href="#">Dashboard</a></p>
                <p><a href="#">Users</a></p>
                <p><a href="#">Pictures list</a></p>
                <p><a href="#">History</a></p>
                <p><a href="#" style="color: red">Logout</a></p>
            </div>
            <div class="col-sm-8 text-left">
                <h1 style="text-align: center">part name </h1>




                <div class="container emp-profile">

                        <div class="row">

                            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>    dakhele in tag safe morede nazar namayesh dade mishavad

                        </div>

                </div>


            </div>
        </div>
    </div>




@endsection