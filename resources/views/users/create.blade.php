
{!! Form::open(['route' => 'users.store' , 'method' =>'POST']) !!}

<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name' , null , ['placeholder' => 'Name' , 'class' => 'form-control']) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {!! Form::email('email' , null , ['placeholder' => 'Email' , 'class' => 'form-control']) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Password:</strong>
            {!! Form::password('password'  , ['placeholder' => 'Password' , 'class' => 'form-control']) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Confirm Password:</strong>
            {!! Form::password('confirm-password'  , ['placeholder' => 'Confirm Password' , 'class' => 'form-control']) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Role:</strong>
            {!! Form::select('roles[]'  , $roles , [] , ['multiple', 'class' => 'form-control']) !!}
        </div>
    </div>


</div>
<div class="modal-footer">
    <button class="btn btn-primary" type="submit">Submit</button>
</div>

{!! Form::close() !!}
