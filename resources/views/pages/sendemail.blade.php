<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1 class="text-center">Details</h1>

    <p><strong>First Name</strong>: {{ $firstName }}</p>
    <p><strong>Last Name</strong>: {{ $lastName }}</p>
    <p><strong>Phone Number</strong>: {{ $phone }}</p>
    @if ($e_message)
        <p><strong>Message</strong>: {{ $e_message }}</p>
    @else
        <p><strong>Address</strong>: {{ $address }}</p>
        <p><strong>Reason</strong>: {{ $reason }}</p>
    @endif
</body>
</html>