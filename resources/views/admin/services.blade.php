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
                <div class="text-right">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-form">
                        Add
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="example-container">
                    <div class="example-content bg-light" id="list_services">
                        @csrf
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal-form" tabindex="-1" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog">
        <form id="form-add_data" class="row g-3" data-url="{{ route('store'); }}">
            @csrf
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal-form">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
            <div class="mb-3">
                <label for="inputService" class="form-label">Service</label>
                <input type="text" name="service" class="form-control" id="inputService" >
              </div>
              <div class="mb-3">
                <label for="inputDescription" class="form-label">Description</label>
                <textarea name="description" class="form-control" id="inputDescription" rows="3"></textarea>
              </div>
             

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </div>

    </form>
    </div>
  </div>
@endsection
@section('js')
<script src="{{ asset('source/assets/js/myjs/service.js') }}"></script>
@endsection
