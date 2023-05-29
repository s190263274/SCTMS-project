@extends('layouts.panelPage.student.master')

@section('content')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Submit Query To Your Mentor</h1>
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

                                    <form method="POST" action="{{ route('student.queries.store', ['recipient' => 'mentor']) }}">
                                        @csrf

                                        <div class="form-group">
                                            <label for="subject">Subject</label>
                                            <input type="text" class="form-control" id="subject" name="subject" value="{{ old('subject') }}" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="message">Message</label>
                                            <textarea class="form-control" id="message" name="message" rows="4" required>{{ old('message') }}</textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Submit Query</button>
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
