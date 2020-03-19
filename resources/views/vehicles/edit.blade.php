@extends('layout')

@section('content')
    <h1>Add New Vehicle</h1>
  <form action="/vehicles/{{ $vehicle->work_order }}" method="POST">
      @csrf
      @method('PUT')

      <div class="section">
        <label for="work-_order">Work Order</label>
        <input name="work_order" type="text" id="work_order" value="{{ $vehicle->work_order }}">
        @error('work_order')
          <p style="color: red;">{{ $errors->first('work_order')}}</p>
        @enderror
      </div>

      <div class="section">
        <label for="account_id"></label>
        <select name="account_id" id="account_id">
          <option value="1">Vroom</option>
          <option value="2">Hertz</option>
        </select>
        @error('account_id')
        <p style="color: red;">{{ $errors->first('account_id')}}</p>
      @enderror
      </div>

      <div class="section">
        <label for="notes">Notes (optional)</label>
        <textarea name="notes" id="notes" type="text">{{ $vehicle->notes }}</textarea>
        @error('notes')
        <p style="color: red;">{{ $errors->first('notes')}}</p>
      @enderror
      </div>

      <button type="submit">Submit</button>
    </form>
@endsection