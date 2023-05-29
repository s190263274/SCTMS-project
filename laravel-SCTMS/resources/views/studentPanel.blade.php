@extends('layouts.panelPage.student.master')

@section('content')


<!-- Main Content -->
<div class="main-content" style="min-height: 755px;">
    <section class="section">
        <div class="section-header">
            <h1>Student Panel</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-md-5">

                    <div class="card card-danger">
                        <div class="card-header">
                            <div>
                                <h4> Research</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            You have pending Research. Please click to submit now.
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-success float-right"><i ></i> View Researchs</a>
                        </div>
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Enrolled Coop Programs</h4>
                        </div>
                        <div class="card-body">
                            <div class="summary">
                                <div class="summary-item">
                                    
                                    @php
                                        $coopController = new \App\Http\Controllers\Student\CoopRegistrationController();
                                        $enrolledCoops = $coopController->enrolledCoops();
                                    @endphp

                                    @if (count($enrolledCoops) > 0)
                                        <ul>
                                            @foreach ($enrolledCoops as $coop)
                                                <li class="media">
                                                    <div class="media-body">
                                                        <div class="media-title">
                                                            <h3>{{  $coop->coop->name }}</h3>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @else
                                        <p>No enrolled coop programs found.</p>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card card-success">
                        <div class="card-header">
                            <h4 class="d-inline"><i class="fa fa-comments"></i> Discussions</h4>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-pills" id="myTab3" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" id="home-tab3"  href="{{ route('student.queries.create.supervisor', ['recipient' => 'supervisor']) }}" role="tab" aria-controls="home" aria-selected="true">Send Query To Supervisor</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab3"  href="{{ route('student.queries.create.mentor', ['recipient' => 'mentor']) }}" role="tab" aria-controls="profile" aria-selected="false">Send Query To Mentor</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent2">
                                <div class="tab-pane fade show active" id="home3" role="tabpanel" aria-labelledby="home-tab3"></div>
                                <a href="{{ route('student.queries.index')}}" class="btn btn-primary btn-sm"><i class="fa fa-arrow-circle-right"></i> View All Queries</a>
                            </div>
                        </div>
                    </div>



                </div>


                <div class="col-md-5">

                    <div class="card card-primary">
                        <div class="card-header">
                            <h4><i ></i> Certificates</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col text-center">
                                    <div class="mt-2 font-weight-bold">Complation certification</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-info">
                        <div class="card-header">
                            <h4><i ></i> Tasks</h4>
                            <div class="card-header-action">
                                <a class="btn btn-primary" href="{{ route('student.tasks.index') }}">View All</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="summary">
                                <div class="summary-item">
                                    <ul class="list-unstyled list-unstyled-border">
                                    @php
                                        $pendingTasksCount = app(\App\Http\Controllers\Student\TasksController::class)->pendingTasksCount();
                                        $completedTasksCount = app(\App\Http\Controllers\Student\TasksController::class)->completedTasksCount();
                                        $totalTasksCount = $pendingTasksCount + $completedTasksCount;
                                    @endphp

                                    @if($completedTasksCount > 0)
                                        <li class="media">
                                            <div class="media-body">
                                                <div class="media-right">{{ $completedTasksCount }} Completed</div>
                                                <div class="media-title"><a href="{{ route('student.tasks.index') }}">{{ $totalTasksCount }} Coop Training Tasks</a></div>
                                            </div>
                                        </li>
                                    @endif

                                    @if($pendingTasksCount > 0)
                                        <li class="media">
                                            <div class="media-body">
                                                <div class="media-right">{{ $pendingTasksCount }} Pending</div>
                                                <div class="media-title"><a href="{{ route('student.tasks.index') }}">{{ $totalTasksCount }} Coop Training Tasks</a></div>
                                            </div>
                                        </li>
                                    @endif

                                    @if($completedTasksCount == 0 && $pendingTasksCount == 0)
                                        <li class="media">
                                            <div class="media-body">
                                                <div class="text-muted text-small">No tasks available.</div>
                                            </div>
                                        </li>
                                    @endif


                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                <div class="col-md-2">
                    <ul class="list-group">
                        <li class="list-group-item active">My Account</li>
                        <li class="list-group-item"><a href="{{ route('student.enrolled-coops') }}"><i class="fas fa-chalkboard-teacher"></i> My Program</a> </li>
                        <li class="list-group-item"><a href="{{ route('student.tasks.index') }}"><i class="fas fa-edit"></i> My Tasks</a> </li>
                        <li class="list-group-item"><a href="{{ route('student.queries.index')}}"><i class="fas fa-comment"></i> My Queries </a> </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
</div>


@endsection

