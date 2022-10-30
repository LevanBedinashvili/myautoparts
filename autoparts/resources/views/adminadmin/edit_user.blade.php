@extends('adminadmin.layout.app')
@section('content')
    

<div class="app-content  my-3 my-md-5">
    <div class="side-app">
        <div class="page-header">
            
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{Request::root()}}/home">მთავარი</a></li>
                <li class="breadcrumb-item active" aria-current="page">მოხმარებლის რედაქტირება</li>
            </ol>

        </div>
       

        <div class="row">
            <div class="col-xl-12">
                <div class="card m-b-20">
                    <div class="card-header">
                        <h2>{{Session::get('Success')}}</h2><br>
                       
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('user.update', $user->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method("PATCH")
                            <div class="form-group">
                                <label for="fname">სახელი:</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="uname">ელ. ფოსტა:</label>
                                <input type="email" class="form-control" id="uname" name="email" value="{{ $user->email }}"  required>
                            </div>
                            <div class="form-group ">
                                <label for="cpass">პაროლი:</label>
                                <input type="password" class="form-control" id="cpass" name="password" >
                            </div>
                            <div class="form-group ">
                                <label for="cpass">გაიმეორეთ პაროლი:</label>
                                <input type="password" class="form-control" id="cpass" name="repassword" >
                            </div>
                            პაროლის სიგრძე უნდა იყოს 8 სიმბოლო ან მეტი

                            <div class="form-group mb-0">
                                <div class="checkbox checkbox-secondary">
                                    <button type="submit" class="btn btn-primary ">რედაქტირება</button>
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