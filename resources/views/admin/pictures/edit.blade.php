@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h2>Upload New Picture</h2>
                <form action="{{route('admin.pictures.update')}}">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Expire Date</span>
                        </div>
                        <input type="date" name="date" class="form-control" aria-label="Expire Date" aria-describedby="inputGroup-sizing-lg">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-sm">max views</span>
                        </div>
                        <input type="number" name="maxView" class="form-control" aria-label="max views" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Token</span>
                        </div>
                        <input type="text" name="token" value="{{$token}}" class="form-control" aria-label="Token" aria-describedby="inputGroup-sizing-sm" disabled placeholder="">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Slug</span>
                        </div>
                        <input type="text" name="slug" value="{{$slug}}" class="form-control" aria-label="Slug" aria-describedby="inputGroup-sizing-sm" disabled placeholder="">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Upload Picture</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" name="picture" class="custom-file-input" id="inputGroupFile01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Upload Holder Picture</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" name="holder" class="custom-file-input" id="inputGroupFile01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                    <button class="btn btn-primary w-25" type="submit">Submit</button>
                    <button class="btn btn-dark w-50" type="submit">Delete Permanently</button>
                </form>
            </div>
            <div class="col-md-3 offset-md-4">
                <img src="" alt="" class="img-thumbnail">
                <img src="" alt="" class="img-thumbnail">
            </div>
        </div>
    </div>
@endsection
