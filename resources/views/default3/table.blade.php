@extends('layouts.dashboardUser')

@section('content')


<aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="{{ url('default3') }}" aria-expanded="false"><span class="hide-menu"> لوحة لبتحكم </span> <i class="fa fa-tachometer"> </i></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{ route('default3.profile.edit',Auth::user()->id)}}" aria-expanded="false"><span class="hide-menu"> الملف الشخصي </span> <i class="fa fa-user-circle-o"> </i></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{ url('default3/table') }}" aria-expanded="false"><span class="hide-menu"> جدول المهام </span> <i class="fa fa-table"> </i></a>
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
                                <h4 class="card-title m-b-40">Tab </h4>
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active show" id="home-tab" data-toggle="tab" href="#home5" role="tab" aria-controls="home5" aria-expanded="true" aria-selected="true"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Home</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile5" role="tab" aria-controls="profile" aria-selected="false"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Profile</span></a></li>
                                    
                                </ul>
                                <div class="tab-content tabcontent-border p-20" id="myTabContent">
                                    <div role="tabpanel" class="tab-pane fade show active" id="home5" aria-labelledby="home-tab">
                                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown itan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                                        <div class="row">
                                             <table class="table color-table success-table tablesaw-swipe" data-tablesaw-mode="swipe">
                                    <thead>
                                        <tr>
                                            <th>الحالة</th>
                                            <th>الوحدة</th>
                                            <th>القرية الخاصة</th>
                                            <th>الهدف</th>
                                            <th>توقيت الإرسال</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                         
                                    </tbody>
                                </table>
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="profile5" role="tabpanel" aria-labelledby="profile-tab">
                                        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
                                    </div>                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>


   <style type="text/css">
       input,textarea{
        direction: initial !important;
       }
   </style>         


           
                



@endsection