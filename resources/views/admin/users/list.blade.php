@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="col-md-8 mb-3">{{ __('Users List') }}</div>
                <div class="col-md-8 mb-3">
                    <a href="{{ route('admin.users.create') }}">Create New User</a>
                </div>

                <table class="table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>ImagesCont</th>
                        <th>Email</th>
                        <th>Operations</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>
                                {{$user->pictures()->count()}}
                            </td>
                            <td>{{$user->email}}</td>
                            <td class="row">
                                <a class="btn btn-success"
                                   href="{{ route('admin.users.edit',['user'=>$user->id]) }}">{{ __('Edit') }}</a>

                                <a class="btn btn-success"
                                   href="{{ route('panel.pictures.index',['user'=>$user->id]) }}">{{ __('Pictures') }}</a>
                                <form action="{{ route('admin.users.destroy',['user'=>$user->id]) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">
                                        {{ __('Delete') }}
                                    </button>
                                </form>
                                <a href="{{route('admin.users.show', [$user])}}" class="btn btn-success">History</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
