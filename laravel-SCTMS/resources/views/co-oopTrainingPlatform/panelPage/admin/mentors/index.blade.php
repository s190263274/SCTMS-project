@extends('layouts.panelPage.admin.master')

@section('content')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Mentors</h1>

            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="/">Admin Panel</a></div>
                <div class="breadcrumb-item">Mentors</div>
            </div>
        </div>

        <div class="section-body" id="layout_content">
            <div>
                <div>
                    <div class="card">
                        <div class="card-header">
                            <a class="btn btn-primary float-right" href="{{ route('adminPanel.mentors.create') }}"><i class="fa fa-plus"></i> Add Mentor</a>
                        </div>
                        <div class="card-body">
                            @if ($mentors->isEmpty())
                                <p>No mentor found.</p>
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
                                            @foreach($mentors as $mentor)
                                            <tr>
                                                <td><span class="label label-success">{{ $mentor->id }}</span></td>
                                                <td>{{ $mentor->name }}</td>
                                                <td>{{ $mentor->email }}</td>
                                                <td>{{ $mentor->status == 1 ? 'Active' : 'Inactive' }}</td>
                                                <td>
                                                    <a href="{{ route('adminPanel.mentors.edit', $mentor->id) }}" class="btn btn-xs btn-primary btn-equal" data-toggle="tooltip" data-placement="top" title="Edit" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                                    <a href="#" onclick="openModal('Enroll','enroll/{{ $mentor->id }}')" data-toggle="tooltip" data-placement="top" data-original-title="Enroll" title="Enroll" type="button" class="btn btn-xs btn-primary btn-equal"><i class="fa fa-plus"></i></a>
                                                    <form action="{{ route('adminPanel.mentors.destroy', $mentor->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this record?')">
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
