@extends('layout')

@section('content')
    <h1>Add New Vehicle</h1>
    <form action="/vehicles" method="POST">
      @csrf
      <label for="work-order">Work Order</label>
      <input name="work-order" type="text" id="work-order">

      <label for="account">Account</label>
      <select name="account" id="account">
        <option value="1">Vroom</option>
        <option value="2">Hertz</option>
      </select>

      <label for="notes">Notes (optional)</label>
      <textarea name="notes" id="notes" type="text"></textarea>

      <button type="submit">Submit</button>
    </form>
@endsection