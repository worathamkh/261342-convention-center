@extends('layout.master')
@section('content')
    <form class="form-horizontal" role="form" method="POST" action="{{ route('registered.store') }}">
        <div class="panel panel-default">
            <div class="panel-heading">
                Create new registered
            </div>
            <div class="panel-body">
                <div class="form-group {{ ($errors->has('email')) ? 'has-error' : '' }}">
                    <label class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                        <p class="help-block">{{ ($errors->has('email') ? $errors->first('email') : '') }}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Phone</label>
                    <div class="col-sm-10">
                        <input type="text" name="card_name" class="form-control" value="{{ old('card_name') }}">
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" name="card_number" class="form-control" value="{{ old('card_number') }}">
                        <p class="help-block"></p>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <button type="submit" class="btn btn-sm btn-success btn-addon"><i class="glyphicon glyphicon-ok"></i>Create</button>
                <a href="{{ route('registered.index') }}" class="btn btn-default btn-sm btn-addon"><i class="glyphicon glyphicon-remove"></i>Cancel</a>
            </div>
        </div>
    </form>
@endsection
