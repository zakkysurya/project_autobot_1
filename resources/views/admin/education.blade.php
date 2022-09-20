@extends('layouts.be')
@section('css')
{{-- <link href="{{ asset('source/assets/plugins/flatpickr/flatpickr.min.css') }}" rel="stylesheet">     --}}
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"> --}}
@endsection
@section('content')
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
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="inputSchoolName" class="form-label">School Name</label>
                                    <input type="text" name="inputSchoolName" class="form-control" id="inputSchoolName" placeholder="School Name">
                                </div>
                                <div class="col-md-2">
                                    <label for="inputLevel" class="form-label">Level</label>
                                    <select id="inputLevel" class="form-select" name="inputLevel">
                                        <option selected>--Pilih--</option>
                                        @foreach ($levels as $row)
                                        <option value="{{ $row }}">{{ strtoupper($row) }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label for="inputStartYear" class="form-label">Start</label>
                                    <select id="inputStartYear" class="form-select" name="inputStartYear">
                                        <option selected>--Pilih--</option>
                                        @foreach ($years as $row)
                                        <option value="{{ $row }}">{{ $row }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label for="inputEndYear" class="form-label">End</label>
                                    <select id="inputEndYear" class="form-select" name="inputEndYear">
                                        <option selected>--Pilih--</option>
                                        @foreach ($years as $row)
                                        <option value="{{ $row }}">{{ $row }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col">
                                    <button class="btn btn-lg btn-primary" type="button">Save</button>
                                </div>
                            </div>
                            
                        </form>
                    </div>

                    <div class="row example-content">
                        <div class="todo-list">
                            <ul class="list-unstyled">
                                <li class="todo-item">
                                    <div class="todo-item-content">
                                        <span class="todo-item-title">2020 sd 2018 <span class="badge badge-style-light rounded-pill badge-info">SD</span></span>
                                        <span class="todo-item-subtitle">School Name</span>
                                    </div>
                                    <div class="todo-item-actions">
                                        <a href="#" class="todo-item-delete"><i class="material-icons-outlined no-m">close</i></a>
                                        {{-- <a href="#" class="todo-item-done"><i class="material-icons-outlined no-m">done</i></a> --}}
                                    </div>
                                </li>
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

{{-- <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/plugins/confirmDate/confirmDate.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/plugins/weekSelect/weekSelect.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/plugins/rangePlugin.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/plugins/minMaxTimePlugin.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/plugins/monthSelect/index.js"></script>
<script src="https://flatpickr.js.org/flatpickr.js"></script> --}}

{{-- <script src="{{ asset('source/assets/plugins/flatpickr/flatpickr.js') }}"></script> --}}
{{-- <script src="{{ asset('source/assets/js/pages/datepickers.js') }}"></script> --}}
@endsection