@extends('layouts.panelPage.mentor.master')

@section('content')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h4>Queries for Mentor</h4>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="/mentorPanel">Mentor Panel</a></div>
                <div class="breadcrumb-item">Queries</div>
            </div>
        </div>
        <div class="section-body" id="layout_content">
            <div class="card">
                <div class="card-body">
                    @if ($queries->isEmpty())
                        <p>No queries available.</p>
                    @else
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Student ID</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($queries as $query)
                                    <tr>
                                        <td>{{ $query->id }}</td>
                                        <td>{{ $query->student_id }}</td>
                                        <td>{{ $query->subject }}</td>
                                        <td>{{ $query->message }}</td>
                                        <td>{{ $query->created_at }}</td>
                                        <td>{{ $query->updated_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
