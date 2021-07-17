<x-master-layout>
    <div class="page-wrapper">
        <div class="container-xl">
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> Ada yang salah dengan data yg diinput! <br><br>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <!-- Page title -->
            <div class="page-header d-print-none">
                <div class="row align-items-center">
                    <div class="col">
                        <h2 class="page-title">Manage Users</h2>
                        <div class="text-muted mt-1">{{ $data->count() }} users</div>
                    </div>
                    <div class="col-auto ms-auto d-print-none">
                        <div class="d-flex">
                            <div class="me-3 d-none d-md-block">
                                <div class="input-icon">
                                    <input type="text" class="form-control" placeholder="Search…">
                                    <span class="input-icon-addon"><i class="ti ti-search"></i></span>
                                </div>
                            </div>
                            @can('user-create')
                            <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                                data-bs-target="#modal-report">
                                {{-- <a href="{{route('users.create')}}" class="btn btn-primary"> --}}
                                <i class="ti ti-plus">&nbsp</i>Add New User
                            </a>
                            @endcan

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-body">
            <div class="container-xl">
                <div class="row row-cards">

                    <div class="col-12">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-vcenter table-mobile-md card-table">
                                    <thead>
                                        <tr>
                                            <th class="w-1">No</th>
                                            <th>Name</th>
                                            <th>Roles</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $key => $user)
                                        <tr>
                                            <td data-label="No">{{++$i}}</td>
                                            <td data-label="Name">
                                                <div class="d-flex py-1 align-items-center">
                                                    <span class="avatar me-2"
                                                        style="background-image: url(./static/avatars/005f.jpg)"></span>
                                                    <div class="flex-fill">
                                                        <div class="font-weight-medium">{{$user->name}}</div>
                                                        @role('Admin')
                                                        <div class="text-muted">
                                                            <a href="#" class="text-reset">{{$user->email}}</a>
                                                        </div>
                                                        @endrole
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="text-muted" data-label="Role">
                                                <span class="badge bg-blue-lt">{{ $user->roles->pluck('id')->min() }}</span>
                                                @if(!empty($user->getRoleNames()))
                                                @foreach($user->getRoleNames() as $v)
                                                <span class="badge bg-teal-lt">
                                                    {{$v}}
                                                </span>
                                                @endforeach
                                                @endif

                                            </td>
                                            <td>
                                                @can('user-edit')
                                                <a href="{{route('users.show' , $user->id)}}"
                                                    class="btn btn-info btn-sm">Show</a>
                                                <a href="{{route('users.edit' , $user->id)}}"
                                                    class="btn btn-primary btn-sm">Edit</a>
                                                @endcan
                                                @can('user-delete')
                                                {!! Form::open(['method' => 'DELETE' , 'route' => ['users.destroy' ,
                                                $user->id] , 'style' =>
                                                'display:inline']) !!}
                                                {!! Form::submit('DELETE' , ['class' => 'btn btn-danger btn-sm'])
                                                !!}
                                                {!! Form::close() !!}
                                                @endcan

                                                @if(Auth::id() !== $user->id)
                                                @role('Admin')
                                                <a href="{{route('impersonate' , $user->id)}}"
                                                    class="btn btn-warning btn-sm">Impersonate</a>
                                                @endrole
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <div class="card-footer">
                                {!! $data->render() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">New report</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    @include('users.create')
                    </div>
                </div>
            </div>
        </div>

    </div>
    {{-- <div class="row">

        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Users Management</h2>
            </div>
            @can('user-create')
            <div class="pull-right">
                <a href="{{route('users.create')}}" class="btn btn-success"> Create New Users</a>
    </div>
    @endcan
    </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Roles</th>
            <th width="280px">Action</th>
        </tr>
        @foreach($data as $key => $user)
        <tr>
            <td>{{++$i}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                @if(!empty($user->getRoleNames()))
                @foreach($user->getRoleNames() as $v)
                <label class="badge badge-success">
                    {{$v}}
                </label>
                @endforeach
                @endif
            </td>
            <td>
                @can('user-edit')
                <a href="{{route('users.show' , $user->id)}}" class="btn btn-info btn-sm">Show</a>
                <a href="{{route('users.edit' , $user->id)}}" class="btn btn-primary btn-sm">Edit</a>
                @endcan
                @can('user-delete')
                {!! Form::open(['method' => 'DELETE' , 'route' => ['users.destroy' , $user->id]]) !!}
                {!! Form::submit('DELETE' , ['class' => 'btn btn-danger btn-sm']) !!}
                {!! Form::close() !!}
                @endcan

                @if(Auth::id() !== $user->id)
                @role('Admin')
                <a href="{{route('impersonate' , $user->id)}}" class="btn btn-warning btn-sm">Impersonate</a>
                @endrole
                @endif
            </td>
        </tr>
        @endforeach
    </table>

    {!! $data->render() !!}

    <p class="text-center text-primary"><small>Mohamed Adel</small></p> --}}


</x-master-layout>
