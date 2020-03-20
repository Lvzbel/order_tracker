@extends('layout')

@section('content')
    <h1>All Accounts</h1>

    <ul>
      @foreach ($accounts as $account)
        <li> {{ $account->account_name }}</li>
      @endforeach
    </ul>

@endsection