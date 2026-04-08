@extends('inventory')

@section('content')
<h2>Add Blood Record</h2>
<form action="{{ route('inventory.store') }}" method="POST">
    @csrf
    <input type="text" name="blood_type" placeholder="A+, B-, etc">
    <input type="text" name="status" placeholder="Status">
    <input type="date" name="expiry_date">
    <input type="date" name="collection_date">
    <button type="submit">Save</button>
</form>
@endsection