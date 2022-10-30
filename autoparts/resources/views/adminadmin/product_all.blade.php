@extends('adminadmin.layout.app')
@section('content')


<div class="app-content  my-3 my-md-5">
    <div class="side-app">
        <div class="page-header">

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{Request::root()}}/home">მთავარი</a></li>
                <li class="breadcrumb-item active" aria-current="page">დამატებული ავტონაწილები</li>
            </ol>

        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">ავტონაწილები</div>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" >
                                <thead>
                                    <tr>
                                        <th class="wd-15p">ID</th>
                                        <th class="wd-15p">ფოტოსურათი</th>
                                        <th class="wd-15p">კატეგორია</th>
                                        <th class="wd-15p">ქვეკატეგორია</th>
                                        <th class="wd-15p">ავტონაწილის დასახელება</th>
                                        <th class="wd-20p">ცვლილება</th>
                                        <th class="wd-20p">წაშლა</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    @foreach ($info as $task_item)
                                        <tr>
                                        <td>{{ $task_item->products_id  }}</td>
                                        <td><img src="{{ asset('autoparts/storage/app/public/'. $task_item->image) }}" style="width: 100px; height: 50px;"alt="image"></td>
                                        <td>{{ $task_item->mycategory->name_geo  }}</td>
                                        <td>{{ $task_item->subcategory->name_geo  }}</td>
                                        <td>{{ $task_item->products_title_geo }}</td>
                                        <td><a href="{{Request::root()}}/adminadmin/product_details/{{ $task_item->products_id   }}"><button class="btn btn-warning btn-sm">ცვლილება</button></a></td>
                                        <td><a href="{{Request::root()}}/adminadmin/product_drop/{{ $task_item->products_id   }}"><button class="btn btn-danger btn-sm">წაშლა</button></a></td>
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
        {{ $info->links() }}


</div>
</div>


@endsection
