@extends('layout')

@section('content')
<h1>All Vehicles</h1>

    <ul>
      @foreach ($vehicles as $vehicle)
    <h3>Work Order: {{ $vehicle->work_order }}</h3>
    <p>Date: {{ $vehicle->created_at->format('M-d') }}</p>
    <a href="/vehicles/{{ $vehicle->work_order}}/edit">Edit</a>
      @endforeach
    </ul>
@endsection