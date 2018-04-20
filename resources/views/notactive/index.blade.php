@extends('layouts.dashboardUser')

@section('content')


<aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="{{ url('notactive') }}" aria-expanded="false"><span class="hide-menu"> لوحة لبتحكم </span> <i class="fa fa-tachometer"> </i></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{ url('notactive/profile') }}" aria-expanded="false"><span class="hide-menu"> الملف الشخصي </span> <i class="fa fa-user-circle-o"> </i></a>
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title pull-right">حسابك غير مفعل !! لتفعيله اتبع الخطوات التالية :</h4>
                               	<h5>اذهب الى الملف الشخصي و بعد ذلك</h5>
                                <h5></h5>
                            </div>
                        </div>
                    </div>
                </div>
     		</div>

				



@endsection