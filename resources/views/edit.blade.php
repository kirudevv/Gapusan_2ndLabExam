@extends('inventory')

@section('content')
<h2>Edit Record #{{ $bloodinventory->id }}</h2>
<form action="{{ route('inventory.update', $bloodinventory->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="blood_type" value="{{ $bloodinventory->blood_type }}">
    <input type="text" name="status" value="{{ $bloodinventory->status }}">
    <input type="date" name="expiry_date" value="{{ $bloodinventory->expiry_date }}">
    <input type="date" name="collection_date" value="{{ $bloodinventory->collection_date }}">
    <button type="submit">Update</button>
</form>
@endsection