@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                <link href="/css/home.css" rel="stylesheet">
                    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
                        <div class="">
   
            <ul class="nav navbar-nav">
                    <li><a href="/home"><button type="button" class="btn btn-default" aria-label="Left Align">
                          <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
                        </button></a></li>
                    <li><a href=""><button type="button" class="btn btn-default" aria-label="Left Align">
                          <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                        </button></a></li>
                    <li><a href=""><button type="button" class="btn btn-default" aria-label="Left Align">
                      <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                        </button></a></li>
                    <li><a href=""><button type="button" class="btn btn-default" aria-label="Left Align">
                          <span class="glyphicon glyphicon-sort" aria-hidden="true"></span>
                        </button></a></li> 
            </ul>
    </div>
</div>
</nav>
    <div class="panel-heading"><strong><h1>Today</h1></strong></div>
                <div class="panel-body">
                    You are logged in to BI_Nutirition App!
                    <br>
                    <p><h3>Welcome to a brand new day Let's start logging your diet and take control of your health!</h3></p>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-6">
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="border-radius: 20px;">+</button>
                             <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog modal-sm">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h4 class="modal-title">Add your Diet</h4>
                                    </div>
                                    <div class="modal-body">
                                            <div class="row">
                                            <div class="btn btn-large btn-info" type="submit" onclick="location.href = 'http://localhost:8000/tasks';">Add BreakFast</div>
                                            <div class="btn btn-large btn-info" type="submit" onclick="location.href = 'http://localhost:8000/tasks';">Add Lunch</div>
                                            </div><br>
                                            <div class="row">
                                            <div class="btn btn-large btn-info" type="submit" onclick="location.href = 'http://localhost:8000/tasks';">Add Dinner</div>
                                            <div class="btn btn-large btn-info" type="submit" onclick="location.href = 'http://localhost:8000/tasks';">Add Snack</div>
                                            </div><br>
                                            <div class="row">
                                            <div class="btn btn-large btn-info" type="submit" onclick="location.href = 'http://localhost:8000/tasks';">Add Supplement</div>
                                            <div class="btn btn-large btn-info" type="submit" onclick="location.href = 'http://localhost:8000/tasks';">Add Medication</div>
                                            </div><br>
                                            <div class="row">
                                            <div class="btn btn-large btn-info" type="submit" onclick="location.href = 'http://localhost:8000/tasks';">Add Activity</div>
                                            <div class="btn btn-large btn-info" type="submit" onclick="location.href = 'http://localhost:8000/tasks';">Add Note</div>
                                            </div><br>
                                            <div class="row">
                                            <div class="btn btn-large btn-info" type="submit" onclick="location.href = 'http://localhost:8000/tasks';">Sleep/wake</div>
                                            <div class="btn btn-large btn-info" type="submit" onclick="location.href = 'http://localhost:8000/tasks';">Add Water</div>
                                            </div>

                                         </div>
                                      <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div> 
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </div>
     </div>
</div>


@endsection
