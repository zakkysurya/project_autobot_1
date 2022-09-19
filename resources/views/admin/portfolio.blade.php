@extends('layouts.be')
@section('content')
<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Portfolio </h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Portfolio</h5>
            </div>
            <div class="card-body">
                <div class="example-container">
                    <div class="row example-content">
                        <div class="col-6">
                            <input type="file" class="form-control" />
                        </div>
                        <div class="col-2">
                            <button type="button" class="btn btn-lg btn-primary">Add</button>
                        </div>
                    </div>

                    <div class="row example-content">
                        <div class="example-content">
                            <figure class="figure">
                                <img src="{{ url('/fe/images/work/img-1.png') }}" class="figure-img img-fluid rounded" height="200px" width="200px"/>
                                <figcaption class="figure-caption text-center"> <button type="button" class="btn btn-sm btn-danger">Delete</button></figcaption>
                            </figure>
                            <figure class="figure">
                                <img src="{{ url('/fe/images/work/img-2.png') }}" class="figure-img img-fluid rounded" height="200px" width="200px"/>
                                <figcaption class="figure-caption text-center"> <button type="button" class="btn btn-sm btn-danger">Delete</button></figcaption>
                            </figure>
                            <figure class="figure">
                                <img src="{{ url('/fe/images/work/img-3.png') }}" class="figure-img img-fluid rounded" height="200px" width="200px"/>
                                <figcaption class="figure-caption text-center"> <button type="button" class="btn btn-sm btn-danger">Delete</button></figcaption>
                            </figure>
                            <figure class="figure">
                                <img src="{{ url('/fe/images/work/img-4.png') }}" class="figure-img img-fluid rounded" height="200px" width="200px"/>
                                <figcaption class="figure-caption text-center"> <button type="button" class="btn btn-sm btn-danger">Delete</button></figcaption>
                            </figure>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection