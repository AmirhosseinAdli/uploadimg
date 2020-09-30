@extends('layouts.panel')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>UPLOAD</h1>
                <br>
                <form action="">
                <label for="myfile">Select a file:</label>
                <input type="file" id="myfile" name="myfile">
                </form>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-md-6">
                <h2>view acsses number</h2>
                <br>
                <form action="">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check number acsses</label>
                    <br>
                    <label for="quantity">number</label>
                    <input type="number" id="quantity" name="quantity" min="1">
                </div>
                </form>

            </div>
            <div class="col-md-6">
                <h2>view acsses time</h2>
                <br>
                <form action="">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1" >Check time acsses</label>
                    <br>
                    <label for="quantity">day</label>
                    <input type="number" id="quantity" name="quantity" min="1">
            </div>
                </form>
        </div>
        </div>
            <br>
            <br>
            <br>
        <div class="row">
            <div class="col-md-12">
                <form action="">
                    <button type="submit" class="col-lg-6-12 btn btn-primary">GENRATE LINK</button>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <form action="">
                    <br>
                    <br>
                    <a href="">{{}}</a>
                </form>
            </div>
        </div>
    </div>
@endsection
