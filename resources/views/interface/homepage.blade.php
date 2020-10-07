@extends('layouts.interface')

@push('style')
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .headline {
            font-size: 24px;
        }

        .desc {
            font-size: 24px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        footer {
            background-color: #f2f2f2;
            padding: 25px;
        }
    </style>
@endpush



@section('lang')
    {{ str_replace('_', '-', app()->getLocale()) }}
@endsection

@section('title')
    {{ config('app.title', 'Laravel') }}
@endsection


@section('content')

    <div class="navbar-nav">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    @role('admin')
                    <a href="{{ route('admin.home') }}">Admin Panel</a>
                @else
                    <a href="{{ route('panel.home') }}">User Panel</a>
                    @endrole

                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif


        <div class="jumbotron" style="margin-top: 60px">
            <div class="container text-center" style="height: 400px">

                <br><br><br>
                <h1><b>Welcome to image sharing</b></h1><br>
                <p style="font-size: large">Upload and share your images </p><br><br>

                <button type="button" class="btn btn-info" style="width: 500px;height: 100px">
                    <a href="{{route('home.upload_now')}}" style="color: white;text-decoration: none">Start Upload</a>
                </button>

            </div>
        </div>


        <footer class="container-fluid text-center">
            <div class="container">
                <div class="row">

                    <div class="col-sm">
                        All users in site : {{$data['users']}}
                    </div>
                    <div class="col-sm">
                        All images in site : {{$data['images']}}
                    </div>
                    <div class="col-sm">
                        Visitores per day : {{$data['visitores']}}
                    </div>

                </div>
            </div>
        </footer>
    </div>

@endsection
