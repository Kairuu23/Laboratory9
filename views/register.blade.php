<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin-top: 50px;
            text-align: center;
        }
        form {
            display: inline-block;
            text-align: left;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        label, input {
            display: block;
            margin-bottom: 10px;
        }
        .error {
            color: red;
            margin-bottom: 10px;
        }
        button {
            margin-top: 10px;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>

    <h1>Register</h1>

    {{-- Display validation errors --}}
    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Registration form --}}
    <form method="POST" action="{{ route('register.submit') }}">
        @csrf

        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ old('name') }}" required>
        @error('name')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ old('email') }}" required>
        @error('email')
            <div class="error">{{ $message }}</div>
        @enderror

        <button type="submit">Register</button>
    </form>

</body>
</html>
