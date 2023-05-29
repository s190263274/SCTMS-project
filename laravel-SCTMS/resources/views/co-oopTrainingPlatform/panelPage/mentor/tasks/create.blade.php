@extends('layouts.panelPage.mentor.master')

@section('content')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Set Tasks for Student: {{ $student->name }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="/mentorPanel">Mentor Panel</a></div>
                <div class="breadcrumb-item">Tasks</div>
            </div>
        </div>

        <div class="section-body">
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

                    <form method="POST" action="{{ route('mentor.tasks.store', ['studentId' => $student->id]) }}">
                        @csrf

                        <div class="form-group">
                            <label for="task1">Task 1</label>
                            <input id="task1" type="text" class="form-control" name="task1" required>
                        </div>

                        <div class="form-group">
                            <label for="task2">Task 2</label>
                            <input id="task2" type="text" class="form-control" name="task2" required>
                        </div>

                        <div class="form-group">
                            <label for="task3">Task 3</label>
                            <input id="task3" type="text" class="form-control" name="task3" required>
                        </div>

                        <div class="form-group">
                            <label for="task4">Task 4</label>
                            <input id="task4" type="text" class="form-control" name="task4" required>
                        </div>

                        <div class="form-group">
                            <label for="task5">Task 5</label>
                            <input id="task5" type="text" class="form-control" name="task5" required>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save Tasks</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
