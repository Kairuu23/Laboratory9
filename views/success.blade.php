<!DOCTYPE html>
<html>
<head>
    <title>Registration Success</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin-top: 50px;
            text-align: center;
        }
        .container {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            background-color: #f9f9f9;
            display: inline-block;
        }
        h1 {
            color: #4CAF50;
        }
        p {
            font-size: 18px;
        }
        a {
            margin-top: 20px;
            display: inline-block;
            text-decoration: none;
            color: #fff;
            background-color: #4CAF50;
            padding: 10px 20px;
            border-radius: 5px;
        }
        a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Registration Successful!</h1>
        <p><strong>Name:</strong> {{ $name }}</p>
        <p><strong>Email:</strong> {{ $email }}</p>

        <a href="{{ url('/') }}">Go to Homepage</a>
    </div>

</body>
</html>
