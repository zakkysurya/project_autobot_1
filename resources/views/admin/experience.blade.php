@extends('layouts.be')
@section('css')
{{-- <link href="{{ asset('source/assets/plugins/flatpickr/flatpickr.min.css') }}" rel="stylesheet">     --}}
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"> --}}
@endsection
@section('content')
@php
$years = array();
$current_year = date("Y");
for($i="2000"; $i <= $current_year; $i++){
   $years[$i] = $i; 
}
@endphp
<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Experience </h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Experience</h5>
            </div>
            <div class="card-body">
                <div class="example-container">

                    <div class="row example-content">
                        <form id="form-add_data" data-url="{{ route('experiences.store'); }}" action="">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="inputCompanyName" class="form-label">Company Name</label>
                                    <input type="text" name="inputCompanyName" class="form-control" id="inputCompanyName" placeholder="Company Name">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputPosition" class="form-label">Position</label>
                                    <input type="text" name="inputPosition" class="form-control" id="inputPosition" placeholder="Position">
                                </div>
                                <div class="col-md-2">
                                    <label for="inputStartYear" class="form-label">Start</label>
                                    <select id="inputStartYear" class="form-select" name="inputStartYear">
                                        <option selected value="0">--Pilih--</option>
                                        @foreach ($years as $row)
                                        <option value="{{ $row }}">{{ $row }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label for="inputEndYear" class="form-label">End</label>
                                    <select id="inputEndYear" class="form-select" name="inputEndYear">
                                        <option selected value="0">--Pilih--</option>
                                    @foreach ($years as $row)
                                    <option value="{{ $row }}">{{ $row }}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col">
                                    <button class="btn btn-lg btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                            
                        </form>
                    </div>

                    <div class="row example-content">
                        <div class="todo-list">
                            <ul class="list-unstyled" id="list_experiences">
                                {{-- SHOW DATA HERE --}}
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="{{ asset('source/assets/js/myjs/experience.js') }}"></script>
@endsection