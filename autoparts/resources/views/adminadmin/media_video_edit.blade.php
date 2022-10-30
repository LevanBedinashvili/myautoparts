@extends('adminadmin.layout.app')
@section('content')


<div class="app-content  my-3 my-md-5">
    <div class="side-app">
        <div class="page-header">

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{Request::root()}}/home">მთავარი</a></li>
                <li class="breadcrumb-item active" aria-current="page"> ვიდეოს რედაქტირება</li>
            </ol>

        </div>


        <div class="row">
            <div class="col-xl-12">
                <div class="card m-b-20">
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.media_video_update', $info->video_gallery_id) }}" enctype="multipart/form-data">
                         @csrf

                         <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label class="form-label">ვიდეოს ლინკი</label>
                                <input type="text" class="form-control" name="video_gallery_url" value="https://www.youtube.com/watch?v={{ $info->video_gallery_url }}" placeholder="ლინკი" required>
                            </div>
                        </div>

                        <div class="form-group mb-0">
                            <div class="checkbox checkbox-secondary">
                                <button type="submit" class="btn btn-primary ">ვიდეოს განახლება</button>
                            </div>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>







</div>
</div>


@endsection


@push('js')

    <script src="{{ asset('assets/admin/assets/ckeditor/ckeditor.js') }}"></script>


    <script>
        CKEDITOR.replace('editor1', {
            language: 'ka',
            height: 200,
        });

        CKEDITOR.replace('editor2', {
            language: 'ka',
            height: 200,
        });
        CKEDITOR.replace('editor3', {
            language: 'ka',
            height: 200,
        });
    </script>
@endpush
