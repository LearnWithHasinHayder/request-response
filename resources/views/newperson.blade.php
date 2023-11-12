<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Person</title>
</head>
<body>
    <h1>Created a new person with </h1>
    <h2>Name: {{$name}}</h2>
    <h2>Email: {{$email}}</h2>
    @if($image)
    <h2>Image Name: {{$image}}</h2><br/>
    <img src="{{asset('images/'.$image)}}" alt="image" width="600px">
    @endif
</body>
</html>
