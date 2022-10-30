@extends('adminadmin.layout.app')



@section('content')



<div class="app-content  my-3 my-md-5">
    <div class="side-app">
        <div class="page-header">

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{Request::root()}}/home">მთავარი</a></li>
                <li class="breadcrumb-item active" aria-current="page"> ქვეკატეგორიის რედაქტირება</li>
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
                        <form method="post" action="{{ route('admin.sub_update', $info->id ) }}" enctype="multipart/form-data">
                         @csrf
                        @method('patch')

                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label class="form-label">სახელი ქართულად</label>
                                <select class="form-control select2" data-parsley-class-handler="#slWrapper2" data-parsley-errors-container="#slErrorContainer2" name="category" data-placeholder="Choose one" required>
                                    <option  selected>აირჩიეთ კატეგორია</option>
                                    @foreach ($cats as $cat)
                                    <option value="{{ $cat->id }}" {{ $cat->id == $info->cat_id ? 'selected' : '' }}>{{ $cat->name_geo }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                         <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label class="form-label">სახელი ქართულად</label>
                                <input type="text" class="form-control" name="name_geo" value="{{ $info->name_geo }}" placeholder="სახელი ქართულად" required>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label class="form-label">სახელი ინგლისურად</label>
                                <input type="text" class="form-control" name="name_eng" value="{{ $info->name_eng }}" placeholder="სახელი ინგლისურად" required>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label class="form-label">სახელი რუსულად</label>
                                <input type="text" class="form-control" name="name_rus" value="{{ $info->name_rus }}" placeholder="სახელი რუსულად" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="exampleInputEmail1">მონიშნეთ ფოტო</label>
                            <input type="file" name="image" class="form-control">
                        </div>

                        <div class="form-group mb-0">
                            <div class="checkbox checkbox-secondary">
                                <button type="submit" class="btn btn-primary ">კატეგორიის რედაქტირება</button>
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
