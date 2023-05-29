@extends('layouts.panelPage.admin.master')

@section('content')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Add Coop Training Program</h1>
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
                                <a class="nav-link active" id="home-tab3"   role="tab" aria-controls="home" aria-selected="true">Add Program Details</a>
                            </li>
                        </ul>

                        <div class="tab-content" id="myTabContent2">
                            <div class="tab-pane fade show active" id="home3" role="tabpanel" aria-labelledby="home-tab3">

                            <form action="{{ route('adminPanel.coopTrainingPrograms.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" name="name" id="name" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="start_date">Start Date:</label>
                                    <input type="date" name="start_date" id="start_date" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="end_date">End Date:</label>
                                    <input type="date" name="end_date" id="end_date" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="registration_close_date">Registration Close Date:</label>
                                    <input type="date" name="registration_close_date" id="registration_close_date" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="mentor_id">Mentor:</label>
                                    <select name="mentor_id" id="mentor_id" class="form-control" required>
                                        <option value="">Select Mentor</option>
                                        @foreach($mentors as $mentor)
                                            <option value="{{ $mentor->id }}">{{ $mentor->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="supervisor_id">Supervisor:</label>
                                    <select name="supervisor_id" id="supervisor_id" class="form-control" required>
                                        <option value="">Select Supervisor</option>
                                        @foreach($supervisors as $supervisor)
                                            <option value="{{ $supervisor->id }}">{{ $supervisor->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Create</button>
                            </form>


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