@extends('layouts.panel')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h2>Edit Picture</h2>
                <form method="post" action="{{route('panel.pictures.update',$picture)}}"enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"  id="inputGroup-sizing-sm">Expire Date</span>
                        </div>
                        <input type="date" name="expire_date" class="form-control" aria-label="Expire Date" aria-describedby="inputGroup-sizing-lg">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-sm">max views</span>
                        </div>
                        <input type="number" name="max_count" class="form-control" aria-label="max views" value="{{$picture->max_count}}" ">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Token</span>
                        </div>
                        <input type="text" name="token" class="form-control" aria-label="Token" value="{{$picture->token}}" >
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Slug</span>
                        </div>
                        <input type="text" name="slug" class="form-control" aria-label="Slug" value="{{$picture->slug}}" " >
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Upload Picture</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" name="picture_main" class="custom-file-input" id="inputGroupFile01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Upload Holder Picture</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" name="picture_deactive" class="custom-file-input" id="inputGroupFile02" >
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>




                    <button class="btn btn-primary w-25" type="submit">Submit</button>
                </form>
            </div>
            <div class="col-md-3 offset-md-4">
                <img src="" alt="" class="img-thumbnail">
                <img src="" alt="" class="img-thumbnail">
            </div>
        </div>
    </div>
@endsection
