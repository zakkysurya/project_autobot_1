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
                        <form class="row g-3">
                            <div class="col-md-2">
                                <div class="image-preview" id="image-preview">{{-- {{ url($data['data']->image) }} --}}
                                    <img src="./fe/images/team/user.png" alt="Image Preview"
                                        class="image img-thumbnail" width="200px" height="200px">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="photo" class="form-label">Photo<label class="text-danger">*</label></label>
                                <input type="file" accept=".jpg,.jpeg,.png" name="photo" class="form-control" id="photo">
                            </div>
                            <div class="col-md-6">
                                <label for="inputName" class="form-label">Name</label>
                                <input type="text" name="inputName" class="form-control" id="inputName" placeholder="Name">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPosition" class="form-label">Position</label>
                                <input type="text" name="inputPosition" class="form-control" id="inputPosition" placeholder="Position">
                            </div>
                            <div class="col-12">
                                <label for="inputText" class="form-label">Testimonial</label>
                                <input type="text" class="form-control" id="inputText" placeholder="Testimonial here...">
                            </div>
                            <div class="col-12">
                                <button type="button" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>

                    <div class="row example-content">
                        <div class="todo-list">
                            <ul class="list-unstyled">
                                <li class="todo-item">
                                    <div class="todo-item-content">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="./fe/images/team/img1.png" alt="Image Preview" class="img-thumbnail" width="200px" height="200px">
                                            </div>
                                            <div class="col-6">
                                                <span class="todo-item-title">2020 sd 2018 <span class="badge badge-style-light rounded-pill badge-info">SD</span></span>
                                                <span class="todo-item-subtitle">School Name</span>
                                            </div>
                                        </div>
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
<script>
    const inpImg = document.getElementById('photo')
    const imgPrev = document.getElementById('image-preview')
    const imgShow = imgPrev.querySelector('.image')

    inpImg.addEventListener('change', function() {
        const file = this.files[0]
        const type = file.type.split('/')[0]

        if (type != 'image') {
            imgShow.style.display = 'null'
            imgShow.setAttribute('src', '')
            imgShow.setAttribute('height', '')
            imgShow.innerHTML = '<p style="color:red"><i>Cannot read file</i></p>'
        } else {
            if (file) {
                const reader = new FileReader()
                imgShow.style.display = 'block'
                reader.addEventListener('load', function() {
                    imgShow.setAttribute('height', '300px')
                    imgShow.setAttribute('src', this.result)
                })
                reader.readAsDataURL(file);
            } else {
                imgShow.style.display = 'null'
                imgShow.setAttribute('src', '')
            }
        }

    })

</script>
@endsection