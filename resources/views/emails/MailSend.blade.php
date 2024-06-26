<!DOCTYPE html>
<html>
<head>
    <title>{{ $data['name'] }} Message From ChurchConnect</title>
</head>
<body>
    <p><strong>Phone Number:</strong> {{ $data['phone'] }}</strong></p>
    <p><strong>Email: {{ $data['email'] }}</strong></p>
    <p><strong>Message:</strong></p>
    <p>{{ $data['message'] }}</p>
</body>
</html>
