@extends('layouts.master')
@section('content')


<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Dashboard</h2>
            <small class="text-muted">Welcome to Good Health</small>
        </div>
        
        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon"> <i class="zmdi zmdi-account col-blue"></i> </div>
                    <div class="content">
                        <div class="text">Patient</div>
                        <div class="number">{{  $patient }}</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon"> <i class="zmdi zmdi-account col-green"></i> </div>
                    <div class="content">
                        <div class="text">Doctors</div>
                        <div class="number">{{  $doctor }}</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon"> <i class="zmdi zmdi-account col-blush"></i> </div>
                    <div class="content">
                        <div class="text">Employee</div>
                        <div class="number">{{  $employee }}</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon"> <i class="zmdi zmdi-balance col-cyan"></i> </div>
                    <div class="content">
                        <div class="text">Appointments</div>
                        <div class="number">{{  $appointments }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>Hospital Survey</h2>
                    </div>
                    <div class="body">
                        
                        <canvas id="line_chart" height="70"></canvas>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class=" col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="header">
                        <h2>New Patient <small >18% High then last month</small></h2>
                    </div>
                    <div class="body">
                        <div class="stats-report">
                            <div class="stat-item">
                                <h5>Overall</h5>
                                <b class="col-indigo">70.40%</b></div>
                            <div class="stat-item">
                                <h5>Montly</h5>
                                <b class="col-indigo">25.80%</b></div>
                            <div class="stat-item">
                                <h5>Day</h5>
                                <b class="col-indigo">12.50%</b></div>
                        </div>
                        <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(63, 81, 181)" data-highlight-Line-Color="#222"
                                 data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(63, 81, 181)" data-spot-Color="rgb(63, 81, 181, 0.7)"
                                 data-offset="90" data-width="100%" data-height="100px" data-line-Width="1" data-line-Color="rgb(63, 81, 181, 0.7)"
                                 data-fill-Color="rgba(63, 81, 181, 0.3)"> 6,1,3,3,6,3,2,2,8,2 </div>
                    </div>
                </div>
            </div>
            <div class=" col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="header">
                        <h2>Heart Surgeries <small>18% High then last month</small></h2>
                    </div>
                    <div class="body">
                        <div class="stats-report">
                            <div class="stat-item">
                                <h5>Overall</h5>
                                <b class="col-blue-grey">80.40%</b></div>
                            <div class="stat-item">
                                <h5>Montly</h5>
                                <b class="col-blue-grey">13.00%</b></div>
                            <div class="stat-item">
                                <h5>Day</h5>
                                <b class="col-blue-grey">9.50%</b></div>
                        </div>
                        <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                                 data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(96, 125, 139)" data-spot-Color="rgb(96, 125, 139, 0.7)"
                                 data-offset="90" data-width="100%" data-height="100px" data-line-Width="1" data-line-Color="rgb(96, 125, 139, 0.7)"
                                 data-fill-Color="rgba(96, 125, 139, 0.3)"> 6,4,7,8,4,3,2,2,5,6,7,4,1,5,7,9,9,8,7,6 </div>
                    </div>
                </div>
            </div>
            <div class=" col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="header">
                        <h2>Medical Treatment <small>18% High then last month</small></h2>
                    </div>
                    <div class="body">
                        <div class="stats-report">
                            <div class="stat-item">
                                <h5>Overall</h5>
                                <b class="col-green">84.60%</b></div>
                            <div class="stat-item">
                                <h5>Montly</h5>
                                <b class="col-green">15.40%</b></div>
                            <div class="stat-item">
                                <h5>Day</h5>
                                <b class="col-green">5.10%</b></div>
                        </div>
                        <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                                 data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(120, 184, 62)" data-spot-Color="rgb(120, 184, 62, 0.7)"
                                 data-offset="90" data-width="100%" data-height="100px" data-line-Width="1" data-line-Color="rgb(120, 184, 62, 0.7)"
                                 data-fill-Color="rgba(120, 184, 62, 0.3)"> 6,4,7,6,9</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2> Appointment List <small>Description text here...</small> </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Appointment Id</th>
                                    <th>Patient Name</th>
                                    <th>Appointment Date</th>
                                    <th>Doctor Name</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count($appointmentsall))
                                    @foreach($appointmentsall as $list)
                                        <tr>
                                            <td>{{ $list->id}}</td>
                                            <td>{{ $list->patient_name}} </td>
                                            <td>{{ $list->appointment_date}}</td>
                                            <td>{{ $list->doctors->doc_fname}} {{ $list->doctors->doc_lname}}</td>
                                            <td><span class="label label-primary">{{ $list->status}}</span> </td>
                                        </tr>
                                    @endforeach
                                @endif 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
	</div>
</section>

@endsection()