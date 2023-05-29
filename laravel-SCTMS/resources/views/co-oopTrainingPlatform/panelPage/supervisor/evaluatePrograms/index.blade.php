@extends('layouts.panelPage.supervisor.master')

@section('content')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h4>Evaluate Programs under Supervisor:</h4>
            <h1>{{ $supervisor->name }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="/mentorPanel">Supervisor Panel</a></div>
                <div class="breadcrumb-item">Evaluate Programs</div>
            </div>
        </div>
        <div class="section-body" id="layout_content">
            <div class="card">
                <div class="card-body">
                    @if ($evaluationsWithCoop)
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Student Name</th>
                                    <th>Evaluation 1</th>
                                    <th>Evaluation 2</th>
                                    <th>Evaluation 3</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($evaluationsWithCoop as $item)
                                    <tr>
                                        <td>{{ $item['evaluation']->student->name }}</td>
                                        <td>{{ $item['evaluation']->evaluation1 }}</td>
                                        <td>{{ $item['evaluation']->evaluation2 }}</td>
                                        <td>{{ $item['evaluation']->evaluation3 }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>No evaluations available.</p>
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
