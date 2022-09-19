@extends('layouts.be')
@section('css')
<!-- Material Icon Css -->
<link rel="stylesheet" href="{{ asset('fe/css/materialdesignicons.min.css') }}" type="text/css" />
@endsection
@section('content')
<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Services </h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Services</h5>
            </div>
            <div class="card-body">
                <div class="example-container">
                    <div class="example-content bg-light">
                        <div class="alert alert-custom" role="alert">
                            <div class="custom-alert-icon"><i class="mdi mdi-cached text-purple"></i></div>
                            <div class="alert-content">
                                <span class="alert-title">Laravel</span>
                                <span class="alert-text">A custom alert with icon...</span>
                                <button type="button" class="btn btn-sm btn-primary float-right"><i class="material-icons-outlined">edit</i>Edit</button>
                            </div>
                        </div>
                        <div class="alert alert-custom" role="alert">
                            <div class="custom-alert-icon icon-success"><i class="material-icons-outlined">done</i></div>
                            <div class="alert-content">
                                <span class="alert-title">Codeigniter</span>
                                <span class="alert-text">A custom alert with icon...</span>
                            </div>
                        </div>
                        <div class="alert alert-custom" role="alert">
                            <div class="custom-alert-icon icon-danger"><i class="material-icons-outlined">done</i></div>
                            <div class="alert-content">
                                <span class="alert-title">Javascript</span>
                                <span class="alert-text">A custom alert with icon...</span>
                            </div>
                        </div>
                        <div class="alert alert-custom" role="alert">
                            <div class="custom-alert-icon icon-warning"><i class="material-icons-outlined">done</i></div>
                            <div class="alert-content">
                                <span class="alert-title">PHP</span>
                                <span class="alert-text">A custom alert with icon...</span>
                            </div>
                        </div>
                        <div class="alert alert-custom" role="alert">
                            <div class="custom-alert-icon icon-info"><i class="material-icons-outlined">done</i></div>
                            <div class="alert-content">
                                <span class="alert-title">Nodejs</span>
                                <span class="alert-text">A custom alert with icon...</span>
                            </div>
                        </div>
                        <div class="alert alert-custom" role="alert">
                            <div class="custom-alert-icon icon-dark"><i class="material-icons-outlined">done</i></div>
                            <div class="alert-content">
                                <span class="alert-title">Vuejs</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection