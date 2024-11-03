<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Praktikum Pemrograman Web</title>
</head>
<body>
    <h3>Welcome, {{ $data['name'] }}</h3>
    <h4> Thank you for registering yourself with us, Here are you details:
        <li><strong>Name: </strong> {{ $data['name'] }} </li>
        <li><strong>Email: </strong> {{ $data['email'] }} </li>
        <li><strong>Password: </strong> {{ $data['password'] }} </li>
    </h4>

    <p>Welcome blyat!</p>
</body>
</html>