@extends('layouts.be')
@section('content')
<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Profile </h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-8">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Biodata</h5>
            </div>
            <div class="card-body">
                <form  action="{{ url('admin/profile/update') }}" method="POST" enctype="multipart/form-data" >
                    {{ method_field('PUT') }}
                    @csrf
                {{-- <div class="example-container"> --}}
                    <div class="example-content">
                        <div class="image-preview" id="image-preview">{{-- {{ url($data['data']->image) }} --}}
                            <img src="./fe/images/home/home.png" alt="Image Preview"
                                class="image img-thumbnail" width="200px" height="200px">
                        </div>
                    </div>
                    <div class="example-content">
                        <label for="photo" class="form-label">Photo<label class="text-danger">*</label></label>
                        <input type="file" accept=".jpg,.jpeg,.png" name="photo" class="form-control" id="photo" aria-describedby="error">
                        {{-- <div id="error" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                    <div class="row example-content">
                        <div class="col-8">
                            <label for="fullName" class="form-label">Full Name<label class="text-danger">*</label></label>
                            <input type="text" name="fullName" class="form-control" id="fullName" aria-describedby="error">
                            {{-- <div id="error" class="form-text">We'll never share your email with anyone else.</div> --}}
                        </div>
                        <div class="col-4">
                            <label for="nickName" class="form-label">Nick Name<label class="text-danger">*</label></label>
                            <input type="email" class="form-control" id="nickName" aria-describedby="error">
                            {{-- <div id="error" class="form-text">We'll never share your email with anyone else.</div> --}}
                        </div>
                    </div>
                    <div class="example-content">
                        <label for="phone" class="form-label">Number Phone<label class="text-danger">*</label></label>
                        <input type="text" name="phone" class="form-control" id="phone" aria-describedby="error">
                        {{-- <div id="error" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                    <div class="example-content">
                        <label for="email" class="form-label">Email<label class="text-danger">*</label></label>
                        <input type="text" name="email" class="form-control" id="email" aria-describedby="error">
                        {{-- <div id="error" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                    <div class="example-content">
                        <label for="address" class="form-label">Address<label class="text-danger">*</label></label>
                        <input type="text" name="address" class="form-control" id="address" aria-describedby="error">
                        {{-- <div id="error" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                    <div class="row example-content">
                        <div class="col-3">
                            <label for="fb" class="form-label">Facebook</label>
                            <input type="text" name="fb" class="form-control" id="fb" aria-describedby="error">
                            {{-- <div id="error" class="form-text">We'll never share your email with anyone else.</div> --}}
                        </div>
                        <div class="col-3">
                            <label for="ig" class="form-label">Instagram</label>
                            <input type="text" class="form-control" id="ig" aria-describedby="error">
                            {{-- <div id="error" class="form-text">We'll never share your email with anyone else.</div> --}}
                        </div>
                        <div class="col-3">
                            <label for="tweeter" class="form-label">Tweeter</label>
                            <input type="text" name="tweeter" class="form-control" id="tweeter" aria-describedby="error">
                            {{-- <div id="error" class="form-text">We'll never share your email with anyone else.</div> --}}
                        </div>
                        <div class="col-3">
                            <label for="linkId" class="form-label">Link ID</label>
                            <input type="email" class="form-control" id="linkId" aria-describedby="error">
                            {{-- <div id="error" class="form-text">We'll never share your email with anyone else.</div> --}}
                        </div>
                    </div>

                    <div class="example-content">
                        <label for="position" class="form-label">Work As<label class="text-danger">*</label></label>
                        <input type="text" name="position" class="form-control" id="position" aria-describedby="error">
                        {{-- <div id="error" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                    <div class="example-content">
                        <label for="job_description" class="form-label">Job Description<label class="text-danger">*</label></label>
                        <input type="text" name="job_description" class="form-control" id="job_description" aria-describedby="error">
                        {{-- <div id="error" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                    <div class="example-content">
                        <label for="self_description" class="form-label">Self Description<label class="text-danger">*</label></label>
                        <input type="text" name="self_description" class="form-control" id="self_description" aria-describedby="error">
                        {{-- <div id="error" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                    <div class="example-content">
                        <div class="d-grid mt-5">
                            <button class="btn btn-lg btn-primary" type="button">Update</button>
                        </div>
                    </div>
                {{-- </div> --}}
                </form>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Skills</h5>
            </div>
            <div class="card-body">
                <form  action="{{ url('admin/skill/insert') }}" method="POST" enctype="multipart/form-data" >
                    {{ method_field('PUT') }}
                    @csrf

                    <div class="example-content">
                        <label for="skill" class="form-label">Skill</label>
                        <input type="text" name="skill" class="form-control" id="skill" aria-describedby="error">
                        {{-- <div id="error" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                  
                    <div class="example-content">
                        <div class="d-grid mt-2">
                        <button class="btn btn-lg btn-primary" type="button">Save</button>
                        </div>
                    </div>
                </form>

                <div class="example-container">
                    <div class="example-content bg-light">
                        <div class="alert alert-custom" role="alert">
                            <div class="custom-alert-icon icon-primary"><i class="material-icons-outlined">done</i></div>
                            <div class="alert-content">
                                <span class="alert-title">Laravel</span>
                                {{-- <span class="alert-text">A custom alert with icon...</span> --}}
                            </div>
                        </div>
                        <div class="alert alert-custom" role="alert">
                            <div class="custom-alert-icon icon-success"><i class="material-icons-outlined">done</i></div>
                            <div class="alert-content">
                                <span class="alert-title">Codeigniter</span>
                            </div>
                        </div>
                        <div class="alert alert-custom" role="alert">
                            <div class="custom-alert-icon icon-danger"><i class="material-icons-outlined">done</i></div>
                            <div class="alert-content">
                                <span class="alert-title">Javascript</span>
                            </div>
                        </div>
                        <div class="alert alert-custom" role="alert">
                            <div class="custom-alert-icon icon-warning"><i class="material-icons-outlined">done</i></div>
                            <div class="alert-content">
                                <span class="alert-title">PHP</span>
                            </div>
                        </div>
                        <div class="alert alert-custom" role="alert">
                            <div class="custom-alert-icon icon-info"><i class="material-icons-outlined">done</i></div>
                            <div class="alert-content">
                                <span class="alert-title">Nodejs</span>
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