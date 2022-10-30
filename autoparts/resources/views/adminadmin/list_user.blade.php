@extends('adminadmin.layout.app')
@section('content')


<div class="app-content  my-3 my-md-5">
    <div class="side-app">
        <div class="page-header">

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{Request::root()}}/home">მთავარი</a></li>
                <li class="breadcrumb-item active" aria-current="page">მომხმარებლების სია</li>
            </ol>

        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">მომხმარებლები</div> &nbsp;&nbsp;

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th class="wd-15p">ID</th>
                                        <th class="wd-15p">სახელი</th>
                                        <th class="wd-20p">ელ. ფოსტა</th>
                                        <th class="wd-20p">ცვლილება</th>
                                        <th class="wd-20p">წაშლა</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td><a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning btn-rounded btn-sm my-0">რედაქტირება</a></td>
                                        <td>
                                           <form method="POST" action="{{ route('user.destroy', $user->id) }}">
                                              @csrf
                                              @method("DELETE")
                                              <div class="form-group">
                                                 <input type="submit" class="btn btn-danger btn-rounded btn-sm my-0" value="წაშლა">
                                              </div>
                                           </form>
                                        </td>




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