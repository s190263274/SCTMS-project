@extends('layouts.panelPage.student.master')

@section('content')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Available Co-op Training Programs</h1>
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
            @elseif(session('error'))
            <div class="alert alert-danger alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                        <span>&times;</span>
                    </button>
                    {{ session('error') }}
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
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Mentor</th>
                                            <th>Supervisor</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <!-- Add any other desired columns -->
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($availableCoops as $coop)
                                            <tr>
                                                <td>{{ $coop->name }}</td>
                                                <td>{{ $coop->mentor->name }}</td>
                                                <td>{{ $coop->supervisor->name }}</td>
                                                <td>{{ $coop->start_date->format('Y-m-d')  }}</td>
                                                <td>{{ $coop->end_date->format('Y-m-d')  }}</td>
                                                <!-- Add any other desired columns -->
                                                <td>
                                                    <a href="{{ route('student.coopRegistration.register', $coop->id) }}" class="btn btn-primary">Register</a>
                                                </td>
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
