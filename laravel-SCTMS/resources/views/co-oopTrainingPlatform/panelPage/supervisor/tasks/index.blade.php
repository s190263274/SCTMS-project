@extends('layouts.panelPage.supervisor.master')

@section('content')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h4>Tasks for Students</h4>
        </div>

        <div class="section-body" id="layout_content">
            <div class="card">
                <div class="card-body">
                    @foreach ($students as $student)
                        @if ($student)
                            <h5>Student: {{ $student->name }}</h5>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Task</th>
                                        <th>Response</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tasks as $task)
                                        @if ($task->student_id == $student->id)
                                            <tr>
                                                <td>{{ $task->task1 }}</td>
                                                <td>{{ $task->response1 }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ $task->task2 }}</td>
                                                <td>{{ $task->response2 }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ $task->task3 }}</td>
                                                <td>{{ $task->response3 }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ $task->task4 }}</td>
                                                <td>{{ $task->response4 }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ $task->task5 }}</td>
                                                <td>{{ $task->response5 }}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
