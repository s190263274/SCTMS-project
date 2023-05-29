@extends('layouts.panelPage.mentor.master')

@section('content')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Co-op Programs under Mentor: {{ $mentor->name }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="/mentorPanel">Mentor Panel</a></div>
                <div class="breadcrumb-item">Co-op Programs</div>
            </div>
        </div>

        <div class="section-body" id="layout_content">
            <div class="card">
                <div class="card-body">
                    @if (count($enrolledStudents) > 0)
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Student Name</th>
                                    <th>Registration Date</th>@extends('layouts.panelPage.mentor.master')

@section('content')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Co-op Programs under Mentor: {{ $mentor->name }}</h1>
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

                    @if (count($enrolledStudents) > 0)
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Student Name</th>
                                    <th>Registration Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($enrolledStudents as $enrolledStudent)
                                    <tr>
                                        <td>{{ $enrolledStudent['student']->name }}</td>
                                        <td>{{ $enrolledStudent['registrationDate'] }}</td>
                                        <td>
                                            <a href="{{ route('mentor.tasks.set', ['studentId' => $enrolledStudent['student']->id]) }}">Set Tasks </a> |
                                            <a href="{{ route('mentor.tasks.evaluate', ['studentId' => $enrolledStudent['student']->id]) }}"> Evaluate</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>No enrolled co-op programs found.</p>
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>

@endsection

                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($enrolledStudents as $enrolledStudent)
                                    <tr>
                                        <td>{{ $enrolledStudent['student']->name }}</td>
                                        <td>{{ $enrolledStudent['registrationDate'] }}</td>
                                        <td>
                                            <a href="{{ route('mentor.tasks.set', ['studentId' => $enrolledStudent['student']->id]) }}">Set Tasks </a> |
                                            <a href="{{ route('mentor.tasks.evaluate', ['studentId' => $enrolledStudent['student']->id]) }}"> Evaluate</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>No enrolled co-op programs found.</p>
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
