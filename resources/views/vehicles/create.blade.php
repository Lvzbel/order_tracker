@extends('layout')

@section('content')
    <h1>Add New Vehicle</h1>
    <form action="" method="post">
      <label for="work-order">Work Order</label>
      <input name="work-order" type="text" id="work-order">

      <label for="account">Account</label>
      <select name="account" id="account">
        <option value="vroom">Vroom</option>
        <option value="herz">Hertz</option>
      </select>

      <button type="submit">Submit</button>
    </form>
@endsection