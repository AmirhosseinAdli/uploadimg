@extends('layouts.app')

@section('content')

    <style>
        footer {
            background-color: #f2f2f2;
            padding: 25px;
        }
    </style>

    <div class="jumbotron">
        <div class="container text-center" style="height: 400px">

            <h1><b>Welcom to image sharing</b></h1><br>
            <p style="font-size: large">Upload and share your images </p><br><br><br><br>
            <button type="button" class="btn btn-info"style="width: 500px;height: 100px">Start Upload</button>

        </div>
    </div>


    <footer class="container-fluid text-center">
        <div class="container">
            <div class="row">

                <div class="col-sm">
                    All users in site :
                </div>
                <div class="col-sm">
                    All images in site :
                </div>
                <div class="col-sm">
                    Visitores per day :
                </div>

            </div>
        </div>
    </footer>


@endsection
