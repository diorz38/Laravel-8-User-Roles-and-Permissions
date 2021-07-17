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
            <div class="page-header d-print-none">
                <div class="row align-items-center">
                    <div class="col">
                        <h2 class="page-title">Edit User</h2>
                    </div>
                    <div class="col-auto ms-auto d-print-none">
                        <div class="d-flex">
                            @can('user-create')
                            <a href="{{route('users.index')}}" class="btn btn-primary">
                                <i class="ti ti-chevrons-left">&nbsp</i>Back
                            </a>
                            @endcan
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-body">
            <div class="container-xl">
                {!! Form::model($user , ['route' => ['users.update' , $user->id] , 'method' =>'PATCH']) !!}
                <div class="row row-cards">
                    <div class="col-12">
                        <div class="row">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="col-12">
                                        <div class="row lg-6">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <div class="form-group">
                                                        <strong>Name:</strong>
                                                        {!! Form::text('name' , $user->name , ['placeholder' => 'Name' , 'class'
                                                        =>
                                                        'form-control']) !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <div class="form-group">
                                                        <strong>Email:</strong>
                                                        {!! Form::email('email' , $user->email , ['placeholder' => 'Email' ,
                                                        'class' =>
                                                        'form-control']) !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <div class="form-group">
                                                        <strong>Password:</strong>
                                                        {!! Form::password('password' , ['placeholder' => 'Password' , 'class'
                                                        =>
                                                        'form-control']) !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <div class="form-group">
                                                        <strong>Confirm Password:</strong>
                                                        {!! Form::password('confirm-password' ,
                                                        [
                                                        'placeholder' => 'Confirm Password' ,
                                                        'class' => 'form-control'
                                                        ])
                                                        !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <div class="form-group">
                                                        <strong>Role:</strong>
                                                        {!! Form::select('roles[]' , $roles , $userRole , ['multiple', 'class' =>
                                                        'form-select']) !!}
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="mb-3">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
        @push('page-scripts')

        @endpush
</x-master-layout>
