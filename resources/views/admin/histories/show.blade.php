@extends('layouts.admin')
@section('content')


    <div class="container">
        <h1>[@Username]History</h1><br><br><br>

        <div class="container text-center">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th class="w-20"><h3>Picture</h3></th>
                        <th class="w-20"><h3>Used Slug</h3></th>
                        <th class="w-20"><h3>Used Token</h3></th>
                        <th class="w-20"><h3>Visitor IP</h3></th>
                        <th class="w-20"><h3>Opration</h3></th>
                    </tr>
                    </thead>
                    <tr>
                        <td><img src="" alt="" style="width: 100px ;height: 100px;"></td>
                        <td>Slug1</td>
                        <td>Token1</td>
                        <td>IP1</td>
                        <td>OPERATION</td>
                    </tr>
                    <tr>
                        <td><img src="" alt="" style="width: 100px ;height: 100px;"></td>
                        <td>Slug2</td>
                        <td>Token2</td>
                        <td>IP2</td>
                        <td>OPERATION</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

@endsection

