@extends('layouts.interface')

@section('content')
    <style>
        div.polaroid {
            width: 50%;

            background-color: white;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            margin-bottom: 25px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header card bg-primary">{{ __('Check Of Token And Show Image') }}</div>
                    <div class="card-body">
                        <form method="post" action="{{ route('token.store') }}">
                            @csrf

                            <div class="form-group row">
                                <lablel for="Token"
                                        class="col-md-4 col-form-label text-md-right ">{{ __('Token:') }}</lablel>
                                <div class="col-md-6">
                                    <input class="form-control " type="text" name="Token" required>

                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-success">
                                        {{ __('Check') }}
                                    </button>
                                </div>

                            </div>

                        </form>
                        <br>
                        <div class="polaroid offset-md-4">
                            <img src="#" style="width:100%; height: 400px;">
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
