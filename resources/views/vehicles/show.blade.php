@extends('layout')

@section('content')
<h2>{{ $vehicle->work_order }}</h2>
<p>Date: {{ $vehicle->created_at->format('M-d') }}</p>
@endsection