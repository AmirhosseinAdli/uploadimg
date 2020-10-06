@extends('admin.panel')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="col-md-8 mb-3">{{ __('Users List') }}</div>
                <div class="col-md-8 mb-3">
                    <a href="{{ route('admin.add-users') }}">Create NewUser</a>
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
                        <td>Ali</td>
                        <td>2</td>
                        <td>ali@example.com</td>
                        <td>
                            <button type="submit" class="btn btn-success">
                                {{ __('edit') }}
                            </button>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-danger">
                                {{ __('delete') }}
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
