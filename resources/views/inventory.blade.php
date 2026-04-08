<!DOCTYPE html>
<html>
<head>
    <title>Blood Inventory</title>
</head>
<body>
    <h1>Blood Inventory System</h1>
    
    @yield('content')

    <hr>
    <button onclick="window.location='{{ route('inventory.create') }}'">Add New Entry</button>
</body>
</html>