@extends('adminadmin.layout.app')
@section('content')
<div class="app-content  my-3 my-md-5">
    <div class="side-app">
        <div class="page-header">

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{Request::root()}}/home">მთავარი</a></li>
                <li class="breadcrumb-item active" aria-current="page"> ახალი კატეგორიის დამატება</li>
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
                        <form method="POST" action="{{ route('admin.category_add_insert') }}" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label class="form-label">სახელი ქართულად</label>
                                <input type="text" class="form-control" name="name_geo" placeholder="სახელი ქართულად" required>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label class="form-label">სახელი ინგლისურად</label>
                                <input type="text" class="form-control" name="name_eng" placeholder="სახელი ინგლისურად" required>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label class="form-label">სახელი რუსულად</label>
                                <input type="text" class="form-control" name="name_rus" placeholder="სახელი რუსულად" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="exampleInputEmail1">მონიშნეთ ფოტო</label>
                            <input type="file" name="image" class="form-control">
                        </div>

                        <div class="form-group mb-0">
                            <div class="checkbox checkbox-secondary">
                                <button type="submit" class="btn btn-primary ">კატეგორიის დამატება</button>
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
