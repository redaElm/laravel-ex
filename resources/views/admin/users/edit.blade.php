@extends('layouts.dashboardAdmin')
@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <h2> تعديل</h2>
            </div>
        </div>
    </div>


<div class="row">


		<div class="col-lg-8 col-xlg-9 col-md-7">   		
				<div class="card">
     				<div class="card-body collapse show">
     					{!! Form::model($user, ['method' => 'PATCH','route' => ['admin.users.update', $user->id]]) !!}
        				@include('admin.users.form')
            			{!! Form::close() !!}
    				</div>
				</div>
			</div>
		</div>
  @endsection

