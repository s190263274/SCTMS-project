@extends('layouts.panelPage.supervisor.master')

@section('content')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">

            <h1>Profile</h1>

            <div class="section-header-breadcrumb">

                <div class="breadcrumb-item"><a href="/supervisorPanel">Supervisor Panel</a></div>
                <div class="breadcrumb-item">Profile</div>

            </div>

        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="control-group col-md-6">
                            <label for="name">Name</label>

                            <div class="controls">
                                <input name="name" type="text" class="form-control " required="required" value="{{ $user->name }}" id="name">
                                <p class="help-block">&nbsp;</p>
                            </div>
                        </div>

                        <div class="control-group col-md-6">
                            <label for="mobile_number">Mobile Number</label>

                            <div class="controls">
                                <input name="mobile_number" type="text" class="form-control " value="" id="mobile_number">
                                <p class="help-block">&nbsp;</p>
                            </div>
                        </div>

                        <div class="control-group col-md-6">
                            <label for="email">Email</label>

                            <div class="controls">
                                <input name="email" type="email" class="form-control " required="required" value="{{ $user->email }}" id="email">
                                <p class="help-block">Please provide your email. You will use this to login subsequently.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection

