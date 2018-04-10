@extends('layouts.dashboardAdmin')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <h2> المستخدمين</h2>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    
                        <div class="card">
                            <div class="card-body collapse show">
                               <table class="table color-table success-table tablesaw-swipe" data-tablesaw-mode="swipe">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Email</th>
                                            <th>Type</th>
                                            <th>Active</th>
                                            <th>Choix</th>
                                            <th>Paypal</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $user->email}}</td>
                                            <td>{{ $user->type}}</td>
                                            <td>{{ $user->active}}</td>
                                            <td>{{ $user->choix}}</td>
                                            <td>{{ $user->paypal}}</td>
                                            <td>
                                                <a class="btn waves-effect waves-light btn-primary" href="{{ route('admin.users.edit',$user->id) }}">تعديل</a>
                                                {!! Form::open(['method' => 'DELETE','route' => ['admin.users.destroy', $user->id],'style'=>'display:inline']) !!}
                                                {!! Form::submit('حذف', ['class' => 'btn btn-danger']) !!}
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                         @endforeach
                                    </tbody>
                                </table>
                                </div>
                                 {!! $users->render() !!}
                            </div>
                      

                        @endsection