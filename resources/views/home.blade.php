{{-- @extends('layouts.mainpage') --}}
@extends('layouts.nav')

@section('content')
<div style="margin-top:50px"></div>
<div class="container">
    <div class="container">
        <div class="row my-2">
            <div class="col-lg-12 order-lg-2">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="" data-target="#profile" data-toggle="tab" class="nav-link profile">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a href="" data-target="#edit" data-toggle="tab" class="nav-link edit">Edit</a>
                    </li>
                    <li class="nav-item">
                        <a href="" data-target="#messages" data-toggle="tab" class="nav-link messages">Order Status</a>
                    </li>

                </ul>
                <div class="tab-content py-4">
                    <div class="tab-pane active" id="profile">
                        <h5 class="mb-3">User Profile</h5>
                        <div class="row">
                            <div class="col-md-6">
                                @foreach ($users as $user)
                                <h6>Name</h6>
                                <p>
                                    {{ $user->name }} {{$user->lastname}}
                                </p>
                                <h6>Email</h6>
                                <p>
                                    {{ $user->email }}
                                </p>
                                <h6>Address</h6>
                                <p>
                                    {{ $user->address }}
                                </p>
                                <h6>City</h6>
                                <p>
                                    {{ $user->city }}
                                </p>
                                <h6>Province</h6>
                                <p>
                                    {{ $user->province }}
                                </p>
                                <h6>Zip Code</h6>
                                <p>
                                   {{ $user->zip_code }}
                                </p>
                                @endforeach
                            </div>
                            <div class="col-md-6">
                                <h5 class="mt-2"><span class="fa fa-clock-o ion-clock float-right"></span> Recent Activity</h5>
                                <table class="table table-sm table-hover table-striped">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <strong>Abby</strong> joined ACME Project Team in <strong>`Collaboration`</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Gary</strong> deleted My Board1 in <strong>`Discussions`</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Kensington</strong> deleted MyBoard3 in <strong>`Discussions`</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>John</strong> deleted My Board1 in <strong>`Discussions`</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Skell</strong> deleted his post Look at Why this is.. in <strong>`Discussions`</strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-12">

                            </div>
                        </div>
                        <!--/row-->
                    </div>
                    <div class="tab-pane" id="messages">

                    </div>
                    <div class="tab-pane" id="edit">
                        <h5 class="mb-3">Edit Profile</h5>
                        @foreach ($users as $user)
                        <form role="form">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">First name</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" value="{{ $user->name }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" value="{{ $user->lastname }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="email" value="{{ $user->email }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Address</label>
                                <div class="col-lg-9">
                                <input class="form-control" type="url" value="{{ $user->address }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">City</label>
                                <div class="col-lg-3">
                                    <input class="form-control" type="text" value=" {{ $user->city }} ">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Province</label>
                                <div class="col-lg-3">
                                    <input class="form-control" type="text" value="{{ $user->province }}">
                                </div>
                                <div class="col-lg-3">
                                    <input class="form-control" type="text" value=" {{ $user->zip_code }} " placeholder="Zip">
                                </div>
                            </div>
                            @endforeach
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                <div class="col-lg-9">
                                    <input type="reset"  class="btn btn-secondary" value="Cancel">
                                    <input type="button" class="btn btn-primary" value="Save Changes">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="margin-top:425px"></div>
@endsection
