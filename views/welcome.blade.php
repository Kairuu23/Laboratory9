<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome to the Homepage</h1>
    <a href="{{ route('register.show') }}">Go to Registration</a>
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
</body>
</html>
