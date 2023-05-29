@extends('layouts.panelPage.student.master')

@section('content')

    <div class="card card-primary">
        <div class="card-header">
            <h4>Enrolled Co-op Programs</h4>
        </div>
        <div class="card-body">
            @if (count($enrolledCoops) > 0)
                <table class="table">
                    <thead>
                        <tr>
                            <th>Co-op Program Name</th>
                            <th>Mentor</th>
                            <th>Supervisor</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($enrolledCoops as $coop)
                        <tr>
                            <td>{{ $coop->coop->name }}</td>
                            <td>{{ $coop->coop->mentor->name }}</td>
                            <td>{{ $coop->coop->supervisor->name }}</td>
                            <td>{{ $coop->coop->start_date->format('Y-m-d') }}</td>
                            <td>{{ $coop->coop->end_date->format('Y-m-d') }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <p>No enrolled co-op programs found.</p>
            @endif
        </div>
    </div>


@endsection