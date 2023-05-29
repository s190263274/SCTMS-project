@extends('layouts.panelPage.student.master')

@section('content')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Response To Co-op Training Program Tasks</h1>
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

                                    <!-- tasks.index.blade.php -->

                                    <form method="POST" action="{{ route('student.tasks.saveResponses') }}">
                                        @csrf

                                        @for($i = 1; $i <= 5; $i++)
                                        <div class="card card-primary">

                                            <h3 class="card-header">Task {{ $i }}</h3>

                                            <p >Task Description:</p>
                                            
                                            <p class="form-control">{{ $task['task'.$i] }}</p>
                                            <p for="content">Response:</p>
                                            <input class="form-control" class="note-editor note-frame card" type="text" name="responses[{{ $i }}]"
                                                value="{{ $task['response'.$i] ?? '' }}" />
                                        </div>
                                        @endfor

                                        <button class="btn btn-primary" type="submit">Save Responses</button>
                                    </form>

                                </div>
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
