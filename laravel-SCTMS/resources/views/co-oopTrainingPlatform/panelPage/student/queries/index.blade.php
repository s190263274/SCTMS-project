@extends('layouts.panelPage.student.master')

@section('content')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>My Queries</h1>
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
                        <div class="tab-content" id="myTabContent2">
                            <div class="tab-pane fade show active" id="home3" role="tabpanel"
                                aria-labelledby="home-tab3">
                                <div class="table-responsive">
                                    @if($queries->isEmpty())
                                        <p>No queries found.</p>
                                    @else
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Subject</th>
                                                    <th>Recipient</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($queries as $query)
                                                    <tr>
                                                        <td>{{ $query->subject }}</td>
                                                        <td>
                                                            @if($query->mentor_id)
                                                                Mentor
                                                            @elseif($query->supervisor_id)
                                                                Supervisor
                                                            @endif
                                                        </td>
                                                        
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    @endif
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile3" role="tabpanel"
                                aria-labelledby="profile-tab3">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
