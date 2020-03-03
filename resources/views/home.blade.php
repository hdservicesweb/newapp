@extends('layouts.app')
@section('content')
<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading">VYS MENU </div>
        <div class="list-group list-group-flush">
            <a href="#" class="list-group-item list-group-item-action bg-light">Campains</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Settings</a>
            <!-- <a href="#" class="list-group-item list-group-item-action bg-light">Overview</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Events</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Status</a> -->
        </div>
    </div>
    <div id="page-content-wrapper">
        <div class="container-fluid my-4">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Dashboard</div>

                        <div class="card-body">
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif

                            You are logged in!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection


