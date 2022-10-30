@extends('adminadmin.layout.app')
@section('content')
    

<div class="app-content  my-3 my-md-5">
    <div class="side-app">
        <div class="page-header">
            
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{Request::root()}}/home">მთავარი</a></li>
                <li class="breadcrumb-item active" aria-current="page">პაროლის შეცვლა</li>
            </ol>

        </div>
       

        <div class="row">
            <div class="col-xl-12">
                <div class="card m-b-20">
                    <div class="card-header">
                        <h2>{{Session::get('Success')}}</h2><br>
                       
                    </div>
                    <div class="card-body">
                        <form action="{{ route('settings.updatePassword', ['id'=>Auth::user()->id]) }}" method="POST">
                            @method("PATCH")
                            @csrf
                            <div class="form-group">
                                <label for="cpass">ახალი პაროლი:</label>
                                <input type="Password" class="form-control" id="cpass" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">პაროლის განახლება</button>
                        </form>
                    </div>
                </div>
            </div>
    </div>
</div>
</div>


@endsection