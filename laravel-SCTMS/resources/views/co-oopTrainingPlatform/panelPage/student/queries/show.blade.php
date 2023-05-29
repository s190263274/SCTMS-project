@extends('layouts.panelPage.student.master')

@section('content')
    <h1>{{ $query->subject }}</h1>

    <p>{{ $query->message }}</p>

    <p>From: {{ $query->student->name }}</p>

    @if($query->mentor)
        <p>Mentor: {{ $query->mentor->name }}</p>
    @endif

    @if($query->supervisor)
        <p>Supervisor: {{ $query->supervisor->name }}</p>
    @endif
@endsection
