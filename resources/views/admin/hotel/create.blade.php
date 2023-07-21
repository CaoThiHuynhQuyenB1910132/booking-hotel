@extends('admin.layouts.app')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title mt-5">Create Hotel</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="{{ route('store.hotel') }}" method="POST">
                        @csrf

                        <div class="row formtype">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Name Hotel</label>
                                    <input class="form-control" type="text" name="name">
                                </div>
                            </div>
                        </div>
                        <div class="row formtype">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input class="form-control" type="text" name="address">
                                </div>
                            </div>
                        </div>

                        <div class="row formtype">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="text" class="form-control" name="phone">
                                </div>
                            </div>
                        </div>

                        <div class="row formtype">
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary buttonedit">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
