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
                                <h4 class="card-title m-b-40">مخطط </h4>
                                        <div class="row">
                                            <div class="form-group col-4 ">
                                            <label>سرعة اللعبة </label>
                                            <input class="form-control" type="text" name="gameSpeed" value="1.5" id="gameSpeed">
                                            </div>
                                            <div class="form-group col-4 ">
                                            <label>سرعة الوحدة</label>
                                            <input class="form-control" type="text" name="unitSpeed" value="0.66" id="unitSpeed">
                                            </div>
                                        </div>
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active show" id="home-tab" data-toggle="tab" href="#home5" role="tab" aria-controls="home5" aria-expanded="true" aria-selected="true"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">قطارات</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile5" role="tab" aria-controls="profile" aria-selected="false"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">تنظيفات</span></a></li>

                                    <li class="nav-item"> <a class="nav-link" id="profile-tab" data-toggle="tab" href="#p3" role="tab" aria-controls="profile" aria-selected="false"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">كسورات</span></a></li>
                                    
                                </ul>
                                <div class="tab-content tabcontent-border p-20" id="myTabContent">
                                    <div role="tabpanel" class="tab-pane fade show active" id="home5" aria-labelledby="home-tab">
                                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown itan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                                        
                                        <div class="row">
                                            <div class="form-group col-3 ">
                                            <label>عدد القرى لكل قرية هدف</label>
                                            <input class="form-control" type="text" name="" value="1" id="multipl">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-6">
                                            <label>توقيت الوصول </label>
                                            <input type="datetime-local" class="form-control" id="arrivalTime" value="2018-04-18T20:00:00" step="1" name="">
                                            </div>
                                            <div class="form-group col-4">
                                            <label>الوحدة</label>
                                            <select class="form-control form-control-line" name="speed" id="speed">
                                                <option value="1800">محطمة</option>
                                                <option value="2100">نبيل</option>
                                                <option value="">فارس/رمح</option>
                                                <option value="1320">سيف</option>
                                                <option value="">ثقيل</option>
                                                <option value="">خفيف</option>
                                                <option value="">كشافة</option>
                                            </select>
                                            </div> 
                                        </div>
                                        <div class="form-group">
                                        <label>القرية  </label>
                                        <textarea class="form-control" rows="5" name="village" id="village"></textarea>
                                        </div>
        
                                        

                                    </div>
                                    <div class="tab-pane fade" id="profile5" role="tabpanel" aria-labelledby="profile-tab">
                                        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
                                    </div>



                                    <div role="tabpanel" class="tab-pane fade show active" id="p3" aria-labelledby="home-tab">
                                        
                                    </div>                                   
                                </div>




<!--*************************************-->

                                        <div class="form-group">
                                            <label>الهدف </label>
                                            <textarea class="form-control" rows="5" name="target" id="target"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                            <button class="btn btn-success" id="ok">تنفيذ</button>
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

<script src="{{ asset('dashboard/js/jquery.min.js')}}"></script>

<script type="text/javascript">

    

    $("#ok").click(function(){
        var village = $('#village').val().split('\n');
        var target = $('#target').val().split('\n');
        var d=[];
        var launchTim= [];
        

       if (verifierLingnes()== true) {
        for (var i = 0; i < village.length; i++) {
            d[i]=Distance(position(village[i]),position(target[i]));
            launchTim[i]=launchTime($('#arrivalTime').val(), d[i], $('#unitSpeed').val(), $('#gameSpeed').val(), $('#speed').val());
            console.log(d[i]);
            console.log(position(village[i])+" To "+position(target[i])+" / time : "+launchTim[i]);
        }
        

       }else if(verifierForMultiplLignes () == true ){
        var multipl=$('#multipl').val();
        var c =0;
        for (var i = 0; i < village.length; i+=Number(multipl)) {
            for (var j = 0; j < multipl; j++) {

                d[i+j]=Distance(position(village[i+j]),position(target[c]));
                launchTim[i+j]=launchTime($('#arrivalTime').val(), d[i+j], $('#unitSpeed').val(), $('#gameSpeed').val(), $('#speed').val());

                    console.log(position(village[i+j])+" To "+position(target[c])+" / time : "+launchTim[i+j]);
            }
            c++;
            
        }

       }




       /* var name="000 - (543|452) K45";
        var regexp = \{\d+|\d+\}/i;
        var result=name.match(regexp);
        alert(result[1]);*/
        /*var t= $("#time").val();
        //var d=Distance(position($("#village").val()),position($("#target").val()));
        var d=Distance(position("000 - (543|452) K45"),position("001    482|522 10.000"));
        //if (verifierLingnes()==true) {
            alert(launchTime(t,d,0.66,1.5,2100));
        //}*/
        
        
    });
                

var spear=18*60;
var sword=22*60;
var axe=18*60;
var archer=18*60;   
var spy= 9*60;        
var light=10*60;  
var marcher=10*60; 
var heavy=11*60;     
var ram=30*60;        
var catapult=30*60;
var snob=35*60;      
var knight=10*60;

function Distance(village,target) {
    return roundUp(Math.sqrt(Math.pow(Number(village[1])-Number(target[1]),2)+Math.pow(Number(village[2])-Number(target[2]),2)),4);

}

function position(name){
    var matches = name.match(/(\d+)\|(\d+)/);
    return matches;
}


function launchTime(arrivalTime, distance, unitSpeed, gameSpeed, speed){
  var seconds = (distance * speed) / (gameSpeed * unitSpeed);
  arrivalTime = new Date(arrivalTime);
  arrivalTime = arrivalTime.getTime() / 1000;
  var time = arrivalTime - seconds; 
   return new Date(time * 1000);
}

/*var name = "000 - (543|452) K45";
var matches = name.match(/(\d+)\|(\d+)/);
console.log('var x = ' + matches[1] + ';\nvar y = ' + matches[2] + ';');*/



function roundUp(num, precision) {
  precision = Math.pow(10, precision);
  return Math.ceil(num * precision) / precision;
}

//roundUp(3.142657, 3)

//************** villageval,targetval************ var date = new Date(1318023197289);

function verifierLingnes () {
    $('#village').val().trim();
    $('#target').val().trim();
   var lines1 = $('#village').val().split('\n');
   var lines2 = $('#target').val().split('\n');
   for(var i = 0;i < lines1.length;i++){
        if (lines1[i].indexOf("|") == -1) {
            return false;
        }
   }
   for(var i = 0;i < lines2.length;i++){
        if (lines2[i].indexOf("|") == -1) {
            return false;
        }
   }
        if (lines2.length != lines1.length) {
            return false;
        }

        return true;
}

function verifierForMultiplLignes () {
    $('#village').val().trim();
    $('#target').val().trim();
   var lines1 = $('#village').val().split('\n');
   var lines2 = $('#target').val().split('\n');
   for(var i = 0;i < lines1.length;i++){
        if (lines1[i].indexOf("|") == -1) {
            return false;
        }
   }
   for(var i = 0;i < lines2.length;i++){
        if (lines2[i].indexOf("|") == -1) {
            return false;
        }
   }
        if (lines1.length / lines2.length != $('#multipl').val() ) {
            return false;
        }

        return true;
}













</script>


           
                



@endsection