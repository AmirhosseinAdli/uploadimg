@extends('layouts.admin')
@section('content')


    <div class="container">
        <h1>History</h1><br><br><br>

        <div class="container text-center">
            <div class="table-responsive">
                <table class="table table-striped table-hover" >
                    <thead>
                    <tr>
                        <th class="w-10"><h3>Username</h3></th>
                        <th class="w-15"><h3>Pictalign-middleure</h3></th>
                        <th class="w-15"><h3>Used Slug</h3></th>
                        <th class="w-15"><h3>Used Token</h3></th>
                        <th class="w-15"><h3>Visitor IP</h3></th>
                        <th class="w-15"><h3>Opration</h3></th>
                    </tr>
                    </thead>
                    <tr>
                        <td>User1</td>
                        <td><img src="" alt="" style="width: 100px ;height: 100px;"></td>
                    </tr>
                    <tr>
                        <td>User2</td>
                        <td><img src="" alt="" style="width: 100px ;height: 100px;"></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

@endsection

