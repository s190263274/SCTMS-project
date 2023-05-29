@extends('layouts.panelPage.supervisor.master')

@section('content')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">

            <h4>Co-op Programs under Supervisor: </h4> 
            <h1> {{ $supervisor->name }}</h1>

            <div class="section-header-breadcrumb">

                <div class="breadcrumb-item"><a href="/mentorPanel">Supervisor Panel</a></div>
                <div class="breadcrumb-item">Co-op Programs</div>

            </div>

        </div>

        <div class="section-body" id="layout_content">

            <div class="card">
                <div class="card-body">
                    @if ($coops)
                            <div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Co-op Program Name</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($coops as $coop)
                                            <tr>
                                                <td>{{ $coop->name }}</td>
                                                <td>{{ $coop->start_date->format('Y-m-d') }}</td>
                                                <td>{{ $coop->end_date->format('Y-m-d') }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <p>No co-op programs found.</p>
                        @endif
                </div>
            </div>
        </div>
    </section>

</div>

@endsection

