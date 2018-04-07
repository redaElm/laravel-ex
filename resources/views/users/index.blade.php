@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Products CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('users.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <!--table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($users as $user)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $user->name}}</td>
        <td>{{ $user->email}}</td>
        <td>
            <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
        </td>
    </tr>
    @endforeach
    </table-->

                        <div class="card">
                            <div class="header">
                                <h4 class="title">Table users</h4>
                                <p class="category">Here is a subtitle for this table</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr><th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>type</th>
                                        <th>choix</th>
                                        <th>active</th>
                                        <th>pypal</th>
                                    </tr></thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $user->name}}</td>
                                            <td>{{ $user->email}}</td>
                                            <td>{{ $user->choix}}</td>
                                            <td>{{ $user->active}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {!! $users->render() !!}

                            </div>
                        </div>
                        @endsection