@extends('layouts.interface')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header card bg-primary">{{ __('Check Of Token') }}</div>
                    <div class="card-body">
                        <form method="post" action="{{ route('token.store') }}" >
                            @csrf

                            <div class="form-group row">
                                <lablel for="Token" class="col-md-4 col-form-label text-md-right ">{{ __('Token:') }}</lablel>
                                <div class="col-md-6">
                                    <input class="form-control " type="text" name="Token" required>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-9 offset-md-4">
                                    <button type="submit" class="btn btn-success">
                                        {{ __('Check') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
