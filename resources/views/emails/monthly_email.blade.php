<!DOCTYPE html>
<html>
<head>
    <title>Monthly Email</title>
</head>
<body>
    <h1>Hello, {{ $user->name }}!</h1>
    <p>{{$user->Subscription}}のお支払日が近づいていますよ！</p>
    <a href="{{$user->Url}}">解約する場合はこちらにクリック</a>
</body>
</html>
