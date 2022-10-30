@extends('adminadmin.layout.app')
@section('content')


<div class="app-content  my-3 my-md-5">
    <div class="side-app">
        <div class="page-header">

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{Request::root()}}/home">მთავარი</a></li>
                <li class="breadcrumb-item active" aria-current="page">საკონტაქტო ინფორმაციის განახლება</li>
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

                        <form method="POST" action="{{ route('admin.contact_update') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">Youtube</label>
                                <input type="text" class="form-control" name="contact_youtube" id="exampleInputname" value="{{ $info->contact_youtube }}" required>
                            </div>




                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">Instagram</label>
                                <input type="text" class="form-control" name="contact_instagram" id="exampleInputname" value="{{ $info->contact_instagram }}" required>
                            </div>




                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">Facebook</label>
                                <input type="text" class="form-control" name="contact_facebook" id="exampleInputname" value="{{ $info->contact_facebook }}" required>
                            </div>


                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">მისამართი ქართულად</label>
                                <input type="text" class="form-control" name="contact_address_geo" value="{{ $info->contact_address_geo }}" id="exampleInputname" required>
                            </div>


                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">მისამართი ინგლისურად</label>
                                <input type="text" class="form-control" name="contact_address_eng" value="{{ $info->contact_address_eng }}" id="exampleInputname" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">მისამართი რუსულად</label>
                                <input type="text" class="form-control" name="contact_address_rus" value="{{ $info->contact_address_rus }}" id="exampleInputname" required>
                            </div>


                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">ტელეფონის ნომერი 1</label>
                                <input type="text" class="form-control" name="contact_phone_one" value="{{ $info->contact_phone_one }}" id="exampleInputname" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">ტელეფონის ნომერი 2</label>
                                <input type="text" class="form-control" name="contact_phone_two" value="{{ $info->contact_phone_two }}" id="exampleInputname" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">ფოსტა 1</label>
                                <input type="text" class="form-control" name="contact_email_one" value="{{ $info->contact_email_one }}" id="exampleInputname" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">ფოსტა 2</label>
                                <input type="text" class="form-control" name="contact_email_two" value="{{ $info->contact_email_two }}" id="exampleInputname" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">მუშაობის დრო</label>
                                <input type="text" class="form-control" name="contact_time" value="{{ $info->contact_time }}" id="exampleInputname" required>
                            </div>

                            <div class="form-group mb-0">
                                <div class="checkbox checkbox-secondary">
                                    <button type="submit" class="btn btn-primary ">განახლება</button>
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
