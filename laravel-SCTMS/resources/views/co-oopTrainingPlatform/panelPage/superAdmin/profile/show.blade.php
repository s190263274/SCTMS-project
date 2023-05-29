@extends('layouts.panelPage.superAdmin.master')

@section('content')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">

            <h1>Profile</h1>

            <div class="section-header-breadcrumb">

                <div class="breadcrumb-item"><a href="/superAdminPanel">SuperAdmin Panel</a></div>
                <div class="breadcrumb-item">Profile</div>

            </div>

        </div>

        <div class="section-body" id="layout_content">





            <!--breadcrumb-section ends-->
            <!--container starts-->
            <div class="card">
                <div class="card-body">
                    <div>
                        <form method="" action="">
                            <input type="" name="" value="">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <label for="password1" class="control-label"><label for="name">First Name</label></label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-6">
                                            <input name="name" type="text" class="form-control " required="required" value="John" id="name">
                                            <p class="help-block">
                                            <ul></ul>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <label for="password1" class="control-label"><label for="last_name">Last Name</label></label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-6">
                                            <input name="last_name" type="text" class="form-control " required="required" value="Smith" id="last_name">
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
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <label for="password1" class="control-label"><label for="about">About</label></label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-6">
                                            <textarea name="about" type="textarea" class="form-control " data-options="required:true" cols="50" rows="10" id="about">I am a skilled an qualified instructor</textarea>
                                            <p class="help-block">
                                            <ul></ul>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <label for="password1" class="control-label"><label for="notify">Receive Notifications</label></label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-6">
                                            <select type="select" name="notify" class="form-control" data-options="required:true" required="required" id="notify">
                                                <option value="1" selected="selected">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                            <p class="help-block">
                                            <ul></ul>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-lg-8 col-md-8 col-sm-6">
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection

