@extends('layouts.be')
@section('css')
{{-- <link href="{{ asset('source/assets/plugins/flatpickr/flatpickr.min.css') }}" rel="stylesheet">     --}}
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"> --}}
@endsection
@section('content')
@php
 $levels = ['sd','smp','sma','d1','d2','d3','s1','s2','s3'];
$years = array();
$current_year = date("Y");
for($i="2000"; $i <= $current_year; $i++){
   $years[$i] = $i; 
}
@endphp
<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Education </h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Education</h5>
            </div>
            <div class="card-body">
                <div class="example-container">
                    <div class="row example-content">
                        <form id="form-add_data" data-url="{{ route('education.store'); }}" action="" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="inputSchoolName" class="form-label">School Name</label>
                                    <input type="text" name="inputSchoolName" class="form-control" id="inputSchoolName" placeholder="School Name">
                                </div>
                                <div class="col-md-2">
                                    <label for="inputLevel" class="form-label">Level</label>
                                    <select id="inputLevel" class="form-select" name="inputLevel">
                                        <option selected value="0">--Pilih--</option>
                                        @foreach ($levels as $row)
                                        <option value="{{ $row }}">{{ strtoupper($row) }}</option>
                                        @endforeach
                                    </select>
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
                            <ul class="list-unstyled"  id="list_educations">
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
<script src="{{ asset('source/assets/js/myjs/education.js') }}"></script>
@endsection