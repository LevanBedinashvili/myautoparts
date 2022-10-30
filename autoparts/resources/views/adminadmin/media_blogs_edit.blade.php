@extends('adminadmin.layout.app')
@section('content')


<div class="app-content  my-3 my-md-5">
    <div class="side-app">
        <div class="page-header">

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{Request::root()}}/home">მთავარი</a></li>
                <li class="breadcrumb-item active" aria-current="page"> სიახლის რედაქტირება</li>
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
                        <form method="POST" action="{{ route('admin.media_blogs_post_update', $info->news_id) }}" enctype="multipart/form-data">
                         @csrf

                         <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label class="form-label">სათაური ქართულად</label>
                                <input type="text" class="form-control" name="news_title_geo" value="{{ $info->news_title_geo }}" placeholder="სათაური ქართულად" required>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label class="col-form-label">ტექსტი ქართულად</label>
                                <textarea class="form-control" name="news_text_geo" id="editor1" rows="3" required>{{ $info->news_text_geo }}</textarea>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label class="form-label">სათაური ინგლისურად</label>
                                <input type="text" class="form-control" name="news_title_eng" placeholder="სათაური ინგლისურად" value="{{ $info->news_title_eng }}" required>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label class="col-form-label">ტექსტი ინგლისურად</label>
                                <textarea class="form-control" name="news_text_eng" id="editor2" rows="3" required>{{ $info->news_text_eng }}</textarea>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label class="form-label">სათაური რუსულად</label>
                                <input type="text" class="form-control" name="news_title_rus" placeholder="სათაური რუსულად" value="{{ $info->news_title_rus }}" required>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label class="col-form-label">ტექსტი რუსულად</label>
                                <textarea class="form-control" name="news_text_rus" id="editor3" rows="3" required>{{ $info->news_text_rus }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="exampleInputEmail1">მონიშნეთ ფოტო</label>
                            <input type="file" name="image" class="form-control">
                        </div>


                        <div class="form-group mb-0">
                            <div class="checkbox checkbox-secondary">
                                <button type="submit" class="btn btn-primary ">სიახლის განახლება</button>
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
