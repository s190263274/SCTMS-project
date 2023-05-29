@extends('layouts.panelPage.admin.master')

@section('content')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Coop Training Programs</h1>
        </div>

        <div class="section-body" id="layout_content">

            @if(session('success'))
            <div class="alert alert-success alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                        <span>&times;</span>
                    </button>
                    {{ session('success') }}
                </div>
            </div>
            @endif

            <div>
                <div class="card">
                    <div class="card-body">

                        <ul class="nav nav-pills" id="myTab3" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab3"   role="tab" aria-controls="home" aria-selected="true">Programs List</a>
                            </li>
                        </ul>

                        <div class="tab-content" id="myTabContent2">
                            <div class="tab-pane fade show active" id="home3" role="tabpanel" aria-labelledby="home-tab3">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Mentor</th>
                                                <th>Supervisor</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                                <th>Registration Close Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($programs as $program)
                                            <tr>
                                                <td>{{ $program->id }}</td>
                                                <td>{{ $program->name }}</td>
                                                <td>{{ $program->mentor->name }}</td>
                                                <td>{{ $program->supervisor->name }}</td>
                                                <td>{{ $program->start_date ? $program->start_date->format('Y-m-d') : 'N/A' }}</td>
                                                <td>{{ $program->end_date ? $program->end_date->format('Y-m-d') : 'N/A' }}</td>
                                                <td>{{ $program->registration_close_date ? $program->registration_close_date->format('Y-m-d') : 'N/A' }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="profile-tab3">

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
