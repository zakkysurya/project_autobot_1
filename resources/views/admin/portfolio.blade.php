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
                    
                <form id="form-add_data" class="row g-3" data-url="{{ route('portfolio.store'); }}" enctype="multipart/form-data">
                    @csrf
                    <div class="example-content">
                        <div class="image-preview" id="image-preview">
                            <img src="" alt="Image Preview"
                                class="image img-thumbnail" width="200px" height="200px">
                        </div>
                    </div>
                    <div class="row example-content">
                        <div class="col-6">
                            <input type="file" name="img" accept=".jpg,.jpeg,.png" id="img" class="form-control" />
                            <div class="text-danger error-text img-error"></div>
                        </div>
                        <div class="col-2">
                            <button type="submit" id="btn-add_portfolio" class="btn btn-lg btn-primary" >Add</button>
                        </div>
                    </div>
                </form>
                    <div class="row example-content">
                        <div class="example-content" id="list_portofolio">
                            {{-- CONTENT HERE --}}
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    const inpImg = document.getElementById('img')
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
<script src="{{ asset('source/assets/js/myjs/portfolio.js') }}"></script>
@endsection