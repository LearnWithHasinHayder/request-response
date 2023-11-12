<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Person Form</title>
</head>
<body>
<h1>Create a Person with name and email</h1>
<form action="/persons" method="post" enctype="multipart/form-data">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="John"><br/><br/>
    <label for="email">Email</label>
    <input type="text" name="email" id="email" value="john@doe.com"><br/><br/>
    {{-- image element --}}
    <label for="image">Image</label>
    <input type="file" name="image" id="image"><br/><br/>
    {{-- image element --}}
    <input type="submit" value="Submit">
</body>
</html>
