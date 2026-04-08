@extends('inventory')

@section('content')
    @if(isset($bloods))
        {{-- LANDING PAGE / LIST VIEW --}}
        <h2>Blood Inventory List</h2>

        @if(session('success'))
            <div style="color: green; margin-bottom: 20px;">
                {{ session('success') }}
            </div>
        @endif

        <table border="1" cellpadding="10" style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Blood Type</th>
                    <th>Status</th>
                    <th>Expiry Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($bloods as $blood)
                    <tr>
                        <td>{{ $blood->id }}</td>
                        <td>{{ $blood->blood_type }}</td>
                        <td>{{ $blood->status }}</td>
                        <td>{{ $blood->expiry_date }}</td>
                        <td>
                            {{-- View Link --}}
                            <a href="{{ route('inventory.show', $blood->id) }}">View</a> | 
                            
                            {{-- Edit Link --}}
                            <a href="{{ route('inventory.edit', $blood->id) }}">Edit</a> | 

                            {{-- Delete Logic --}}
                            <form action="{{ route('inventory.destroy', $blood->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this record?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="color: red; border: none; background: none; cursor: pointer; text-decoration: underline; padding: 0;">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" style="text-align: center;">No blood inventory records found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    @elseif(isset($bloodinventory))
        {{-- SINGLE RECORD VIEW --}}
        <h2>Blood Donation Details</h2>
        <ul>
            <li><strong>ID:</strong> {{ $bloodinventory->id }}</li>
            <li><strong>Type:</strong> {{ $bloodinventory->blood_type }}</li>
            <li><strong>Status:</strong> {{ $bloodinventory->status }}</li>
            <li><strong>Collection Date:</strong> {{ $bloodinventory->collection_date }}</li>
            <li><strong>Expiry Date:</strong> {{ $bloodinventory->expiry_date }}</li>
        </ul>
        
        <a href="{{ route('inventory.index') }}">← Back to Inventory</a>
    @endif
@endsection