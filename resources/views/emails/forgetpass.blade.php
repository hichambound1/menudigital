<!DOCTYPE html>
<html>
<head>
    <title>Reset password</title>
</head>
<body>
    <h1>{{ $details['title'] }}</h1>
    <p>{{ $details['body'] }}</p>
    <a href="{{route('reset.password',$details['token'])}}">Reset your password</a>


</body>
</html>
