<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <table class="table">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Age</td>
                <td>Phone</td>
                <td>City</td>
            </tr>
            @foreach($students as $key => $value)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$value->name}}</td>
                <td>{{$value->age}}</td>
                <td>{{$value->contact->phone}}</td>
                <td>{{$value->contact->city}}</td>
            </tr>
            @endforeach
        </table>
    </div>

    
</body>
</html>
