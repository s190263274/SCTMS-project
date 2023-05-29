@extends('layouts.panelPage.mentor.master')

@section('content')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Evaluate Tasks for Student: {{ $student->name }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="/mentorPanel">Mentor Panel</a></div>
                <div class="breadcrumb-item">Co-op Programs</div>
            </div>
        </div>

        <div class="section-body" id="layout_content">
            <div class="card">
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('mentor.tasks.storeEvaluation', ['studentId' => $student->id]) }}">
                        @csrf
                        <div class="form-group">
                            <label for="evaluation1">Evaluate Student Attendance:</label>
                            <textarea class="form-control" id="evaluation1" name="evaluation1" rows="4">{{ old('evaluation1') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="evaluation2">Evaluate Student Performance on Completed Tasks:</label>
                            <textarea class="form-control" id="evaluation2" name="evaluation2" rows="4">{{ old('evaluation2') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="evaluation3">Comments:</label>
                            <textarea class="form-control" id="evaluation3" name="evaluation3" rows="4">{{ old('evaluation3') }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit Evaluation</button>
                    </form>

                </div>
            </div>
        </div>
    </section>
</div>

@endsection
