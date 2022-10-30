@extends('adminadmin.layout.app')
@section('content')
<div class="app-content  my-3 my-md-5">
    <div class="side-app">
        <br>
        <div class="row ">
            <div class="col-md-12">
                <div class="card m-b-20">
                    <!-- შეტყობინება -->
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    <div class="card-header">
                        <h3 class="card-title">ფოტოს დამატება</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.media_photo_add_insert') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('post')
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">ფოტო</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="form-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input"
                                                        name="image[]" accept="image/x-png,image/jpeg" multiple>
                                                    <label class="custom-file-label">აირჩიეთ ფოტო</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary" value="დამატება">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">ფოტო გალერია</h3>
            </div>
            <div class="card-body">
                <div class="demo-gallery">
                    <ul id="lightgallery" class="list-unstyled row" lg-uid="lg0">
                        @foreach ($infos as $gallery)
                        <li class="col-xs-6 col-sm-4 col-md-2" data-responsive="{{ asset('mygreenworld/storage/app/'. $gallery->image) }}" data-src="{{ asset('MCTRANS/storage/app/'. $gallery->image) }}" data-sub-html="<h4>Gallery Image 1</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" lg-event-uid="&amp;1">
                            <a href="{{ route('admin.media_photo_drop', $gallery->photo_gallery_id ) }}" onclick="return confirm('ნამდვილად გსურთ გალერიიდან ფოტოს წაშლა?')">
                                <img class="img-responsive" src="{{ asset('mygreenworld/storage/app/'. $gallery->image) }}" alt="Thumb-1" style="width: 235px; height:235px;">
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
