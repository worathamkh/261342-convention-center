@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <a href="/registered/create" class="btn btn-sm btn-success btn-addon"><i class="glyphicon glyphicon-plus"></i>Create</a>
        </div>
        <table class="table table-bordered has-action">
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Name</th>
                    <th>Card Number</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($registereds as $registered)
                    <tr>
                        <td>{{ $registered->email }}</td>
                        <td>{{ $registered->card_name }}</td>
                        <td>{{ $registered->card_number }}</td>
                        <td>
                            <a href="/registered/edit" class="btn btn-info btn-sm">Edit</a>
                            <a href="/registered/delete" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
