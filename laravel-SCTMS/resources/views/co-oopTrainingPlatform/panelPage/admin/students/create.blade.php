@extends('layouts.panelPage.admin.master')

@section('content')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Add Student</h1>

            <div class="section-header-breadcrumb">

                <div class="breadcrumb-item"><a href="">Admin Panel</a></div>
                <div class="breadcrumb-item"><a href="">Students</a></div>
                <div class="breadcrumb-item">Add Student</div>

            </div>

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
            @endif

            <div>
                <div class="card">
                    <div class="card-body">

                        <ul class="nav nav-pills" id="myTab3" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab3"   role="tab" aria-controls="home" aria-selected="true">Student Details</a>
                            </li>
                        </ul>

                        <div class="tab-content" id="myTabContent2">
                            <div class="tab-pane fade show active" id="home3" role="tabpanel" aria-labelledby="home-tab3">

                                <form enctype="multipart/form-data" method="post" action="{{ route('adminPanel.students.store') }}">
                                    @csrf
                                    @method('POST')

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div>
                                                    <label for="name">Name</label>
                                                </div>
                                                <div>
                                                    <input name="name" type="text" class="form-control" required="required" value="{{ old('name') }}" id="name">
                                                    <p class="help-block">
                                                        <ul></ul>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div>
                                                    <label for="email">Email</label>
                                                </div>
                                                <div>
                                                    <input name="email" type="email" class="form-control" required="required" value="{{ old('email') }}" id="email">
                                                    <p class="help-block">
                                                        <ul></ul>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div>
                                                    <label for="mobile_number">Mobile Number</label>
                                                </div>
                                                <div>
                                                    <input name="mobile_number" type="text" class="form-control" value="{{ old('mobile_number') }}" id="mobile_number">
                                                    <p class="help-block">
                                                        <ul></ul>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div>
                                                    <label for="status">Status</label>
                                                </div>
                                                <div>
                                                    <select type="select" name="status" class="form-control" data-options="required:true" required="required" id="status">
                                                        <option value="1">Active</option>
                                                        <option value="0">Inactive</option>
                                                    </select>
                                                    <p class="help-block">
                                                        <ul></ul>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-footer col-lg-offset-1 col-md-offset-2 col-sm-offset-3">
                                        <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
                                    </div>
                                </form>

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
