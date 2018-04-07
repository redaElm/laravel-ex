<!doctype html>
<html lang="ar">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title></title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{ asset('css/animate.min.css')}}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{ asset('css/light-bootstrap-dashboard.css?v=1.4.0')}}" rel="stylesheet"/>


    <!--  CSS Update     -->
    <link href="{{ asset('css/css_update.css')}}" rel="stylesheet" />



    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/pe-icon-7-stroke.css')}}" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="orange" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="" class="simple-text">
                    Bot
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="">
                        <i class="pe-7s-graph"></i>
                        <p>لوحة التحكم</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="pe-7s-user"></i>
                        <p>الاعدادات</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="pe-7s-note2"></i>
                        <p>قائمة المهام</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="pe-7s-note2"></i>
                        <p>الادمين</p>
                    </a>
                </li>


            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#">
                                <p>تسجيل الخروج</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
            	<!-- ************** -->

                <div class="row">
                	<div class="col-md-2">
                        <div class="form-group">
                            <label>سرعة اللعبة</label>
                            <input type="text" class="form-control" placeholder="1" value="1">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>سرعة اللعبة</label>
                            <input type="text" class="form-control" placeholder="1" value="1">
                        </div>
                    </div>
                </div>
                    
<!--*****************************-->
                    

                <div class="row">

                    <div class="col-md-6">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">قطارات</h4>
                                <p class="category">Backend development</p>
                            </div>
                            <div class="content">
                            		<label>سرعة اللعبة</label>
		                            <input type="text" class="form-control" placeholder="1" value="1">
		                            <label>سرعة اللعبة</label>
		                            <input type="date" class="form-control" placeholder="1" value="2018">
		                            
                                </div>
                            </div>
                        </div>

                    <div class="col-md-6">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">قطارات</h4>
                                <p class="category">Backend development</p>
                            </div>
                            <div class="content">
                            	<label>سرعة اللعبة</label>
		                            <input type="text" class="form-control" placeholder="1" value="1">
		                            <label>سرعة اللعبة</label>
		                            <input type="date" class="form-control" placeholder="1" value="2018">
                                </div>
                            </div>
                    </div>


                    </div>

			<!-- **** ligne 2***-->
				<div class="row">

                    <div class="col-md-6">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">قطارات</h4>
                                <p class="category">Backend development</p>
                            </div>
                            <div class="content">
                            	<label>سرعة اللعبة</label>
		                            <input type="text" class="form-control" placeholder="1" value="1">
		                            <label>سرعة اللعبة</label>
		                            <input type="date" class="form-control" placeholder="1" value="2018">
                                </div>
                            </div>
                        </div>

                    <div class="col-md-6">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">قطارات</h4>
                                <p class="category">Backend development</p>
                            </div>
                            <div class="content">
                            	<label>سرعة اللعبة</label>
		                            <input type="text" class="form-control" placeholder="1" value="1">
		                            <label>سرعة اللعبة</label>
		                            <input type="date" class="form-control" placeholder="1" value="2018">
                                </div>
                            </div>
                    </div>


             	</div>

             	<!--***** row 3 ****-->
             	<div class="row">

                    <div class="col-md-6">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">قطارات</h4>
                                <p class="category">Backend development</p>
                            </div>
                            <div class="content">
                            	<label>سرعة اللعبة</label>
		                            <input type="text" class="form-control" placeholder="1" value="1">
		                            <label>سرعة اللعبة</label>
		                            <input type="date" class="form-control" placeholder="1" value="2018">
                                </div>
                            </div>
                        </div>

                    <div class="col-md-6">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">قطارات</h4>
                                <button class="btn btn-default" onclick="demo.showNotification('bottom','center')">Bottom Center</button>
                            </div>
                        </div>
                    </div>
             	</div>

<!-- *************************** -->



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
                                        <th>choix</th>
                                        <th>active</th>
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















                    
                    </div>
				</div>


                </div>
            </div>
        </div>


        

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="{{ asset('js/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
	<script src="{{ asset('js/bootstrap.min.js')}}" type="text/javascript"></script>

    <!--  Notifications Plugin    -->
    <script src="{{ asset('js/bootstrap-notify.js')}}"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="{{ asset('js/light-bootstrap-dashboard.js?v=1.4.0')}}"></script>


	<script type="text/javascript">
    	
	</script>

</html>
