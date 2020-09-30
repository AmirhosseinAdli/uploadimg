@extends('layouts.admin')
@section('content')

    <div class="container">

                <h1>Edit Image</h1><br><br><br>




        <div class="container text-center">


            <div class="row">

                <div style="width: 300px;height: 400px;border: black solid 1px">
                    <img src="#" alt="not loaded yet" >
                </div> <br><br>


                <div class="col-lg-8">

                    <form action="">
                        change title:
                        <input type="text"><br><br><br><br><br>




                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Delete img</button> <br><br><br><br><br>

                        Choose new image :
                        <input type="file"> <br><br><br>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">

                                        <h4 class="modal-title">Why you want to remove ?</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="radio">
                                                <label><input type="radio" name="optradio" checked>Unusual</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="optradio">+18</label>
                                            </div>
                                            <div class="radio disabled">
                                                <label><input type="radio" name="optradio" >Other</label>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">delete</button>
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">close</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div><br>

    </div>

@endsection
