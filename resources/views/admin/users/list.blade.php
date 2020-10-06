@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="col-md-8 mb-3">{{ __('Users List') }}</div>
                <div class="col-md-8 mb-3">
                    <a href="#">Create NewUser</a>
                </div>

                <table class="table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>ImagesCont</th>
                        <th>Email</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Name</td>
                        <td>ImageCont</td>
                        <td>Email@example.com</td>
                        <td>
                            <button type="submit" class="btn btn-success">
                                <a href="">{{ __('edit') }}</a>
                            </button>

                        </td>
                        <td>
                            <button type="submit" class="btn btn-danger">
                                <a href="">{{ __('delete') }}</a>
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
