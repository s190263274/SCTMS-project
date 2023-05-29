@extends('layouts.panelPage.admin.master')

@section('content')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Students</h1>

            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="/">Admin Panel</a></div>
                <div class="breadcrumb-item">Supervisors</div>
            </div>
        </div>

        <div class="section-body" id="layout_content">
            <div>
                <div>
                    <div class="card">
                        <div class="card-header">
                            <a class="btn btn-primary float-right" href="{{ route('adminPanel.supervisors.create') }}"><i class="fa fa-plus"></i> Add Supervisor</a>
                        </div>
                        <div class="card-body">
                            @if ($supervisors->isEmpty())
                                <p>No supervisors found.</p>
                            @else
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th class="text-right1">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($supervisors as $supervisor)
                                            <tr>
                                                <td><span class="label label-success">{{ $supervisor->id }}</span></td>
                                                <td>{{ $supervisor->name }}</td>
                                                <td>{{ $supervisor->email }}</td>
                                                <td>{{ $supervisor->status == 1 ? 'Active' : 'Inactive' }}</td>
                                                <td>
                                                    <a href="{{ route('adminPanel.supervisors.edit', $supervisor->id) }}" class="btn btn-xs btn-primary btn-equal" data-toggle="tooltip" data-placement="top" title="Edit" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                                    <a href="#" onclick="openModal('Enroll','enroll/{{ $supervisor->id }}')" data-toggle="tooltip" data-placement="top" data-original-title="Enroll" title="Enroll" type="button" class="btn btn-xs btn-primary btn-equal"><i class="fa fa-plus"></i></a>
                                                    <form action="{{ route('adminPanel.supervisors.destroy', $supervisor->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this record?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-xs btn-primary btn-equal" data-original-title="Delete" title="Delete"><i class="fa fa-trash"></i></button>
                                                    </form>
                                                    
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @endif
                        </div><!--end .box-body -->
                    </div><!--end .box -->
                </div><!--end .col-lg-12 -->
            </div>
        </div>
    </section>
</div>

@endsection
