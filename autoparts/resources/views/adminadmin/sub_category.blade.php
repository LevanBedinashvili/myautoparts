@extends('adminadmin.layout.app')
@section('content')


<div class="app-content  my-3 my-md-5">
    <div class="side-app">
        <div class="page-header">

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{Request::root()}}/home">მთავარი</a></li>
                <li class="breadcrumb-item active" aria-current="page">დამატებული ქვეკატეგორიები</li>
            </ol>

        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">ქვეკატეგორიები</div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" >
                                <thead>
                                    <tr>
                                        <th class="wd-15p">ID</th>
                                        <th class="wd-15p">ფოტოსურათი</th>
                                        <th class="wd-15p">კატეგორიის დასახელება</th>
                                        <th class="wd-15p">ქვეკატეგორიის დასახელება</th>
                                        <th class="wd-20p">ცვლილება</th>
                                        <th class="wd-20p">წაშლა</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($info as $task_item)
                                        <tr>
                                        <td>{{ $task_item->id  }}</td>
                                        <td><img src="{{ asset('autoparts/storage/app/public/'. $task_item->image) }}" style="width: 100px; height: 50px;"alt="image"></td>
                                        <td>{{ $task_item->category->name_geo }}</td>
                                        <td>{{ $task_item->name_geo }}</td>
                                        <td><a href="{{Request::root()}}/adminadmin/subcat_edit/{{ $task_item->id  }}"><button class="btn btn-warning btn-sm">ცვლილება</button></a></td>
                                        <td><a href="{{Request::root()}}/adminadmin/sub_delete/{{ $task_item->id  }}"><button class="btn btn-danger btn-sm">წაშლა</button></a></td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div>
                    </div>
                    <!-- table-wrapper -->
                </div>
                <!-- section-wrapper -->
            </div>

        </div>


</div>
</div>


@endsection
