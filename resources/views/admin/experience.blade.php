@extends('layouts.be')
@section('css')
{{-- <link href="{{ asset('source/assets/plugins/flatpickr/flatpickr.min.css') }}" rel="stylesheet">     --}}
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"> --}}
@endsection
@section('content')
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
                        <form action="" method="post">
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
                                        <span class="todo-item-title">Conpany Name<span class="badge badge-style-light rounded-pill badge-info">2020 sd 2018</span></span>
                                        <span class="todo-item-subtitle">Position</span>
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