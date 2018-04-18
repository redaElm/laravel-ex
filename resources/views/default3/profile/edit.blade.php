@extends('layouts.dashboardUser')

@section('content')

@if ($message = Session::get('success'))
     <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
            <span aria-hidden="true">×</span> 
        </button>
        <h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3> {{ $message }} </div>   
@endif

        


<aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="{{ url('default3') }}" aria-expanded="false"><span class="hide-menu"> لوحة لبتحكم </span> <i class="fa fa-tachometer"> </i></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{ url('default3/profile') }}" aria-expanded="false"><span class="hide-menu"> الملف الشخصي </span> <i class="fa fa-user-circle-o"> </i></a>
                        </li>
                        
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30">
                                    <h4 class="card-title m-t-10">الشخصي {{ Auth::user()->name }} ملف</h4>
                                    <h5 class="card-subtitle">المعلومات الشخصية</h5>
                                    <small class="text-muted"> البريد الالكتروني : </small>
                                    <h5 style="direction: ltr;">{{ Auth::user()->email }} </h5>
                                     <small class="text-muted"> (PayPal) البريد الالكتروني لبايبال : </small>
                                    <h5 style="direction: ltr;">{{ Auth::user()->emailpypal }} </h5>
                                     <small class="text-muted"> ( في لعبة حرب القبائل)  اسم المستخدم : </small>
                                    <h5 style="direction: ltr;">{{ Auth::user()->gamename }} </h5>
                                     <small class="text-muted"> ( من 1 الى 3 ( رقم الخدمة المختارة : </small>
                                    <h5 style="direction: ltr;">{{ Auth::user()->choix }} </h5>
                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Tab panes -->
                            <div class="card-body">
                               <form class="form-horizontal form-material" style="direction: rtl;" method="post" role="form" action="{{ route('default3.profile.update', Auth::user()->id) }}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="PUT">
                                    <div class="form-group">
                                        <label class="col-md-12">(PayPal) البريد الالكتروني لبايبال</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="{{ Auth::user()->emailpypal }}" name="emailpypal" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">اسم المستخدم في لعبة حرب القبائل</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="{{ Auth::user()->gamename }}" name="gamename" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">كلمة المرور في لعبة حرب القبائل</label>
                                        <div class="col-md-12">
                                            <input type="Password" name="gamepass" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">اختيار رقم الخدمة</label>
                                        <p>من اجل مراجعة </p>
                                        <div class="col-sm-12">
                                            <select class="form-control form-control-line" name="userchoix">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
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
                    <!-- Column -->
                </div>
            </div>

                



@endsection