@extends('adminadmin.layout.app')
@section('content')


<div class="app-content  my-3 my-md-5">
    <div class="side-app">
        <div class="page-header">

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{Request::root()}}/home">მთავარი</a></li>
                <li class="breadcrumb-item active" aria-current="page">დამატებული ვიდეოები</li>
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
                        <form method="POST" action="{{ route('admin.media_video_add_insert') }}" enctype="multipart/form-data">
                         @csrf
                         <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label class="form-label">ვიდეოს ლინკი</label>
                                <input type="text" class="form-control" name="video_gallery_url" placeholder="ლინკი" required>
                            </div>
                        </div>


                        <div class="form-group mb-0">
                            <div class="checkbox checkbox-secondary">
                                <button type="submit" class="btn btn-primary "> დამატება</button>
                            </div>
                        </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">ვიდეო გალერია</div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" >
                                <thead>
                                    <tr>
                                        <th class="wd-15p">ID</th>
                                        <th class="wd-15p">ვიდეოს ლინკი</th>
                                        <th class="wd-20p">ცვლილება</th>
                                        <th class="wd-20p">წაშლა</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    @foreach ($info as $task_item)
                                        <tr>
                                        <td>{{ $task_item->video_gallery_id  }}</td>
                                        <td>https://www.youtube.com/watch?v={{ $task_item->video_gallery_url }}</td>
                                        <td><a href="{{Request::root()}}/adminadmin/media_video_edit/{{ $task_item->video_gallery_id }}"><button class="btn btn-warning btn-sm">ცვლილება</button></a></td>
                                        <td><a href="{{Request::root()}}/adminadmin/media_video_drop/{{ $task_item->video_gallery_id  }}"><button class="btn btn-danger btn-sm">წაშლა</button></a></td>
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
