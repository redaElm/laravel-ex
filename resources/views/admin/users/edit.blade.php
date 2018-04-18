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
                        <form class="form-horizontal form-material" method="post" role="form" action="{{ route('admin.users.update', $user->id) }}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="PUT">
                                    <div class="form-group">
                                        <label class="col-sm-12">تفعيل الحساب</label>
                                        <div class="col-sm-12">                                         
                                            <select class="form-control form-control-line" name="active">
                                              <option>0</option>
                                                <option>1</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">اختيار الخدمة</label>
                                        <div class="col-sm-12">                            
                                            <select class="form-control form-control-line" name="choix">
                                                <option>0</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                               
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">اختيار نوع المستخدم</label>
                                        <div class="col-sm-12">
                                            <select class="form-control form-control-line" name="type">
                                                <option>default</option>
                                                <option>admin</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success" type="submit">تعديل</button>
                                        </div>
                                   </div>           
                            </form>
    	   </div>
	   </div>

    </div>
		
</div>
  @endsection

