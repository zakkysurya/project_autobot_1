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
                        <form  id="form-add_data" data-url="{{ route('testimonial.store'); }}" action="" method="post">
                            @csrf
                        <div class="row g-3">
                            <div class="col-md-2">
                                <div class="image-preview" id="image-preview">
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
                                <input type="text" name="inputText" class="form-control" id="inputText" placeholder="Testimonial here...">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                        </form>
                    </div>

                    <div class="row example-content">
                        <div class="todo-list">
                            <ul class="list-unstyled" id="list_testimonials">
                                 {{-- SHOW DATA HERE --}}
                            </ul>
                        </div>
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

@section('js')
<script src="{{ asset('source/assets/js/myjs/testimonial.js') }}"></script>
@endsection